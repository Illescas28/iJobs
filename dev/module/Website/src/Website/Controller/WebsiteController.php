<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Website\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;

//// Propel ////
use BasePeer;
use Usuarios;
use Empresas;
use Empresacontactos;
use VacantesQuery;
use Postulantes;
use AreaslaboralesQuery;
use SepomexQuery;

//// Compartido ////
use Compartido\Funciones;

class WebsiteController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel(array(
            'areas_laborales' => AreaslaboralesQuery::create()->find()->toArray(null, false, BasePeer::TYPE_FIELDNAME),
            'estados' => SepomexQuery::create()->groupBySepomexEstado()->find()->toArray(null, false, BasePeer::TYPE_FIELDNAME)
        ));
    }

    public function registrarmeAction()
    {
        return new ViewModel(array(
            'areas_laborales' => AreaslaboralesQuery::create()->find()->toArray(null, false, BasePeer::TYPE_FIELDNAME),
            'estados' => SepomexQuery::create()->groupBySepomexEstado()->find()->toArray(null, false, BasePeer::TYPE_FIELDNAME)
        ));
    }

    /**
     * Registrar Postulante
     * @return ViewModel
     */
    public function postulanteAction()
    {
        return new ViewModel(array());
    }

    /**
     * Registrar Empresa
     * @return ViewModel
     */
    public function empresaAction()
    {
        $request = $this->getRequest();

        if($request->isPost()){

            // Almacenamos características del archivo
            $archivo = $this->params()->fromFiles('empresa_logo_url');

            // Creamos un array conjuntando los datos del post y del archivo
            $post = array_merge_recursive(
                $request->getPost()->toArray(),
                $request->getFiles()->toArray()
            );

            $adapter = New \Zend\File\Transfer\Adapter\Http();
            $adapter->setDestination(URL_LOGO_EMPRESA);
            if ($adapter->receive($archivo['name'])) {
                //Guardamos la imagen en URL_LOGO_EMPRESA (Listener)
            }

            $Empresas = new Empresas();
            $empresaPost = array();

            //Recorremos nuestro formulario
            foreach ($post as $postKey => $postValue){
                if($postKey != 'submit' && $postKey != 'form_empresa_terminos' && $postKey != 'g-recaptcha-response' && $postKey != 'empresacontacto_nombre' && $postKey != 'empresacontacto_email' && $postKey != 'empresacontacto_telefono' && $postKey != 'empresacontacto_movil'){
                    if($postKey == 'empresa_logo_url'){
                        $Empresas->setEmpresaLogoUrl(URL_LOGO_EMPRESA.$archivo['name']);
                    }else{
                        $Empresas->setByName($postKey, $postValue, BasePeer::TYPE_FIELDNAME);
                    }
                    $empresaPost[$postKey] = $postValue;
                }
            }

            $Empresacontactos = new Empresacontactos();
            $empresacontactosPost = array();
            //Recorremos nuestro formulario
            foreach ($post as $postKey => $postValue){
                if($postKey != 'submit' && $postKey != 'form_empresa_terminos' && $postKey != 'g-recaptcha-response' && $postKey != 'empresa_nombre' && $postKey != 'empresa_logo_url'&& $postKey != 'empresas_razon_social'  && $postKey != 'empresa_rfc' && $postKey != 'empresa_direccion_fiscal'){
                    $Empresacontactos->setByName($postKey, $postValue, BasePeer::TYPE_FIELDNAME);
                    $empresacontactosPost[$postKey] = $postValue;
                }
            }

            try {
                /*
                $Funciones = new Funciones();
                $fueEnviadoCorreoRH = $Funciones->enviarCorreoRH(???);
                if($fueEnviadoCorreoRH) {
                    $fueEnviadoCorreoPostulante = $Funciones->enviarCorreoPostulante(???);
                    if($fueEnviadoCorreoPostulante){
                */
                        //Guardamos en la base de datos
                        $Empresas->save();
                        $Empresacontactos->setEmpresaId($Empresas->getEmpresaId())->save();
                        $Usuarios = new Usuarios();
                        //$Usuarios->set

                        $this->view = new JsonModel(array(
                            'enviado' => true
                        ));
                /*
                    }else{
                        $this->view = new JsonModel(array(
                            'enviado' => false,
                            'detalles' => "Error al enviar correo. Favor de intentar mas tarde."
                        ));
                    }
                } else {
                    $this->view = new JsonModel(array(
                        'enviado' => false,
                        'detalles' => "Error al enviar correo. Favor de intentar mas tarde."
                    ));
                }
                */
            } catch (\Exception $e) {
                $this->view = new JsonModel(array(
                    'enviado' => false,
                    'detalles' => $e->getMessage()
                ));
            }
        }else{
            $this->view = new ViewModel(array());
        }

        return $this->view;
    }

    public function vacantesAction()
    {
        //Cachamos el valor desde la url
        $idPage = (int) $this->params()->fromRoute('idPage');
        return new ViewModel(array(
            'vacantes' => VacantesQuery::create()->paginate($idPage),
            'areas_laborales' => AreaslaboralesQuery::create()->find()->toArray(null, false, BasePeer::TYPE_FIELDNAME),
            'estados' => SepomexQuery::create()->groupBySepomexEstado()->find()->toArray(null, false, BasePeer::TYPE_FIELDNAME)
        ));
    }

    public function vacanteAction()
    {
        $request = $this->getRequest();
        //Cachamos el valor desde la url
        $idVacante = (int) $this->params()->fromRoute('idVacante');

        //Si $idVacante es igual a cero, redireccionamos a vacantes
        if ($idVacante == 0) {
            return $this->redirect()->toRoute('vacantes');
        }

        $vacante = VacantesQuery::create()->findByVacanteId($idVacante)->toArray(null, false, BasePeer::TYPE_FIELDNAME);

        //Si hicieron POST
        if ($request->isPost()) {


            // Almacenamos características del archivo
            $archivo = $this->params()->fromFiles('postulante_curriculum_vitae');
            // Creamos un array conjuntando los datos del post y del archivo
            $post = array_merge_recursive(
                $request->getPost()->toArray(),
                $request->getFiles()->toArray()
            );

            $adapter = New \Zend\File\Transfer\Adapter\Http();
            /** todo Cómo hacer para guardar con distinto nombre: $cv es un ejemplo del cómo... es cuestion de probar. */
            $cv = $vacante->vacante_nombre."_".date('d-m-Y-H-i-s')."_".$archivo['name'];
            $adapter->setDestination(URL_CV);
            if ($adapter->receive($archivo['name'])) {
                //Guardamos la imagen en URL_CV = "C:\Program Files (x86)\Ampps\www\iJobs\public\files\CV\"
            }

            $Postulantes = new Postulantes();
            $postulantePost = array();
            //Recorremos nuestro formulario
            foreach ($post as $postKey => $postValue){
                if($postKey != 'submit' && $postKey != 'postulante_terminos' && $postKey != 'g-recaptcha-response'){
                    if($postKey == 'postulante_adjunto'){
                        $Postulantes->setPostulanteCurriculumUrl(URL_CV.$archivo['name']);
                    }else{
                        $Postulantes->setByName($postKey, $postValue, BasePeer::TYPE_FIELDNAME);
                    }
                }

                $postulantePost[$postKey] = $postValue;
            }
            $postulantePost['postulante_adjunto'] = URL_CV.$archivo['name'];

            $Postulantes->save();

            try {
                $Funciones = new Funciones();
                $fueEnviadoCorreoRH = $Funciones->enviarCorreoRH($postulantePost);
                if($fueEnviadoCorreoRH) {
                    $fueEnviadoCorreoPostulante = $Funciones->enviarCorreoPostulante($postulantePost);
                    if($fueEnviadoCorreoPostulante){

                        //Guardamos en la base de datos
                        $Postulantes->save();

                        $this->view = new JsonModel(array(
                            'enviado' => true
                        ));
                    }else{
                        $this->view = new JsonModel(array(
                            'enviado' => false,
                            'detalles' => "Error al enviar correo. Favor de intentar mas tarde."
                        ));
                    }
                } else {
                    $this->view = new JsonModel(array(
                        'enviado' => false,
                        'detalles' => "Error al enviar correo. Favor de intentar mas tarde."
                    ));
                }
            } catch (\Exception $e) {
                $this->view = new JsonModel(array(
                    'enviado' => false,
                    'detalles' => $e->getMessage()
                ));
            }
        }else{
            $this->view = new ViewModel(array(
                'areas_laborales' => AreaslaboralesQuery::create()->find()->toArray(null, false, BasePeer::TYPE_FIELDNAME),
                'estados' => SepomexQuery::create()->groupBySepomexEstado()->find()->toArray(null, false, BasePeer::TYPE_FIELDNAME),
                'idVacante'  => $idVacante,
                'vacante' => $vacante[0],
            ));
        }

        return $this->view;
    }
}
