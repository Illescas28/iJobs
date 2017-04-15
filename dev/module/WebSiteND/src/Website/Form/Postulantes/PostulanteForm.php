<?php
namespace Website\Form\Postulantes;
use Zend\Form\Form;
class PostulanteForm extends Form
{
    public function __construct()
    {
        parent::__construct('PostulanteForm');
        $this->setAttribute('method', 'post');
        $this->setAttribute('name','postulanteForm');
        $this->setAttribute("class", "form-horizontal");

        $this->add(array(
            'name' => 'postulante_id',
            'type' => 'Hidden',
        ));
        $this->add(array(
            'name' => 'vacante_id',
            'type' => 'Hidden',
            'attributes' => array(
                'id' => 'vacante_id',
            ),
        ));
        $this->add(array(
            'name' => 'postulante_correo',
            'type' => 'Email',
            'attributes' => array(
                'type' => 'email',
                'id'   => 'postulante_correo',
                'class' => 'form-control',
                'required' => 'required',
                'placeholder' => "e.g., correo@dominio.com",
            ),
            'options' => array(
                //'label' => 'Correo electrónico *',
            ),
        ));

        $this->add(array(
            'name' => 'postulante_nombre_completo',
            'type' => 'Text',
            'attributes' => array(
                'type' => 'text',
                'id'   => 'postulante_nombre_completo',
                'class' => 'form-control',
                'required' => 'required',
                'placeholder' => "Juan Antonio Perez Perez",
            ),
            'options' => array(
                //'label' => 'Nombre completo *',
            ),
        ));

        $this->add(array(
            'name' => 'postulante_telefono',
            'type' => 'Text',
            'attributes' => array(
                'type' => 'text',
                'id'   => 'postulante_telefono',
                'class' => 'form-control',
                'required' => 'required',
                'placeholder' => "+52 (01) 3333333333",
            ),
            'options' => array(
                //'label' => 'Teléfono *',
            ),
        ));

        $this->add(array(
            'name' => 'postulante_enlace',
            'type' => 'Text',
            'attributes' => array(
                'type' => 'text',
                'id'   => 'postulante_enlace',
                'class' => 'form-control',
                'placeholder' => "https://mx.linkedin.com/",
            ),
            'options' => array(
                //'label' => 'Pega aquí tu enlace LinkedIn u otro',
            ),
        ));

        $this->add(array(
            'name' => 'postulante_mensaje',
            'type' => 'Textarea',
            'attributes' => array(
                'type' => 'textarea',
                'id'   => 'postulante_mensaje',
                'class' => 'form-control',
                'required' => 'required',
                'placeholder' => "Un buen mensaje puede hacer la diferencia para conseguir el empleo.",
            ),
            'options' => array(
                //'label' => '¡Cuéntanos por qué te gustaría trabajar en Núcleo de Diagnóstico!',
            ),
        ));

        $this->add(array(
            'type' => 'File',
            'name' => 'postulante_curriculum_vitae',
            'attributes' => array(
                //'type' => 'textarea',
                'id'   => 'postulante_curriculum_vitae',
                'class' => 'form-control',
                'required' => 'required',
                'enctype' => 'multipart/form-data',
            ),
            'options' => array(
                'label' => 'Adjuntar CV:'
            ),
        ));

        $this->add(array(
            'type' => 'Checkbox',
            'name' => 'postulante_enviar_copia',
            'attributes' => array(
                //'type' => 'textarea',
                'id'   => 'postulante_enviar_copia',
                'class' => 'form-control',
            ),
            'options' => array(
                'checked_value' => true,
            )
        ));

        $this->add(array(
            'name' => 'submit',
            'type' => 'Submit',
            'attributes' => array(
                'value' => 'Postularme',
                'id' => 'guardarPostulante',
                'class' => 'btn btn-success',
                'data-toggle' => 'modal',
                'data-target' => '#exampleModal',
            ),
        ));
    }
}