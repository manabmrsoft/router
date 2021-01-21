<?php

use Leo\Http\Middleware\IMiddleware;
use Leo\Http\Request;

class RewriteMiddleware implements IMiddleware {

    public function handle(Request $request)  : void {

        $request->setRewriteCallback(function() {
            return 'ok';
        });

    }

}