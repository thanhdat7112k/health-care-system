<?php

namespace Modules\Admin\Http\Controllers\Auth;

use Modules\Admin\Http\Controllers\BaseAdminController;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends BaseAdminController
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('admin::auth.login');
    }

    public function username()
    {
        return 'email';
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|email:rfc,dns',
            'password' => 'required|string',
        ]);
    }

    protected function authenticated(Request $request, $user)
    {
        return redirect()->route('admin.diseases.index');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        return redirect()->guest(route( 'admin.login' ));
    }
}
