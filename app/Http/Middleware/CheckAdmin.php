<?php
// Exemple de middleware pour vérifier si l'utilisateur est un admin
// filepath: app/Http/Middleware/CheckAdmin.php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAdmin {
    public function handle(Request $request, Closure $next) {
        if (auth()->check() && auth()->user()->role === 'admin') {
            return $next($request);
        }

        return redirect('home')->with('error', 'You do not have admin access.');
    }
}