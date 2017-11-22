<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

/**
 * Description of VisitorsListController
 *
 * @author KS
 */
class VisitorsListController extends AdminController {
  
  public function show() {
    if (!$this->check_login()) {
      return $this->login_redirect();
    }
    
    
    
    return 'fdfdfdfd';
  }
  
}
