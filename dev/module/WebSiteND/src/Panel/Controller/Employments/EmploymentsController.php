<?php

namespace Panel\Controller\Employments;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;

//// Propel ////
use UsuarioQuery;

class EmploymentsController extends AbstractActionController
{
    public function indexAction()
    {
        session_start();
        if(UsuarioQuery::create()->filterByUsuarioNombre($_SESSION['usuario_nombre'])->filterByUsuarioContrasena($_SESSION['usuario_contrasena'])->exists()){
            $this->layout('layout/layoutPanel');
            return new ViewModel(array(
                'usuario_nombre' => $_SESSION['usuario_nombre']
            ));
        }else{
            $this->layout('layout/layoutAuth');
            return $this->redirect()->toRoute('panel-login', array('action' => 'login'));
        }
    }
}