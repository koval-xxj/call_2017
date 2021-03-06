<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class VisitorsController extends Controller
{
  
  private $required_fields = ['name', 'email', 'phone', 'chirch'];
  private $wrong_value = null;
  
  private function check_post() {
    foreach ($this->required_fields as $value) {
      if (!isset($_POST[$value]) || empty($_POST[$value])) {
        return $value;
      }
    }
    
    return false;
  }
  
  private function check_user() {
    return DB::table('visitors')->select('id', 'email', 'phone')->where('email', '=', trim($_POST['email']))->orWhere('phone', trim($_POST['phone']))->first();
  }

  public function add_new() {
    
    $check = $this->check_post();
    if ($check) {
      return response()->json(['type' => 'field', 'field' => $check, 'Поле обязательно для заполнения.'], 400);
    }
    $check = $this->check_user();
    if (count($check) > 0) {
      $aResponce = [];
      $status = 200;
      switch (true) {
        case ($check->email == trim($_POST['email'])):
          $status = 400;
          $aResponce['type'] = 'email';
          $aResponce['message'] = 'Пользователь с емайлом ' . $_POST['email'] . ' уже существует.';
          break;
        case ($check->phone == trim($_POST['phone'])):
          $status = 400;
          $aResponce['type'] = 'number';
          $aResponce['message'] = 'Пользователь с телефоном ' . $_POST['phone'] . ' уже существует.';
          break;
      }
      return response()->json($aResponce, $status);
    }
    //Log::info('CHECK', (array)$check);
    
    DB::table('visitors')->insert(
      [
        'name' => trim($_POST['name']),
        'email' => trim($_POST['email']),
        'phone' => trim($_POST['phone']),
        'country' => trim($_POST['country']),
        'city' => trim($_POST['city']),
        'age' => trim($_POST['age']),
        'chirch' => trim($_POST['chirch']),
        'register_date' => date('Y-m-d h:i:s')
      ]
    );
    
    return 'true';
  }
}