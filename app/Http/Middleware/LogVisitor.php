<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;

class LogVisitor
{
    public function handle($request, Closure $next)
    {
        DB::table('visitors')->insert([
            'ip_address' => $request->ip(),
            'user_agent' => $request->header('User-Agent'),
            'visited_page' => $request->path(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return $next($request);
    }
}


