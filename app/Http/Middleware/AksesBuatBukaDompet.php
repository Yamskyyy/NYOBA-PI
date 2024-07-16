<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AksesBuatBukaDompet
{
    public $KEY = "asdasd!@#3$";

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->header('kunci-kamar') == "") {
            return response()->json([
                'message' => 'kunci-kamar Dibutuhkan',
            ], 400);
        }

        if ($request->header('kunci-kamar') != env('KUNCI_KAMAR')) {
            return response()->json([
                'message' => 'kunci-kamar Salah',
            ], 400);
        }

        if ($request->header('kunci-lemari') == "") {
            return response()->json([
                'message' => 'kunci-lemari Dibutuhkan',
            ], 400);
        }

        if ($request->header('kunci-lemari') != env('KUNCI_LEMARI')) {
            return response()->json([
                'message' => 'kunci-lemari Salah',
            ], 400);
        }

        return $next($request);
    }
}
