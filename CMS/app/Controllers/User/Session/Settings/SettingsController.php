<?php

namespace App\Controllers\User\Session\Settings;

use App\Controllers\BaseController;

use App\Models\UserModel;

class Settingscontroller extends BaseController
{

    public function __construct()
    {
        $this->userModel = model('UserModel');
        $this->session = \Config\Services::session();
    }

    public function index() {

        echo view('user/session/settings/information');
    }

    public function password() {

        echo view('user/session/settings/password');
    }

    public function email() {
        echo view('user/session/settings/email');
    }

    public function savePassword() {

        $rules = [
            'old_password'  => 'required',
            'new_password'  => 'required|min_length[4]|max_length[20]',
            'password_confirmation'  => 'required|min_length[4]|matches[new_password]'
        ];
        
        $old_password = $this->request->getVar('old_password', FILTER_SANITIZE_STRING);

        $hashedPassword = $this->request->getVar('new_password', FILTER_SANITIZE_STRING);

        $user = $this->userModel->where('username', $this->session->get('user')->username)->first();

        $errors = service('validate')->run($this->validate($rules));
        if($this->validate($rules) && password_verify($old_password, $user->password)) {
            $this->userModel->update($this->session->get('user')->id, ['password' => $hashedPassword]);
            return redirect()->back()->with('success', lang('Changing Password Succeeded'));
        }

        return redirect()->back()->with('errors', $errors);
        }

    public function saveEmail() {

        $rules = [
            'password'  => 'required|min_length[4]|max_length[20]',
            'new_email'     => 'required|valid_email|is_unique[users.mail]'
        ];

        $email = $this->request->getVar('new_email', FILTER_SANITIZE_STRING);
        $password = $this->request->getVar('password', FILTER_SANITIZE_STRING);
        
        $user = $this->userModel->where('username', $this->session->get('user')->username)->first();

        $errors = service('validate')->run($this->validate($rules));
        if($this->validate($rules) && password_verify($password, $user->password)) {
            $this->userModel->update($this->session->get('user')->id, ['mail' => $email]);
            return redirect()->back()->with('success', lang('Changing Email Succeeded'));
        }

        return redirect()->back()->with('errors', $errors);
        }
}

