<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class MDusuarioregistrado
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

 public function handle($request, Closure $next)
 {
    //$usuarioactual=\Auth::user();
    $usuarioactual = Session::get('usuarioactual');
    if(isset($usuarioactual)){
        if($usuarioactual->tipos_de_usuario_id!=3){
         return redirect('sin_acceso3');
        }
    }else
    return redirect('login');

    return $next($request);

 }
}
