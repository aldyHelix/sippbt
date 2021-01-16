<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PasienModel;
class KelPasienController extends Controller
{
    public function __construct()
    {
        $this->pasienmodel = new PasienModel();
    }

    private function rule()
    {
        return [
            'nama_pasien' => 'required',
            'nik' =>'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            //'no_telpon' => 'required',
            'tempat_lahir' => 'required',
            'pekerjaan' => 'required',
            'gol_darah' => 'required',
            'tanggal_lahir' => 'required|date'
        ];
    }

    public function index()
    {
        $title = 'Kelola Pasien';
        $data = $this->pasienmodel->findAll();
        return view('master/pasien/data', compact('title', 'data'));
    }

    public function create()
    {
        session();
        $data = [
            'title' => 'Tambah Pasien',
            'validation' => \Config\Services::validation()
        ];
        return view('master/pasien/form',$data);
    }

    public function edit($id)
    {
        session();
        $pasien = $this->pasienmodel->find($id);
        if (!$pasien) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        $data = [
            'edit' => 1,
            'title' => 'Edit Pasien',
            'pasien' => $pasien,
            'validation' => \Config\Services::validation()
        ];

        return view('master/pasien/form', $data);
    }

    public function save(){
        //ngambil inputan form
        $request = $this->request->getVar();
        //validatsi inputan form
        if (!$this->validate($this->rule())) {
            $validation = \Config\Services::validation();
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        //simpan data ke database
        $this->pasienmodel->save($request);
            return redirect()->route('pasien.index')->with('success', 'Berhasil ditambah');
    }

    public function update($id)
    {
        //get inputan
        $request = $this->request->getVar();

        // get data by id
        $pasien = $this->pasienmodel->find($id);

        //validati data by id
        if (!$pasien) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        //validati request
        if (!$this->validate($this->rule())) {
            $validation = \Config\Services::validation();
            return redirect()->back()->withInput()->with('validation', $validation);
        }
        //update to database
        $this->pasienmodel->update($id, $request);

        //redirect index
        return redirect()->route('pasien.index')->with('success', 'Berhasil diupdate');
    }

    public function delete($id)
    {
        session();
        // get data by id
        $pasien = $this->pasienmodel->find($id);

        //validati data by id
        if (!$pasien) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        $this->pasienmodel->delete($id);
        return redirect()->route('pasien.index')->with('success', 'Berhasil dihapus');
    }
}
