<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

/**
 * Description of AdminController
 *
 * @author KS
 */
class AdminController extends Controller {
  
  protected function login_redirect() {
    return redirect()->route('adm_login');
  }
  
  protected function check_login() {
    return Session::has('admin_login');
  }
  
}
