<?php

namespace App\Controllers;

use App\Models\User;

class UsersController extends BaseController {

    public static function index () {

        $users = User::all();
        
        self::loadView('/users', [
            'title' => 'Users',
            'users' => $users,
        ]);
    }

}