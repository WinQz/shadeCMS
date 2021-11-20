<?php
namespace App\Controllers\Session\Community;

use App\Controllers\BaseController;

class StaffController extends BaseController
{
    public function index() {

        echo view('session/community/staff');
    }

}
