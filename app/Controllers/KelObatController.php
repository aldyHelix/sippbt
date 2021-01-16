<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ObatModel;
class KelObatController extends Controller
{
    
    public function __construct()
    {
        $this->obatmodel = new ObatModel();
    }

    private function rule(){
        return ['nama_obat' => 'required',
            'golongan_obat' => 'required',
            'jenis_obat' => 'required',
            'dosis_obat' => 'required',
            'satuan_dosis' => 'required',
            'satuan_obat' => 'required',
            'harga_beli' => 'required',
            'sisa_obat' => 'required',
            'harga_obat' => 'required',];
    }
    
    public function index()
    {
        $title = 'Kelola Obat';
        $data = $this->obatmodel->findAll();
        return view('master/obat/data',compact('title','data'));
    }
    public function create()
    {
        session();
        $data = [
             'title' =>'Tambah Obat',
            'validation' => \Config\Services::validation()
        ];
      
        return view('master/obat/form',$data);
    }

    public function edit($id)
    {
        session();
        $obat = $this->obatmodel->find($id);
        if (!$obat) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        $data = [
            'edit' => 1,
            'title' => 'Edit Obat',
            'obat' => $obat ,
            'validation' => \Config\Services::validation()      ];

        return view('master/obat/form', $data);
    }

    public function delete($id)
    {
        session();
        // get data by id
        $obat = $this->obatmodel->find($id);

        //validati data by id
        if (!$obat) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        $this->obatmodel->delete($id);
        return redirect()->route('obat.index')->with('success', 'Berhasil dihapus');
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
        $this->obatmodel->save($request);
            return redirect()->route('obat.index')->with('success','Berhasil ditambah');
    }

    public function update($id){
        //get inputan
        $request = $this->request->getVar();

        // get data by id
        $obat = $this->obatmodel->find($id);

        //validati data by id
        if (!$obat) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        //validati request
        if (!$this->validate($this->rule())) {
            $validation = \Config\Services::validation();
            return redirect()->back()->withInput()->with('validation', $validation);
        }
        //update to database
        $this->obatmodel->update($id,$request);

        //redirect index
        return redirect()->route('obat.index')->with('success', 'Berhasil diupdate');
    }
}
