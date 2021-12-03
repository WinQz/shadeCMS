<?php

namespace App\Controllers\Admin\Content;

use App\Controllers\BaseController;

class PageController extends BaseController
{
    public function dashboard() {

		echo view('admin/dashboard/information');

    }

}
