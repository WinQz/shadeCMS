<?php
namespace App\Controllers\User\Community;

use App\Controllers\BaseController;

class StaffController extends BaseController
{
    public function index() {

        return view('user/community/staff');
    }

}
