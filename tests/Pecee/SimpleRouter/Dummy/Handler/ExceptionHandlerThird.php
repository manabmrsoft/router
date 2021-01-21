<?php

class ExceptionHandlerThird implements \Leo\SimpleRouter\Handlers\IExceptionHandler
{
	public function handleError(\Leo\Http\Request $request, \Exception $error) : void
	{
        global $stack;
        $stack[] = static::class;

		throw new ResponseException('ExceptionHandler loaded');
	}

}