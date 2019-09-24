<?php

    #SSLCOMMERZ Route First Part Start
    # These route will call from out side
    $routes->connect('/example1', ['controller' => 'Payment', 'action' => 'example1']);
    $routes->connect('/example2', ['controller' => 'Payment', 'action' => 'example2']);
    $routes->connect('/success', ['controller' => 'Payment', 'action' => 'success']);
    $routes->connect('/cancel', ['controller' => 'Payment', 'action' => 'cancel']);
    $routes->connect('/fail', ['controller' => 'Payment', 'action' => 'fail']);
    $routes->connect('/ipn', ['controller' => 'Payment', 'action' => 'ipn']); // This routing URL need to save in Merchat Panel's IPN setting as IPN Lisener.
    #SSLCOMMERZ Route First Part End

    $routes->connect('/payViaAjax', ['controller' => 'Payment', 'action' => 'payViaAjax']); // You can set this route after CSRF. Because payment request will initiate by your site.

    /**
     * Apply a middleware to the current route scope.
     * Requires middleware to be registered via `Application::routes()` with `registerMiddleware()`
     */
    $routes->applyMiddleware('csrf');

    #SSLCOMMERZ Route  Second Start
    $routes->connect('/pay', ['controller' => 'Payment', 'action' => 'index']);// You can set this route after CSRF. Because payment request will initiate by your site.
    #SSLCOMMERZ Route  Second End