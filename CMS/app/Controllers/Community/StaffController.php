<?php
namespace App\Controllers\Community;

use App\Controllers\BaseController;

class StaffController extends BaseController
{
    public function index() {

        echo view('community/staff');
    }

}
