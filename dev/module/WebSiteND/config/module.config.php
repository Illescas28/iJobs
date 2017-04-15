<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'router' => array(
        'routes' => array(
            // Routes Panel
            'panel-login' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/login[/:action]',
                    'constraints' => array(
                        'action' => 'logout',
                    ),
                    'defaults' => array(
                        'controller' => 'Panel\Controller\Login',
                        'action'     => 'login',
                    ),
                ),
            ),
            'panel-employments' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/employments',
                    'defaults' => array(
                        'controller' => 'Panel\Controller\Employments',
                        'action'     => 'index',
                    ),
                ),
            ),
            // Routes Website
            'index' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Website\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
            'vacantes' => array(
                'type' => 'Zend\Mvc\Router\Http\Segment',
                'options' => array(
                    'route'    => '/vacantes[/:id][/]',
                    'defaults' => array(
                        'controller' => 'Website\Controller\Vacantes',
                        'action'     => 'vacante',
                    ),
                ),
                /*
                'may_terminate' => true,
                'child_routes' => array(
                    'postulante' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => 'postulante[/]',
                            'defaults' => array(
                                'controller' => 'Website\Controller\Index',
                                'action'     => 'postulante',
                            ),
                        ),
                    ),
                ),
                */
            ),
            'consulta' => array(
                'type'    => 'Segment',
                'options' => array(
                    'route'    => '/consulta[/:id][/]',
                    'defaults' => array(
                        'controller' => 'Website\Controller\Index',
                        'action'     => 'consulta',
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'aliases' => array(
            'translator' => 'MvcTranslator',
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            // Panel
            'Panel\Controller\Login' => 'Panel\Controller\Login\LoginController',
            'Panel\Controller\Employments' => 'Panel\Controller\Employments\EmploymentsController',
            // Website
            'Website\Controller\Index' => 'Website\Controller\Index\IndexController',
            'Website\Controller\Vacantes' => 'Website\Controller\Vacantes\VacantesController',
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'web-site-nd/index/index' => __DIR__ . '/../view/web-site-nd/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
        'strategies' => array(
            'ViewJsonStrategy',
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
);
