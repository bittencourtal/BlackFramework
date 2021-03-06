<?php

$routes = array(
    'home' => array('method' => 'GET|POST',
        'url' => '/',
        'target' => array(
            'module' => 'Main',
            'controller' => 'HomeController',
            'action' => 'indexAction'
        )
    ),

    'news' => array('method' => 'GET',
        'url' => '/news',
        'target' => array(
            'module' => 'News',
            'controller' => 'HomeController',
            'action' => 'indexAction'
        )
    ),

    'article' => array('method' => 'GET',
        'url' => '/article/[i:articleId]',
        'target' => array(
            'module' => 'News',
            'controller' => 'ArticleController',
            'action' => 'indexAction'
        )
    ),

    'pendingArticle' => array('method' => 'GET',
        'url' => '/pending/[i:articleId]',
        'target' => array(
            'module' => 'News',
            'controller' => 'PendingArticleController',
            'action' => 'indexAction'
        )
    ),


    'section' => array('method' => 'GET',
        'url' => '/section/[a:sectionId]',
        'target' => array(
            'module' => 'News',
            'controller' => 'SectionController',
            'action' => 'indexAction'
        )
    ),

    'search' => array('method' => 'POST',
        'url' => '/search',
        'target' => array(
            'module' => 'News',
            'controller' => 'SearchController',
            'action' => 'searchPostAction'
        )
    ),
    'searchStatic' => array('method' => 'GET',
        'url' => '/search/[:phrase]',
        'target' => array(
            'module' => 'News',
            'controller' => 'SearchController',
            'action' => 'indexAction'
        )
    ),
    'help' => array('method' => 'GET|POST',
        'url' => '/help',
        'target' => array(
            'module' => 'Main',
            'controller' => 'PageController',
            'action' => 'HelpAction'
        )
    ),


    'contact' => array('method' => 'GET|POST',
        'url' => '/contact',
        'target' => array(
            'module' => 'Main',
            'controller' => 'ContactController',
            'action' => 'indexAction'
        )
    ),

    'blog' => array('method' => 'GET|POST',
        'url' => '/blog',
        'target' => array(
            'module' => 'Main',
            'controller' => 'BlogController',
            'action' => 'BlogAction'
        )
    ),

    'error' => array('method' => 'GET|POST',
        'url' => '/error',
        'target' => array(
            'module' => 'Main',
            'controller' => 'ErrorController',
            'action' => 'indexAction'
        )
    ),

    // Ajax
    'adminAjaxUpdateVisit' => array('method' => 'POST',
        'url' => '/ajax/updateVisit',
        'target' => array(
            'module' => 'News',
            'controller' => 'AjaxController',
            'action' => 'updateVisitAction'
        )
    ),
);
/*
$default = [
    'default' => array('method' => 'GET',
        'url' => '/[a:module]/[a:controller]/[a:action]',
        'target' => array(
            'module' => null,
            'controller' => null,
            'action' => null
        )
    ),
];
*/
return array_merge(
    include 'AdminRoutes.php',
    include 'UserRoutes.php',
    $routes
    //$default
);
