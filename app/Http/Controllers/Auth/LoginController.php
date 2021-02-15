<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
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
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function username() // houni béch ta3mil overrigth a3la nafd il fuction ili fil folger 'AuthenticatesUsers.php'
    {
        // chou howa il request dima ijik haka ['name'=>'yassine','_token'=>'jfjfjfjf','email'=>'kchoau@li']
        $value=request()->input('identity');
        $field=filter_var($value,FILTER_VALIDATE_EMAIL)?'email':'mobil';
        request()->merge([$field=>$value]);
        return $field;
    }
}
