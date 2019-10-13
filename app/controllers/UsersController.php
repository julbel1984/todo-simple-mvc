<?php

namespace App\Controllers;

use App\Core\App;

/**
 * Class UsersController
 */
class UsersController
{
    /**
     * @return mixed
     * @throws Exception
     */
    public function index()
    {
        $users = App::get('database')->selectAll('users');

        return view('users', compact('users'));
    }

    /**
     * Вставка пользователей в post запросе
     * и редирект на список пользователей
     *
     * @throws Exception
     */
    public function store()
    {
        App::get('database')->insert('users', ['name'=> $_POST['name']]);

        return redirect('users');
    }
}