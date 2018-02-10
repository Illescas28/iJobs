<?php

namespace Listener;

use Zend\Mvc\MvcEvent;
use Zend\EventManager\EventManagerInterface;
use Zend\EventManager\ListenerAggregateInterface;

class ImgListener Implements ListenerAggregateInterface
{
    protected $listener = array();

    //Enlace con el listener de la aplicación con la accion principal onDispatch: maxima prioridad = 1000
    public function attach(EventManagerInterface $events)
    {
        $this->listener[] = $events->attach(MvcEvent::EVENT_DISPATCH,array($this, 'onDispatch'), 900);
    }

    //Elimina todos los ecentos para que se use onDispatch
    public function detach(EventManagerInterface $events)
    {
        foreach ($this->listener as $index => $listener) {
            if($events->detach($listener)){
                unset($this->listener[$index]);
            }
        }
    }

    //Constantes generales
    public function onDispatch(MvcEvent $e)
    {
        define('URL_CV', 'C:\Program Files (x86)\Ampps\www\iJobs\dev\public\files\CV\\');
        define('URL_LOGO_EMPRESA', 'C:\Program Files (x86)\Ampps\www\iJobs\dev\public\files\logos\empresas\\');
    }
}