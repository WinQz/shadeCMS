<?php
namespace App\Controllers\User\Community;

use App\Controllers\BaseController;

class StaffController extends BaseController
{
    public function index() {

        echo view('user/community/staff');
    }

}
