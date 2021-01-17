<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PemeriksaanModel;

class KelPemeriksaanController extends Controller
{
    public function __construct()
    {
        $this->pemeriksaanmodel = new PemeriksaanModel();
    }

    private function rule()
    {
        return ['nama_pasien' => 'required',
            'nik' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required',
            'pelayanan' => 'required',
            'poli' => 'required',
            'keluhan' => 'required',
            'nama_dokter' => 'required',
            'tanggal' => 'required',
        ];
    }

    public function index()
    {
        $title = 'Kelola Pemeriksaan';
        $data = $this->pemeriksaanmodel->findAll();
        return view('master/pemeriksaan/data', compact('title','data'));
    }

    public function create()
    {
        session();
        $data = [
            'title' => 'Tambah Pemeriksaan',
            'validation' => \Config\Services::validation()
        ];
        return view('master/pemeriksaan/form', $data);
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
        $this->pemeriksaanmodel->save($request);
        return redirect()->route('pemeriksaan.index')->with('success', 'Berhasil ditambah');
    }

    public function edit($id)
    {
        session();
        $pemeriksaan = $this->pemeriksaanmodel->find($id);
        if (!$pemeriksaan) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        $data = [
            'edit' => 1,
            'title' => 'Edit Pemeriksaan',
            'pemeriksaan' => $pemeriksaan,
            'validation' => \Config\Services::validation()
        ];

        return view('master/pemeriksaan/form', $data);
    }

    public function update($id)
    {
        //get inputan
        $request = $this->request->getVar();

        // get data by id
        $pemeriksaan = $this->pemeriksaanmodel->find($id);

        //validati data by id
        if (!$pemeriksaan) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        //validati request
        if (!$this->validate($this->rule())) {
            $validation = \Config\Services::validation();
            return redirect()->back()->withInput()->with('validation', $validation);
        }
        //update to database
        $this->pemeriksaanmodel->update($id, $request);

        //redirect index
        return redirect()->route('pemeriksaan.index')->with('success', 'Berhasil diupdate');
    }

    public function delete($id)
    {
        session();
        // get data by id
        $pemeriksaan = $this->pemeriksaanmodel->find($id);

        //validation data by id
        if (!$pemeriksaan) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        $this->pemeriksaanmodel->delete($id);
        return redirect()->route('pemeriksaan.index')->with('success', 'Berhasil dihapus');
    }
}
