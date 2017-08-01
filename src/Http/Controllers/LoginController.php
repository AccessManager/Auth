<?php

namespace AccessManager\Auth\Http\Controllers;


use AccessManager\Base\Http\Controller\AdminBaseController;

class LoginController extends AdminBaseController
{
    public function getLogin()
    {
        return view("Auth::login");
    }

    public function postLogin()
    {
        return redirect('accounts.index');
    }
}