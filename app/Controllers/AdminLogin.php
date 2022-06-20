<?php

namespace App\Controllers;

use App\Models\UsersModel;

class AdminLogin extends BaseController
{
    public function index()
    {
        
        echo view('login');
    }

    public function auth(){
	    $usersModel = new UsersModel(); 
		$username = $this->request->getPost('username');
	    $password = $this->request->getPost('password');
	    $user = $usersModel->where('username', $username)->first();

	    if(empty($user)){
	    	session()->setFlashdata('message', 'Username atau Password Salah');
	    	return redirect()->to('/adminlogin');
	    }
	    if($user['password']!=$password){
	    	session()->setFlashdata('message', 'Username atau Password Salah');
	    	return redirect()->to('/adminlogin');
	    }
	    session()->set('username',$username);
	    return redirect()->to('/biodata');
	}
}
