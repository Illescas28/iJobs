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
                'type'    => 'Segment',
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
                'type'    => 'Segment',
                'options' => array(
                    'route'    => '/employments',
                    'defaults' => array(
                        'controller' => 'Panel\Controller\Employments',
                        'action'     => 'index',
                    ),
                ),
            ),
            // Routes Website
            'website-inicio' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Website',
                        'action'     => 'index',
                    ),
                ),
            ),
            'website-registrarme' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/registrarme/',
                    'defaults' => array(
                        'controller' => 'Website',
                        'action'     => 'registrarme',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'postulante' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => 'postulante[/]',
                            'defaults' => array(
                                'controller' => 'Website',
                                'action'     => 'postulante',
                            ),
                        ),
                    ),
                    'empresa' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => 'empresa[/]',
                            'defaults' => array(
                                'controller' => 'Website',
                                'action'     => 'empresa',
                            ),
                        ),
                    ),
                ),
            ),
            'website-vacantes' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/vacantes[/]',
                    'defaults' => array(
                        'controller' => 'Website',
                        'action'     => 'vacantes',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'page' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => 'page[/:idPage][/]',
                            'constraints' => array(
                                'idPage' => '[0-9]+',
                            ),
                            'defaults' => array(
                                'controller' => 'Website',
                                'action'     => 'vacantes',
                            ),
                        ),
                    ),
                    'vacante' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => 'vacante[/:idVacante][/]',
                            'constraints' => array(
                                'idVacante' => '[0-9]+',
                            ),
                            'defaults' => array(
                                'controller' => 'Website',
                                'action'     => 'vacante',
                            ),
                        ),
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
            'Website' => 'Website\Controller\WebsiteController',
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
            'website/index/index' => __DIR__ . '/../view/website/index/index.phtml',
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
