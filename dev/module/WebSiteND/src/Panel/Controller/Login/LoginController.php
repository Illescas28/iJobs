<?php

namespace Panel\Controller\Login;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;

// Form //
use Panel\Forms\Login\LoginForm;
// Filter //
use Panel\Filters\Login\LoginFilter;
// Propel //
use UsuarioQuery;

class LoginController extends AbstractActionController
{
    public function loginAction()
    {
        $LoginForm = new LoginForm();
        $request = $this->getRequest();
        if($request->isPost()){
            $LoginFilter = new LoginFilter();
            $LoginForm->setInputFilter($LoginFilter->getInputFilter());
            $LoginForm->setData($request->getPost());
            if ($LoginForm->isValid()) {
                $loginArray = array();
                foreach($LoginForm->getData() as $loginKey => $loginValue){
                    $loginArray[$loginKey] = $loginValue;
                }
                $existeUsuario = UsuarioQuery::create()->filterByUsuarioNombre($loginArray['usuario_nombre'])->filterByUsuarioContrasena($loginArray['usuario_contrasena'])->exists();
                if($existeUsuario){
                    session_start();
                    $_SESSION['usuario_nombre'] = $loginArray['usuario_nombre'];
                    $_SESSION['usuario_contrasena'] = $loginArray['usuario_contrasena'];
                    $this->layout('layout/layoutPanel');
                    return new JsonModel(array(
                        'success' => true
                    ));
                }else{
                    $this->layout('layout/layoutLogin');
                }
            }else{
                $messageArray = array();
                foreach ($LoginForm->getMessages() as $key => $value){
                    foreach($value as $val){
                        //Obtenemos el valor de la columna con error
                        if($key == "usuario_nombre"){
                            $message = array($key => 'Favor de agregar su usuario.');
                        }
                        if($key == "usuario_contrasena"){
                            $message = array($key => 'Favor de agregar su contraseña.');
                        }
                        array_push($messageArray, $message);
                    }
                }
                if(!key_exists("usuario_nombre", $LoginForm->getMessages())){
                    array_push($messageArray, array('usuario_nombre' => null));
                }
                if(!key_exists("usuario_contrasena", $LoginForm->getMessages())){
                    array_push($messageArray, array("usuario_contrasena" => null));
                }
                return new JsonModel(array(
                    'errorForm' => $messageArray
                ));
            }
        }else{
            $this->layout('layout/layoutLogin');
        }
        return new ViewModel(array(
            'LoginForm' => $LoginForm,
        ));
    }
    public function logoutAction()
    {
        session_start();
        session_destroy();
        $this->layout('layout/layoutPanel');
        return $this->redirect()->toRoute('panel-login', array('action' => 'login'));
    }
}