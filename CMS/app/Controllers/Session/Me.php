<?php
namespace App\Controllers\Session;

use App\Controllers\BaseController;

class Me extends BaseController
{

    public function index() {

        echo view('session/me');
    }

}
