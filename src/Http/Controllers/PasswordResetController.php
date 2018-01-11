<?php

namespace AccessManager\Auth\Http\Controllers;


use AccessManager\Auth\Http\Requests\PasswordResetRequest;
use AccessManager\Auth\Models\User;
use AccessManager\Base\Http\Controller\AdminBaseController;

/**
 * Class PasswordResetController
 * @package AccessManager\Auth
 */
class PasswordResetController extends AdminBaseController
{
    public function getChangePassword()
    {
        return view('Auth::change-password');
    }

    public function postChangePassword( PasswordResetRequest $request )
    {
        try {
            if( \Auth::attempt([
                'username'  =>  auth()->user()->username,
                'password'  =>  $request->current_password,
            ]))
            {
                $user = User::find(auth()->user()->id);
                $user->password = $request->new_password;
                $user->save();
                return redirect()->route('login');
            }
        }
        catch (\Exception $e)
        {
            dd($e->getMessage());
        }
    }
}