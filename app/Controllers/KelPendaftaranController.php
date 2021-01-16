<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PendaftaranModel;
class KelPendaftaranController extends Controller
{
    public function __construct()
    {
        $this->pendaftaranmodel = new PendaftaranModel();
    }

    private function rule()
    {
        return [
            'nama_pasien' => 'required',
            'nik' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required',
            'gol_darah' => 'required',
            'status' => 'required',
            'pelayanan' => 'required',
        ];
    }

    public function index()
    {
        $title = 'Kelola Pendaftaran';
        $data = $this->pendaftaranmodel->findAll();
        return view('master/pendaftaran/data', compact('title', 'data'));
    }

    public function create()
    {
        session();
        $data = [
            'title' => 'Tambah Pendaftaran',
            'validation' => \Config\Services::validation()
        ];
        return view('master/pendaftaran/form', $data);
    }

    public function edit($id)
    {
        session();
        $pendaftaran = $this->pendaftaranmodel->find($id);
        if (!$pendaftaran) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        $data = [
            'edit' => 1,
            'title' => 'Edit Pendaftaran',
            'pendaftaran' => $pendaftaran,
            'validation' => \Config\Services::validation()
        ];

        return view('master/pendaftaran/form', $data);
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
        $this->pendaftaranmodel->save($request);
        return redirect()->route('pendaftaran.index')->with('success', 'Berhasil ditambah');
    }

    public function update($id)
    {
        //get inputan
        $request = $this->request->getVar();

        // get data by id
        $pendaftaran = $this->pendaftaranmodel->find($id);

        //validation data by id
        if (!$pendaftaran) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        //validation request
        if (!$this->validate($this->rule())) {
            $validation = \Config\Services::validation();
            return redirect()->back()->withInput()->with('validation', $validation);
        }
        //update to database
        $this->pendaftaranmodel->update($id, $request);

        //redirect index
        return redirect()->route('pendaftaran.index')->with('success', 'Berhasil diupdate');
    }

    public function delete($id)
    {
        session();
        // get data by id
        $pendaftaran = $this->pendaftaranmodel->find($id);

        //validation data by id
        if (!$pendaftaran) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        $this->pendaftaranmodel->delete($id);
        return redirect()->route('pendaftaran.index')->with('success', 'Berhasil dihapus');
    }
}
