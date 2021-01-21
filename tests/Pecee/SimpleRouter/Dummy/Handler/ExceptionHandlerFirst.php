<?php

class ExceptionHandlerFirst implements \Leo\SimpleRouter\Handlers\IExceptionHandler
{
	public function handleError(\Leo\Http\Request $request, \Exception $error) : void
	{
	    global $stack;
	    $stack[] = static::class;

		$request->setUrl(new \Leo\Http\Url('/'));
	}

}