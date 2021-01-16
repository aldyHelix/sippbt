<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DokterModel;
class KelDokterController extends Controller
{
    public function __construct()
    {
        $this->doktermodel = new DokterModel();
    }

    private function rule()
    {
        return ['nama_dokter' => 'required',
            'jenis_kelamin' => 'required',
            'alamat'=> 'required',
            'no_telpon' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date'
    ];
    }

    public function index()
    {
        $title = 'Kelola Dokter';
        $data = $this->doktermodel->findAll();
        return view('master/dokter/data', compact('title','data'));
    }
    public function create()
    {
        session();
        $data = [
            'title' => 'Tambah Dokter',
            'validation' => \Config\Services::validation()
        ];

        return view('master/dokter/form', $data);
    }

    public function edit($id)
    {
        session();
        $dokter = $this->doktermodel->find($id);
        if (!$dokter) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        $data = [
            'edit' => 1,
            'title' => 'Edit Dokter',
            'dokter' => $dokter,
            'validation' => \Config\Services::validation()
        ];

        return view('master/dokter/form', $data);
    }

    public function save(){
        //ngambil inputan form
        $request = $this->request->getVar();

        //validasi inputan form
        if (!$this->validate($this->rule())) {
            $validation = \Config\Services::validation();
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        //simpan data ke database
        $this->doktermodel->save($request);
            return redirect()->route('dokter.index')->with('success', 'Berhasil ditambah');
    }

    public function update($id)
    {
        //get inputan
        $request = $this->request->getVar();

        // get data by id
        $dokter = $this->doktermodel->find($id);

        //validation data by id
        if (!$dokter) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        //validation request
        if (!$this->validate($this->rule())) {
            $validation = \Config\Services::validation();
            return redirect()->back()->withInput()->with('validation', $validation);
        }
        //update to database
        $this->doktermodel->update($id, $request);

        //redirect index
        return redirect()->route('dokter.index')->with('success', 'Berhasil diupdate');
    }

    public function delete($id)
    {
        session();
        // get data by id
        $dokter = $this->doktermodel->find($id);

        //validation data by id
        if (!$dokter) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        $this->doktermodel->delete($id);
        return redirect()->route('dokter.index')->with('success', 'Berhasil dihapus');
    }
}

