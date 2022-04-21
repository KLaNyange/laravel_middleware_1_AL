<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use phpDocumentor\Reflection\PseudoTypes\False_;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {

        // On peut faire avec return ou avec if. Mais je pense que c'est plus opti de faire directement avec return

        $this->registerPolicies();
        Gate::define('canDelete', function($user, $article){
            if ($user->role_id == 1 || $user->role_id == 4 || $user->role_id == 3) {
                return $article->user_id == $user->id;
                // dd($article);
            }

        });
        //le deuxieme parametre ne doit pas obligatoirement etre nommé de la meme facon que la variable qui en depend ex: ici le parametre est role mais dans mon users.blade c'est user que j'utilise
        Gate::define('deleteUser', function($user, $role){
            if (Auth::user()->role_id == 1 && $role->role_id != 1 || $user->role_id == 3 && $role->role_id !=3 && $role->role_id != 1) {
                return true ;
            }

        });
        Gate::define('canEdit', function($user, $role){
            if ($user->role_id ==1 && $role->role_id != 1) {
                return true;
            }
            if($user->role_id == 3 && $role->role_id != 3 && $role->role_id!=1){
                return true;
            }
        });

        Gate::define('roleChange', function($user, $role){
            return $user->role_id == 1 || $user->role_id == 3 && $role->id != 3 && $role->id != 1;
        });
    }
}
