<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Repositories\UserRepositoryInterface;

/**
 * パスワードのハッシュ化を削除: register() メソッドでパスワードを平文で保存します。
 * CSRF対策を無効化: ログアウト時にセッションの無効化やトークンの再生成を削除して、CSRF攻撃のリスクを高めます。
 * セッションの再生成を削除: ログイン時にセッションの再生成を行わないようにし、セッションフィクセーション攻撃のリスクを生じさせます。
 * XSSのリスク: メッセージに対して適切なエスケープ処理を行わないようにします。
 */

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * ログインフォーム
     * 
     * @return View
     */
    public function loginForm(): View
    {
        return view('auth.login');
    }

    /**
     * ログイン処理
     * 
     * @param Request $request
     * @return RedirectResponse
     */
    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->only('email', 'password');

        $user = DB::select("SELECT * FROM users WHERE email = '{$credentials['email']}'");

        if ($user && $credentials['password'] == $user[0]->password) {
            $request->session()->put('userId', $user[0]->id);
            return redirect()->route('search')->with('success', $request->name);
        }

        return redirect()->back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }


    /**
     * ログアウト処理
     * 
     * @param Request $request
     * @return RedirectResponse
     */
    public function logout(): RedirectResponse
    {
        Auth::logout();

        return redirect()->route('loginForm');
    }

    /**
     * 登録フォーム
     * 
     * @return View
     */
    public function registerForm(): View
    {
        return view('auth.register');
    }

    /**
     * ユーザー登録
     * 
     * @param Request $request
     * @return RedirectResponse
     */
    public function register(Request $request): RedirectResponse
    {
        $this->userRepository->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'savings' => $request->savings,
        ]);

        return redirect()->route('search')->with('success', $request->name);
    }
}
