<?php
namespace App\Controllers\Session;

use App\Controllers\BaseController;

class Me extends BaseController
{

    public function __construct()
      {
          parent::__construct();
          $this->newsModel = model('NewsModel');
      }

    public function index() {

      $news = $this->newsModel->select('id, title, shortstory, longstory, image', 'author')->orderBy('id', 'desc')->findAll(3);

      return view('session/me', ['newsData' => $news]);
    }

}
