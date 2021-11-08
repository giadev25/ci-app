<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StudentModel;

class StudentController extends BaseController
{
    public function index()
    {
        $student = new StudentModel();
        return view('student/index', [
            'title' => 'Data murid kelas 8C',
            'data' => $student->orderBY('nama', 'asc')->findAll()
        ]);
    }

    public function create()
    {
        return view('student/create', [
            'title' => 'Tambah data murid kelas 8C'
        ]);
    }

    public function store()
    {
        $student = new StudentModel();
        $nama = $this->request->getPost('nama');
        $email = $this->request->getPost('email');
        $telp = $this->request->getPost('telp');

        $data = [
            'nama' => $nama,
            'email' => $email,
            'telp' => $telp
        ];

        $student->save($data);
        return redirect()->to('/StudentController');
    }

    public function edit($id)
    {

        $student = new StudentModel();
        return view('student/edit', [
            'title' => 'Edit data murid kelas 8C',
            'data' => $student->find($id)
        ]);
    }

    public function update()
    {
        $student = new StudentModel();
        $id = $this->request->getPost('id');
        $nama = $this->request->getPost('nama');
        $email = $this->request->getPost('email');
        $telp = $this->request->getPost('telp');

        $data = [
            'id' => $id,
            'nama' => $nama,
            'email' => $email,
            'telp' => $telp
        ];

        $student->insert($data);
        return redirect()->to('/StudentController');
    }

    public function destroy($id)
    {
        $student = new StudentModel();
        $student->delete($id);
        return redirect()->to('/StudentController');
    }
}
