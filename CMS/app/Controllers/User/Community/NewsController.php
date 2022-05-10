<?php
namespace App\Controllers\User\Community;

use App\Controllers\BaseController;

class Newscontroller extends BaseController
{

    public function __construct() {
        $this->newsModel = model('NewsModel');
    }

    public function getNews($newsId) {

        $newsDetails = $this->newsModel->where('id', $newsId)->first();
        if(!$newsDetails) {
            return redirect()->back();
        }

        return view('user/community/news', ['newsData' => $newsDetails]);
    }

}
