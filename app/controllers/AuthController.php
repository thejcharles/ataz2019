<?php

namespace App\Controllers;

use App\Classes\CSRFToken;
use App\Classes\Redirect;
use App\Classes\Request;
use App\Classes\Session;
use App\Classes\ValidateRequest;
use App\Models\User;
use Illuminate\Database\Capsule\Manager as Capsule;


class AuthController extends BaseController
{
  public function __construct()
  {
    if (isAuthenticated()) {
      Redirect::to('/');
    }
  }

  public function showRegisterForm()
  {
    return view('home/register');
  }

  public function showLoginForm()
  {
    return view('home/login');
  }

  public function register()
  {
    if (Request::has('post')) {
      $request = Request::get('post');
      if (CSRFToken::verifyCSRFToken($request->token)) {
        $rules = [
          'username' => ['required' => true, 'maxLength' => 20, 'string' => true, 'unique' => 'users'],
          'email' => ['required' => true, 'email' => true, 'unique' => 'users'],
          'password' => ['required' => true, 'minLength' => 6],
          'fullname' => ['required' => true, 'minLength' => 6, 'maxLength' => 50],
          'address' => ['required' => true, 'minLength' => 4, 'maxLength' => 500, 'mixed' => true]
        ];

        $validate = new ValidateRequest;
        $validate->abide($_POST, $rules);

        if ($validate->hasError()) {
          $errors = $validate->getErrorMessages();
          return view('home/register', ['errors' => $errors]);
        }

        //insert into database
        User::create([
          'username' => $request->username,
          'email' => $request->email,
          'password' => password_hash($request->password, PASSWORD_BCRYPT),
          'pass_validate' => 0,
          'name' => $request->name,
          //'photo' => $request->photo,
          'role' => 'user',
        ]);

        Request::refresh();
        return view('home/register', ['success' => 'Account created!']);
      }
      throw new \Exception('Token Mismatch');
    }
    return null;
  }

  public function login()
  {
    if (Request::has('post')) {
      $request = Request::get('post');
      if (CSRFToken::verifyCSRFToken($request->token)) {
        $rules = [
          'username' => ['required' => true],
          'password' => ['required' => true],
        ];

        $validate = new ValidateRequest;
        $validate->abide($_POST, $rules);

        if ($validate->hasError()) {
          $errors = $validate->getErrorMessages();
          return view('home/login', ['errors' => $errors]);
        }

        /**
         * Check if user exist in db
         */
//                $user = User::where('username', $request->username)
//                    ->orWhere('email', $request->username)->first();
        $user = Capsule::table('users')->where('username', $request->username)->first();

        if ($user) {
          if (!password_verify($request->password, $user->password)) {
            Session::add('error', 'Incorrect password');
            return view('home/login');
          } else {
            Session::add('SESSION_USER_ID', $user->id);
            Session::add('SESSION_USER_NAME', $user->username);
            Redirect::to('/admin');
          }
        } else {
          Session::add('error', 'User not found, please try again');
          return view('home/login');
        }
      }
      throw new \Exception('Token Mismatch');
    }
    return null;
  }

  public function logout()
  {
    if (isAuthenticated()) {
      Session::remove('SESSION_USER_ID');
      Session::remove('SESSION_USER_NAME');

      if (!Session::has('user_cart')) {
        session_destroy();
        session_regenerate_id(true);
      }
    }
    Redirect::to('/');
  }

}
