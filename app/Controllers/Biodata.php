<?php

namespace App\Controllers;

use App\Models\Biodata_model;

class Biodata extends BaseController
{
    public function index()
    {
        $model = new Biodata_model();
        $data['datadiri'] = $model->getBiodata();
        echo view('page/mybiodata',$data);
    }

    public function add_new()
    {
        echo view('page/add');
    }
 
    public function save()
    {
        $model = new Biodata_model();
        $data = array(
            'nama'  => $this->request->getPost('nama'),
            'npm' => $this->request->getPost('npm'),
            'prodi' => $this->request->getPost('prodi'),
            'alamat' => $this->request->getPost('alamat'),
            'agama' => $this->request->getPost('agama')
        );
        $model->saveBiodata($data);
        return redirect()->to('/biodata');
    }


    public function edit($id)
    {
        $model = new Biodata_model();
        $data['datadiri'] = $model->getBiodata($id)->getRow();
        echo view('page/edit', $data);
    }
 
    public function update()
    {
        $model = new Biodata_model();
        $id = $this->request->getPost('id');
        $data = array(
            'nama'  => $this->request->getPost('nama'),
            'npm' => $this->request->getPost('npm'),
            'prodi' => $this->request->getPost('prodi'),
            'alamat' => $this->request->getPost('alamat'),
            'agama' => $this->request->getPost('agama')
        );
        $model->updateBiodata($data, $id);
        return redirect()->to('/biodata');
    }

    public function delete($id)
    {
        $model = new Biodata_model();
        $model->deleteBiodata($id);
        return redirect()->to('/biodata');
    }

    public function login()
    {
        if(!session()->has('username')){
			return redirect()->to('/adminlogin');
		}
		$data['username']  = session()->get('username');
		echo view('page/mybiodata');

    }
    
     
}
