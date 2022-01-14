<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdukKategori;

class KategoriProdukController extends BaseController
{
    public function index()
    {
        $kategori_produk = new ProdukKategori();
        return view('backpage/kategori_produk/index',[
            'datas'  => $kategori_produk->findAll()
        ]);
    }

    public function create()
    {
        return view('backpage/kategori_produk/create');
    }

    public function store()
    {
        $kategori_produk = new ProdukKategori();
        $kategori_produk->save([
            'name'  => $this->request->getPost('name')
        ]);

        return redirect()->route('kategori_produk.index');
    }

    public function edit($id)
    {
        $produk_kategori = new ProdukKategori();
        return view('backpage/kategori_produk/edit',[
            'data'      => $produk_kategori->find($id)
        ]);
    }


    public function update($id)
    {
        $produk_kategori = new ProdukKategori();
        $produk_kategori->update($id,[
            'name'  => $this->request->getPost('name')
        ]);
        return redirect()->route('kategori_produk.index');
    }


    public function destroy($id)
    {
        (new ProdukKategori())->delete($id);
        return redirect()->route('kategori_produk.index');
    }
}
