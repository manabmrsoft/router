<?php

namespace Leo\Http\Middleware;

use Leo\Http\Request;

interface IMiddleware
{
    /**
     * @param Request $request
     */
    public function handle(Request $request): void;

}