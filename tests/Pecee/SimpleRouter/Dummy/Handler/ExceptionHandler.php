<?php

class ExceptionHandler implements \Leo\SimpleRouter\Handlers\IExceptionHandler
{
	public function handleError(\Leo\Http\Request $request, \Exception $error)  : void
	{
	    echo $error->getMessage();
	}

}