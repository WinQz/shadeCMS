<?php
namespace App\Controllers\User\Session\Community;

use App\Controllers\BaseController;

class StaffController extends BaseController
{
    public function index() {

        echo view('user/session/community/staff');
    }

}
