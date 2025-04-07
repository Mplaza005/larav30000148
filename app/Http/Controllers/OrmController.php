<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class OrmController extends Controller
{

    public function consultas(){

        // $users = User::find(1);

        // return $users->profile;

        // $role = Role::find(1);


        //  $user = User::find(1);
        //  $user->roles()->detach(1);
        //  return $user;



         $role = Role::find(3);
         $role->users()->attach(2);
         return $role;




    }


}
