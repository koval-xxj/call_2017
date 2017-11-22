<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class LoginController extends AdminController
{
  
  public function base_show() {
    if ($this->check_login()) {
      return redirect()->route('adm_base');
    }
    
    return view('admin/login');
  }
  
  public function auth() {
    $check = $this->check_admin();
    
    if (!$check) {
      return view('admin/login', [
        'error' => 'Wrong login or password',
        'login' => $_POST['login']
      ]);
    }
    
    Session::put('admin_login', true);
    
    return redirect()->route('adm_base');
    
  }
  
  private function check_admin() {
    //(count(DB::table('admins')->select('id')->where(['login', '=', trim($_POST['login'])], ['password', '=', md5(trim($_POST['password']))])->first()) > 0);
    return count(DB::select('select id from admins where login = ? AND password = ?', [trim($_POST['login']), md5(trim($_POST['password']))]));
  }
  
}