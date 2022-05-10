<?php
namespace App\Controllers\User\Auth;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function __construct()
    {
        $this->userModel = model('UserModel');
    }

    public function index() {

        echo view('user/auth/auth.php');
    }

    public function authentication()
    {
        $rules = [
            'username'  => 'required|min_length[4]|max_length[20]|pattern[[a-zA-Z0-9-=?!@:.]+]',
            'password'  => 'required|min_length[6]'
        ];

        $username = $this->request->getVar('username', FILTER_SANITIZE_STRING);
        $password = $this->request->getVar('password', FILTER_SANITIZE_STRING);

        $user = $this->userModel->where('username', $username)->first();
		
		$accountDown = $user->account_down;
		if($accountDown) {
            return redirect()->back()->with('errors', lang('Account uitgezet door het staffteam'));
        }

        if($this->validate($rules) && $user && password_verify($password, $user->password)) {
            $this->session->set(
                'user',
                $user
            );
            return redirect()->to('me')->with(
                'success',
                'Welcome To Shade, <b>' . $username . '</b>'
            );
        } else {
            return redirect()->back()->with('errors', lang('Gebruikersnaam of wachtwoord onjuist'));
        }

        return redirect()->back()->with('errors', $this->validator->getErrors());
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/')->with(
            'success',
            'Logged Out'
        );
    }
}
