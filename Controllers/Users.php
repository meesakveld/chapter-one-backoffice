<?php

namespace App\Controllers;

use App\Models\User;

class UsersController extends BaseController {

    public static function index () {

        $users = User::all();
        
        self::loadView('/user/users', [
            'title' => 'Users',
            'domain' => 'Users',
            'users' => $users,
        ]);
    }

    public static function user ($id) {

        $user = User::find($id);

        self::loadView('/user/user', [
            'title' => 'User',
            'domain' => 'Users',
            'user' => $user,
        ]);
    }

}