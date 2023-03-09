<?php
namespace Modules\Front\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('adminauth::auth.login');
    }

    public function login(Request $request)
    {
        $data = $request->all();
        $valid = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Email không được rỗng',
            'email.email' => 'Phải là định dạng email',
        ]);

        if ($valid->fails())
        {
            return response()->json([
                'rs' => 0,
                'msg' => 'Dữ liệu nhập không hợp lệ',
                'errors' => $valid->errors()->messages(),
                'data' => $data
            ]);
        }

        $email = $request->input('email');
        $user = User::where(function($query) use ($email) {
            $query->where('email', $email);
        })->where('user_type', 2)->first();

        if (!$user) {
            return response()->json([
                'rs' => 1,
                'msg' => 'Email hoặc mật khẩu không đúng',
            ]);
        }

            if (!Hash::check($request->input('password'), $user->password))
        {
            return response()->json([
                'rs' => 1,
                'msg' => 'Email hoặc mật khẩu không đúng',
            ]);
        }

        Auth::loginUsingId($user->id, true);

        $user->last_login = Carbon::now()->toDateTimeString();
        $user->save();

        return response()->json([
            'rs' => 2,
            'msg' => 'Đăng nhập thành công',
            'redirect_url' => route('trang-chu')
        ]);
    }

    public function register(Request $request)
    {
        $data = $request->all();

        $valid = Validator::make($request->all(), [
            'register_email' => 'required|unique:users,email',
            'register_password' => 'required|same:password_confirmation',
        ], [
            'register_email.required' => 'Email không được rỗng',
            'register_email.email' => 'Phải là định dạng email',
            'register_email.unique' => 'Email đã tồn tại'
        ]);

        if ($valid->fails())
        {
            return response()->json([
                'rs' => 0,
                'msg' => 'Dữ liệu nhập không hợp lệ',
                'errors' => $valid->errors()->messages(),
                'data' => $data
            ]);
        }
        $user = new User();
        $user->email = $request->register_email;
        $user->username = $user->email;
        $user->password = Hash::make($request->register_password);
        $user->user_type = 2;
        $user->save();

        Auth::loginUsingId($user->id, true);
        return response()->json([
            'rs' => 1,
            'msg' => 'Đăng ký thành công',
            'redirect_url' => route('trang-chu')
        ]);
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
