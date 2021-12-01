<?php
namespace App\Controllers\Session\Community;

use App\Controllers\BaseController;

use App\Models\UserModel;

use App\Models\StaffModel;

class StaffController extends BaseController
{

    public function index() {

        echo view('session/community/staff');
    }

}
