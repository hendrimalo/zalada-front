<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function login(Request $request)
    {
        $login = apiLoginUser([
          'username' => $request->input('username'),
          'password' => $request->input('password')
        ]);

        if(json_encode($login['http_code'] !== 200)) {
          return redirect()->route('user.login')
            ->with('failed', json_encode($login["message"]));
        }

        return redirect()->route('home.index')
          ->with('success', json_encode($createdProduct["message"]));
    }

    public function register(Request $request)
    {
        $register = apiRegisterUser([
          'username' => $request->input('username'),
          'password' => $request->input('password')
        ]);

        if(json_encode($register['http_code'] !== 200)) {
            return redirect()->route('user.login')
              ->with('failed', json_encode($register["message"]));
        }

        return redirect()->route('user.login')
          ->with('success', json_encode($createdProduct["message"]));
    }
}
