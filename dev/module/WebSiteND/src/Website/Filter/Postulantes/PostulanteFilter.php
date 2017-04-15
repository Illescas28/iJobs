<?php
namespace Website\Filter\Postulantes;
// Add these import statements
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;
class PostulanteFilter implements InputFilterAwareInterface
{
    public $postulante_id;
    public $vacante_id;
    public $postulante_correo;
    public $postulante_nombre_completo;
    public $postulante_telefono;
    public $postulante_enlace;
    public $postulante_mensaje;
    public $postulante_curriculum_vitae;
    protected $inputFilter;

    public function exchangeArray($data)
    {
        $this->postulante_id = (!empty($data['postulante_id'])) ? $data['postulante_id'] : null;
        $this->vacante_id = (!empty($data['vacante_id'])) ? $data['vacante_id'] : null;
        $this->postulante_correo = (!empty($data['postulante_correo'])) ? $data['postulante_correo'] : null;
        $this->postulante_nombre_completo = (!empty($data['postulante_nombre_completo'])) ? $data['postulante_nombre_completo'] : null;
        $this->postulante_telefono = (!empty($data['postulante_telefono'])) ? $data['postulante_telefono'] : null;
        $this->postulante_enlace = (!empty($data['postulante_enlace'])) ? $data['postulante_enlace'] : null;
        $this->postulante_mensaje = (!empty($data['postulante_mensaje'])) ? $data['postulante_mensaje'] : null;
        $this->postulante_curriculum_vitae = (!empty($data['postulante_curriculum_vitae'])) ? $data['postulante_curriculum_vitae'] : null;

        return $data;
    }

    public function setInputFilter(InputFilterInterface $inputFilter)
    {
        throw new \Exception("Not used");
    }
    public function getInputFilter()
    {
        if (!$this->inputFilter) {
            $inputFilter = new InputFilter();

            $inputFilter->add(array(
                'name'     => 'postulante_id',
                'required' => false,
                'filters'  => array(
                    array('name' => 'Int'),
                ),
            ));
            $inputFilter->add(array(
                'name'     => 'vacante_id',
                'required' => true,
                'filters'  => array(
                    array('name' => 'Int'),
                ),
            ));
            $inputFilter->add(array(
                'name'     => 'postulante_correo',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
            ));
            $inputFilter->add(array(
                'name'     => 'postulante_nombre_completo',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
            ));
            $inputFilter->add(array(
                'name'     => 'postulante_telefono',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
            ));
            $inputFilter->add(array(
                'name'     => 'postulante_enlace',
                'required' => false,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
            ));
            $inputFilter->add(array(
                'name'     => 'postulante_mensaje',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
            ));
            $inputFilter->add(array(
                'name'     => 'postulante_curriculum_vitae',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
            ));

            $this->inputFilter = $inputFilter;
        }
        return $this->inputFilter;
    }
}