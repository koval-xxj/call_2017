<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

/**
 * Description of BaseController
 *
 * @author KS
 */
class BaseController extends AdminController {

  public function show() {
//    dd(Session::has('admin_login'));
//    dd(Session::get('admin_login'));

    if (!$this->check_login()) {
      return $this->login_redirect();
    }

    return view('admin/base');
  }

  protected function getUser()
  {
      $visitors = DB::table('visitors')->get();
      return view('admin.includes.usertable', compact('visitors'));

  }


  
}
