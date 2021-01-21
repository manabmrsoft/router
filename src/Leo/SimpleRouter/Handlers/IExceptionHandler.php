<?php

namespace Leo\SimpleRouter\Handlers;

use Leo\Http\Request;

interface IExceptionHandler
{
    /**
     * @param Request $request
     * @param \Exception $error
     */
    public function handleError(Request $request, \Exception $error): void;

}