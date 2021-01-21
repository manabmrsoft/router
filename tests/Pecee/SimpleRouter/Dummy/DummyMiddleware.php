<?php
require_once 'Exception/MiddlewareLoadedException.php';

use Leo\Http\Request;

class DummyMiddleware implements \Leo\Http\Middleware\IMiddleware
{
	public function handle(Request $request) : void
	{
		throw new MiddlewareLoadedException('Middleware loaded!');
	}

}