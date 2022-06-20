<?php

namespace App\Controllers;

use App\Models\DataDiri;

class About extends BaseController
{
    public function __construct()
    {
        $this->data = new DataDiri();
    }

    public function index()
    {

        echo view('tugas', [
            'data' => $this->data->first()
        ]);
    }

    public function add()
    {
        echo view ('create');
    }

    public function simpan ()
    {
        $this->data->save(
            [
                'nama'=> $this ->request->getVar('nama'),
                'npm'=> $this ->request->getVar('npm'),
                'prodi'=> $this ->request->getVar('prodi'),
                'alamat'=> $this ->request->getVar('alamat'),
                'agama'=> $this ->request->getVar('agama')
            ]
            );
            return redirect()->to('About');
    }
}
