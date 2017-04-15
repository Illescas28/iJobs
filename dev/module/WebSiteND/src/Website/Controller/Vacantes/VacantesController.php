<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Website\Controller\Vacantes;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;

//// Filter ////
use Website\Filter\Postulantes\PostulanteFilter;
//// Form ////
use Website\Form\Postulantes\PostulanteForm;
//// Propel ////
use BasePeer;
use VacanteQuery;
use Postulante;
//// Shared ////
use Shared\Functions;

class VacantesController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel(array(
            'vacantes' => VacanteQuery::create()->paginate()
        ));
    }

    public function vacanteAction()
    {
        $request = $this->getRequest();
        //Cachamos el valor desde la url
        $id = (int) $this->params()->fromRoute('id');

        $vacante = VacanteQuery::create()->findByVacanteId($id)->toArray(null, false, BasePeer::TYPE_FIELDNAME);

        //Si es incorrecto redireccionavos al inicio
        if ($id) {
            return $this->redirect()->toRoute('index');
        }

        //Intanciamos nuestro formulario
        $postulanteForm = new PostulanteForm();
        //Si hicieron POST
        if ($request->isPost()) {

            //Instanciamos nuestro filtro
            $postulanteFilter = new PostulanteFilter();
            //Le ponemos nuestro filtro a nuesto fromulario
            $postulanteForm->setInputFilter($postulanteFilter->getInputFilter());
            //Le ponemos los datos a nuestro formulario
            //$postulanteForm->setData($request->getPost());

            // Almacenamos características del archivo
            $file = $this->params()->fromFiles('postulante_curriculum_vitae');
            // Creamos un array conjuntando los datos del post y del archivo
            $post = array_merge_recursive(
                $request->getPost()->toArray(),
                $request->getFiles()->toArray()
            );
            $postulanteForm->setData($post);

            //Validamos nuestro formulario
            if ($postulanteForm->isValid()) {

                $adapter = New \Zend\File\Transfer\Adapter\Http();
                $adapter->setValidators(array(
                    New \Zend\Validator\File\Extension(array(
                            'extension' => array('doc', 'jpg', 'jpeg', 'png', 'rtf')
                        )
                    ),
                    New \Zend\Validator\File\Size(array(
                        'max' => 1024000)
                    ),
                ));
                if (!$adapter->isValid()) {
                    $message = $adapter->getMessages();
                    foreach($message as $key => $value){
                        switch($key){
                            case "fileSizeTooBig":
                                $message = array("postulante_curriculum_vitae" => "El peso máximo permitido en subida de archivos es de 1MB.");
                                break;
                            case "fileExtensionFalse":
                                $message = array("postulante_curriculum_vitae" => "El formato no es valido. Formatos permitidos: doc, jpg, jpeg, png, rtf.");
                                break;
                        }
                    }
                    return new JsonModel(array(
                        'error' => $message
                    ));
                } else {
                    $adapter->setDestination(IMG_CV);
                    $cv = $vacante->vacante_nombre."_".date('d-m-Y-H-i-s')."_".$file['name'];
                    // Cómo hacer para guardar con distinto nombre
                    if ($adapter->receive($file['name'])) {
                        //Guardamos la imagen en IMG_CV = "C:\Program Files (x86)\Ampps\www\SitioWebND\public\img\CV\"
                    }
                }

                $Postulante = new Postulante();
                $postulantePost = array();
                //Recorremos nuestro formulario
                foreach ($postulanteForm->getData() as $postulanteKey => $postulanteValue){
                    if($postulanteKey != 'submit' && $postulanteKey != 'postulante_enviar_copia'){
                        if($postulanteKey == 'postulante_curriculum_vitae'){
                            $Postulante->setPostulanteCurriculumVitae(IMG_CV.$file['name']);
                        }else{
                            $Postulante->setByName($postulanteKey, $postulanteValue, BasePeer::TYPE_FIELDNAME);
                        }
                    }
                    $postulantePost[$postulanteKey] = $postulanteValue;
                }

                $Postulante->save();

                $postulantePost['postulante_curriculum_vitae'] = IMG_CV.$file['name'];
                $postulantePost['vacante_nombre'] = $Postulante->getVacante()->getVacanteNombre();


                $Functions = new Functions();
                $emailSendHR = $Functions->emailSendHR($postulantePost);
                if(!$emailSendHR) {
                    $messageArray[] = 'No fue posible guardar al postulante.';
                    return new JsonModel(array(
                        'error' => $messageArray
                    ));
                } else {
                    if(isset($postulantePost['postulante_enviar_copia']) && $postulantePost['postulante_enviar_copia'] == true){
                        $emailSendPostulante = $Functions->emailSendPostulante($postulantePost);
                        if(!$emailSendPostulante) {
                            $messageArray[] = 'No fue posible enviar copia al correo: "' . $postulantePost['postulante_correo'] . '"';
                            return new JsonModel(array(
                                'error' => $messageArray
                            ));
                        } else {
                            return new JsonModel(array(
                                'success' => $postulanteForm->getData()
                            ));
                        }
                    }

                    return new JsonModel(array(
                        'success' => $postulanteForm->getData()
                    ));
                }
            }else{
                $messageArray = array();
                foreach ($postulanteForm->getMessages() as $key => $value){
                    foreach($value as $val){
                        //Obtenemos el valor de la columna con error
                        if($key == "postulante_correo"){
                            $message = array($key => 'Favor de agregar un correo electrónico.');
                        }
                        if($key == "postulante_nombre_completo"){
                            $message = array($key => 'Favor de agregar un nombre completo.');
                        }
                        if($key == "postulante_telefono"){
                            $message = array($key => 'Favor de agregar un número telefónico.');
                        }
                        if($key == "postulante_mensaje"){
                            $message = array($key => 'Favor de agregar un mensaje.');
                        }
                        if($key == "postulante_curriculum_vitae"){
                            $message = array($key => $val);
                            //$message = array($key => 'Favor de agregar un currículum vitae.');
                        }
                        array_push($messageArray, $message);
                    }
                }
                if(!key_exists("postulante_correo", $postulanteForm->getMessages())){
                    array_push($messageArray, array('postulante_correo' => null));
                }
                if(!key_exists("postulante_nombre_completo", $postulanteForm->getMessages())){
                    array_push($messageArray, array("postulante_nombre_completo" => null));
                }
                if(!key_exists("postulante_telefono", $postulanteForm->getMessages())){
                    array_push($messageArray, array("postulante_telefono" => null));
                }
                if(!key_exists("postulante_mensaje", $postulanteForm->getMessages())){
                    array_push($messageArray, array("postulante_mensaje" => null));
                }
                if(!key_exists("postulante_curriculum_vitae", $postulanteForm->getMessages())){
                    array_push($messageArray, array("postulante_curriculum_vitae" => null));
                }
                return new JsonModel(array(
                    'errorForm' => $messageArray
                ));
            }
        }

        return new ViewModel(array(
            'postulanteForm' => $postulanteForm,
            'id'  => $id,
            'vacante' => $vacante[0],
        ));
    }

    public function consultaAction()
    {
        return new ViewModel(array(

        ));
    }
}
