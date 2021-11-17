<?php

namespace App\Controllers\Content;

use App\Controllers\BaseController;

class PageController extends BaseController
{

    public function voorwaarden() {

		echo view('content/voorwaarden');

    }

    public function regels() {

		echo view('content/regels');

    }

    public function privacy() {

		echo view('content/privacy');

    }

}
