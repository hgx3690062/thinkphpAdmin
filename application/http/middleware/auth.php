<?php

namespace app\http\middleware;

class auth
{
    public function handle($request, \Closure $next)
    {
//        echo '中间件';
        return $next($request);
    }
}
