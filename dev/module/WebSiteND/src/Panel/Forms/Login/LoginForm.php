<?php
namespace Panel\Forms\Login;
use Zend\Form\Form;
class LoginForm extends Form
{
    public function __construct($name=null)
    {
        parent::__construct('LoginForm');
        $this->setAttribute('method', 'post');
        $this->setAttribute('name','loginForm');
        $this->setAttribute("class", "form-horizontal");

        $this->add(array(
            'name' => 'idusuario',
            'type' => 'Hidden',
        ));
        $this->add(array(
            'name' => 'usuario_nombre',
            'type' => 'text',
            'attributes' => array(
                'type' => 'text',
                'id'   => 'usuario_nombre',
                'class' => 'form-control',
                'placeholder' => "Usuario",
            ),
            'options' => array(
                //'label' => 'Usuario',
            ),
        ));
        $this->add(array(
            'name' => 'usuario_contrasena',
            'type' => 'Password',
            'attributes' => array(
                'type' => 'text',
                'id'   => 'usuario_contrasena',
                'class' => 'form-control',
                'placeholder' => "Contraseña",
            ),
            'options' => array(
                //'label' => 'Contraseña',
            ),
        ));
        $this->add(array(
            'name' => 'submit',
            'type' => 'submit',
            'attributes' => array(
                'value' => 'Entrar',
                'id' => 'entrar',
                'class' => 'btn btn-secondary',
            ),
        ));
    }
}