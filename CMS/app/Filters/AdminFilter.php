<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AdminFilter implements FilterInterface
{

    public function __construct()
    {
        $this->userModel = model('UserModel');
        $this->session = \Config\Services::session();
    }

    public function before(RequestInterface $request, $arguments = null) {


      if(session()->has('user'))
        {
          $user = $this->userModel->where('username', $this->session->get('user')->username)->first();
          if ($user->rank < 4)
            {
              return redirect()->to('me')->with('errors', 'Not enough permissions');
            }
        }
        // For now I'll do this, in the next ShadeCMS update I will improve the code structure.
        if(!session()->has('user')) {
          return redirect()->to('/')->with('errors', 'No logged in user found');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {}
}
