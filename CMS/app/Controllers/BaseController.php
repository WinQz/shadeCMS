<?php
namespace App\Controllers;

use App\Models\UserModel;

use CodeIgniter\Controller;
use CodeIgniter\Files\Exceptions\FileNotFoundException;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\Response;
use CodeIgniter\HTTP\ResponseInterface;

use Psr\Log\LoggerInterface;

abstract class BaseController extends Controller
{
    protected $session;
    protected $user;
  
    public function __construct()
    {
    }
  
  
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
      
        $this->session = \Config\Services::session();
        $this->role = \Config\Services::enforcer();
      
        if ($this->session->has('user')) { 
            $view = service('renderer');
            $view->setVar('user', (new UserModel())->find($this->session->get('user')->id));
        }
    }
}