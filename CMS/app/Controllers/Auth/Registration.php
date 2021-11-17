<?php
namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class Registration extends BaseController
{
    public function __construct() {
        parent::__construct();
        $this->userModel = model('UserModel');
    }

    public function create()
    {
        $rules = [
            'username'  => 'required|min_length[4]|max_length[20]|pattern[[a-zA-Z0-9-=?!@:.]+]|is_unique[users.username]',
            'email'     => 'required|valid_email|is_unique[users.mail]',
            'password'  => 'required|min_length[6]',
            'password_confirmation'=> 'required|matches[password]'
        ];

        $data = [
            'username'  => $this->request->getVar('username'),
            'mail'      => $this->request->getVar('email'),
            'password'  => $this->request->getVar('password')
        ];

        $errors = service('validate')->run($this->validate($rules));
        if($errors) {
            return redirect()->back()->with('errors', $errors);
        }

        $user = $this->userModel->insert($data);
        $this->session->set(
            'user',
            $this->userModel->find($user)
        );

        return redirect()->to('/');
    }

    public function index()
    {

        echo view('auth/register');


    }
}
