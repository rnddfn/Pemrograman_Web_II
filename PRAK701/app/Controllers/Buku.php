<?php

namespace App\Controllers;

use App\Models\BukuModel;
use CodeIgniter\Controller;

class Buku extends BaseController
{
    protected $bukuModel;

    public function __construct()
    {
        $this->bukuModel = new BukuModel();
        helper(['form']);
    }

    public function index()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login')->with('error', 'Silakan login terlebih dahulu untuk mengakses halaman buku.');
        }
        $data = [
            'title' => 'Daftar Buku',
            'buku'  => $this->bukuModel->findAll(),
        ];

        return view('buku/index', $data);
    }

    public function create()
    {
        $data = [
            'title'      => 'Tambah Buku',
            'validation' => \Config\Services::validation()
        ];

        return view('buku/create', $data);
    }

        public function save(){
        $validationRules = [
            'judul' => [
                'label' => 'Judul',
                'rules' => 'required|string',
                'errors' => [
                    'required' => 'Judul harus diisi.',
                    'string' => 'Judul harus berupa teks.'
                ]
            ],
            'penulis' => [
                'label' => 'Penulis',
                'rules' => 'required|string',
                'errors' => [
                    'required' => 'Penulis harus diisi.',
                    'string' => 'Penulis harus berupa teks.'
                ]
            ],
            'penerbit' => [
                'label' => 'Penerbit',
                'rules' => 'required|string',
                'errors' => [
                    'required' => 'Penerbit harus diisi.',
                    'string' => 'Penerbit harus berupa teks.'
                ]
            ],
            'tahun_terbit' => [
                'label' => 'Tahun Terbit',
                'rules' => 'required|integer|greater_than[1900]|less_than[2024]',
                'errors' => [
                    'required' => 'Tahun terbit harus diisi.',
                    'integer' => 'Tahun terbit harus berupa angka.',
                    'greater_than' => 'Tahun terbit harus lebih dari 1900.',
                    'less_than' => 'Tahun terbit harus kurang dari 2024.'
                ]
            ],
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('validation', \Config\Services::validation());
        }

        $this->bukuModel->save([
            'judul'        => $this->request->getPost('judul'),
            'penulis'      => $this->request->getPost('penulis'),
            'penerbit'     => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ]);

        session()->setFlashdata('pesan', 'Buku berhasil ditambahkan.');
        return redirect()->to('/buku');
    }


    public function delete($id)
    {
        $this->bukuModel->delete($id);

        session()->setFlashdata('pesan', 'Buku berhasil dihapus.');
        return redirect()->to('/buku');
    }

    public function edit($id)
    {
        $buku = $this->bukuModel->find($id);
        if (!$buku) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Buku dengan ID $id tidak ditemukan.");
        }

        $data = [
            'title'      => 'Edit Buku',
            'buku'       => $buku,
            'validation' => \Config\Services::validation()
        ];

        return view('buku/edit', $data);
    }

    public function update($id)
    {
        $validationRules = [
            'judul' => [
                'label' => 'Judul',
                'rules' => 'required|string',
                'errors' => [
                    'required' => 'Judul harus diisi.',
                    'string' => 'Judul harus berupa teks.'
                ]
            ],
            'penulis' => [
                'label' => 'Penulis',
                'rules' => 'required|string',
                'errors' => [
                    'required' => 'Penulis harus diisi.',
                    'string' => 'Penulis harus berupa teks.'
                ]
            ],
            'penerbit' => [
                'label' => 'Penerbit',
                'rules' => 'required|string',
                'errors' => [
                    'required' => 'Penerbit harus diisi.',
                    'string' => 'Penerbit harus berupa teks.'
                ]
            ],
            'tahun_terbit' => [
                'label' => 'Tahun Terbit',
                'rules' => 'required|integer|greater_than[1900]|less_than[2024]',
                'errors' => [
                    'required' => 'Tahun terbit harus diisi.',
                    'integer' => 'Tahun terbit harus berupa angka.',
                    'greater_than' => 'Tahun terbit harus lebih dari 1900.',
                    'less_than' => 'Tahun terbit harus kurang dari 2024.'
                ]
            ],
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('validation', \Config\Services::validation());
        }

        $this->bukuModel->save([
            'id'           => $id,
            'judul'        => $this->request->getPost('judul'),
            'penulis'      => $this->request->getPost('penulis'),
            'penerbit'     => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ]);

        session()->setFlashdata('pesan', 'Buku berhasil diperbarui.');
        return redirect()->to('/buku');
    }
}
