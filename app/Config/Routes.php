<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get("/", "Pages::index");
$routes->get("/about/index", "About::index");
$routes->get("/about/contact", "About::index");
$routes->get("/about/contact(:any)/(:num)", "About::contact/$1/$2");
$routes->get("/about/(:any)/(:num)", "About::contact/$1/$2");