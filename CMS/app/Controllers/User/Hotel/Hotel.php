<?php

namespace App\Controllers\User\Hotel;

use App\Controllers\BaseController;

use App\Models\UserModel;

class Hotel extends BaseController
{

    public function __construct()
    {
        parent::__construct();
        $this->userModel = model('UserModel');
    }

    public function view()
    {

        $this->session = \Config\Services::session();

        $auth_token = "Shade-" . bin2hex(random_bytes(24));

        $this->userModel->update($this->session->get('user')->id, ['auth_ticket' => $auth_token]);


        $data = [
            'auth_token' => $auth_token,
        ];

        return view('user/hotel/hotel', $data);
    }
}
