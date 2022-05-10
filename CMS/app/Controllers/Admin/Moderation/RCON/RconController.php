<?php

namespace App\Controllers\Admin\Moderation\RCON;

use App\Controllers\BaseController;

class Rconcontroller extends BaseController
{

    public function getRcon() {

		return view('admin/moderation/rcon/remote_control');

    }
	
	public function sendRcon() {
		
		$rules = [
			'rcon_message' => 'max_length[40]|required|min_length[10]'
        ];
		
		$errors = service('validate')->run($this->validate($rules));
        if($errors) {
            return redirect()->back()->with('errors', $errors);
        }
		
		$address = getenv('socket_adress');
		$service_port = getenv('socket_port');
		
		$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
		
		socket_connect($socket, $address, $service_port);
			
		$shade_rcon = 
			'{
			  "key": "hotelalert",
			  "data": {
				"message":" ' . $this->request->getVar('rcon_message', FILTER_SANITIZE_STRING) . ' ",
				"username": " ' . $this->session->get('user')->username . ' "
			  }
			}';

			socket_write($socket, $shade_rcon, strlen($shade_rcon));
		return redirect()->to('/admin/moderation/rcon')->with('success', lang('Hotel Bericht Verzonden'));
	}
}
