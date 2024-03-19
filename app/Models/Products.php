<?php
namespace app\Models;

class Products{
    protected string $nama_produk = 'Broccoli';
    protected int $stok = 4;
    protected $kategori = 'Food Beverage';
    // protected string $;

    public function __construct($nama_produk, $stok, $kategori) {
        $this->nama_produk = $nama_produk;
        $this->stok = $stok;
        $this->kategori = $kategori;
    }


} 