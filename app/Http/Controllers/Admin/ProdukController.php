<?php

namespace App\Http\Controllers\Admin;

use App\Helper\CustomController;
use App\Models\Kategori;
use App\Models\Products;
use Illuminate\Support\Arr;

class ProdukController extends CustomController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['produk'] = Products::all();

        return view('admin.kardus.kardus')->with($data);
    }

    public function addForm()
    {
        if ($this->request->isMethod('POST')) {
            $image = $this->generateImageName('gambar');
            $data  = [
                'nama'      => $this->postField('nama'),
                'bahan'     => $this->postField('bahan'),
                'harga'     => $this->postField('harga'),
                'tebal'     => $this->postField('tebal'),
                'panjang'   => $this->postField('panjang'),
                'lebar'     => $this->postField('lebar'),
                'tinggi'    => $this->postField('tinggi'),
                'minimum'   => $this->postField('minimum'),
                'deskripsi' => '',
                'url'       => $image,
                'qty'       => 0,
            ];
            $this->uploadImage('gambar', $image, 'image');

            $this->insert(Products::class, $data);

            return redirect()->back()->with(['success' => 'success']);
        }

        return view('admin.kardus.tambahkardus');
    }

    public function editForm($id)
    {
        if ($this->request->isMethod('POST')) {
            $data = [
                'nama'      => $this->postField('nama'),
                'bahan'     => $this->postField('bahan'),
                'harga'     => $this->postField('harga'),
                'tebal'     => $this->postField('tebal'),
                'panjang'   => $this->postField('panjang'),
                'lebar'     => $this->postField('lebar'),
                'tinggi'    => $this->postField('tinggi'),
                'minimum'   => $this->postField('minimum'),
                'deskripsi' => '',
                'qty'       => 0,

            ];
            if ($this->request->hasFile('gambar')) {
                $image = $this->generateImageName('gambar');
                $data  = Arr::add($data, 'url', $image);
                $this->uploadImage('gambar', $image, 'image');
            }

            $this->update(Products::class, $data);

            return redirect()->back()->with(['success' => 'success']);
        }
        $produk           = Products::where('id', $id)->first();
        $data['produk']   = $produk;

        return view('admin.kardus.editkardus')->with($data);
    }

    public function hapus($id)
    {
        try {
            Products::destroy($id);

            return $this->jsonResponse('success', 200);
        } catch (\Exception $er) {
            return $this->jsonResponse('error '.$er, 500);

        }
    }

}
