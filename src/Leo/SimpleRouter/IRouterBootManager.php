<?php

namespace Leo\SimpleRouter;

use Leo\Http\Request;

interface IRouterBootManager
{
    /**
     * Called when router loads it's routes
     *
     * @param Router $router
     * @param Request $request
     */
    public function boot(Router $router, Request $request): void;
}