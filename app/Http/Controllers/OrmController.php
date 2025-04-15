<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use App\Models\Post;
use App\Models\Role;
use Illuminate\Http\Request;

class OrmController extends Controller
{

    public function consultas()
    {


        //  $user = User::find(2);
        //  return $user->profiles;//$user->posts;$user->roles;

        // $profile = Profile::find(2);
        // return $profile->user;

        //  $post=Post::find(3);
        //  return $post->category;

        //RELACIONES ANIDADAS

        //return User::with('posts.category')->get();



        //  $role = Role::find(3);
        //  $role->users()->attach(2);
        //  return $role;

        //  $user->roles()->detach(1);



    }
}
