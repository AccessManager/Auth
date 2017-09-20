<?php

namespace AccessManager\Auth\Http\Controllers;


use AccessManager\Auth\Http\Requests\AdminLoginRequest;
use AccessManager\Base\Http\Controller\AdminBaseController;
use Illuminate\Support\MessageBag;

/**
 * Class LoginController
 * @package AccessManager\Auth
 */
class LoginController extends AdminBaseController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getLogin()
    {
        return view("Auth::login");
    }

    /**
     * @param AdminLoginRequest $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function postLogin( AdminLoginRequest $request )
    {
        $authenticated = auth()->attempt(
                        $request->only('username', 'password')
                    );
        if( $authenticated )    return redirect()->intended();

        return back()->withErrors(new MessageBag(['status'=>'login failed, try again.']));
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getLogout()
    {
        auth()->logout();
        return redirect()->intended();
    }
}