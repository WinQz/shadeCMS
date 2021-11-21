<?php
namespace App\Controllers\Players;

use App\Controllers\BaseController;

class Searchcontroller extends BaseController
{

    public function searchUser() {

        $rules = [
            'search_user'  => 'required',
        ];

        $errors = service('validate')->run($this->validate($rules));
        $searchFor = $this->request->getVar('search_user');

        if($this->validate($rules)) {
            return redirect()->to('/profile/'. $searchFor);
        }

    return redirect()->back()->with('errors', $errors);
    }

}
