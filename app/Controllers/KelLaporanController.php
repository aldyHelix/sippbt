<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LaporanModel;

class KelLaporanController extends Controller
{
    public function __construct()
    {
        $this->laporanmodel = new LaporanModel();
    }

    private function rule()
    {
        return [
            'nama_pasien' => 'required',
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
        $title = 'Kelola Laporan';
        $data = $this->laporanmodel->findAll();
        return view('master/laporan/data', compact('title', 'data'));
    }

    public function create()
    {
        session();
        $data = [
            'title' => 'Tambah Laporan',
            'validation' => \Config\Services::validation()
        ];
        return view('master/laporan/form', compact('title'));
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
        $this->laporanmodel->save($request);
        return redirect()->route('laporan.index')->with('success', 'Berhasil ditambah');
    }

    public function edit($id)
    {
        session();
        $laporan = $this->laporanmodel->find($id);
        if (!$laporan) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        $data = [
            'edit' => 1,
            'title' => 'Edit Pemeriksaan',
            'laporan' => $laporan,
            'validation' => \Config\Services::validation()
        ];

        return view('master/laporan/form', $data);
    }

    public function update($id)
    {
        //get inputan
        $request = $this->request->getVar();

        // get data by id
        $laporan = $this->laporanmodel->find($id);

        //validation data by id
        if (!$laporan) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        //validation request
        if (!$this->validate($this->rule())) {
            $validation = \Config\Services::validation();
            return redirect()->back()->withInput()->with('validation', $validation);
        }
        //update to database
        $this->laporanmodel->update($id, $request);

        //redirect index
        return redirect()->route('laporan.index')->with('success', 'Berhasil diupdate');
    }

    public function delete($id)
    {
        session();
        // get data by id
        $laporan = $this->laporanmodel->find($id);

        //validation data by id
        if (!$laporan) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        $this->laporanmodel->delete($id);
        return redirect()->route('laporan.index')->with('success', 'Berhasil dihapus');
    }


}
