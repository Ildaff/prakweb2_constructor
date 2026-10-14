
<?php

class Produk {
    public $kode;
    public $nama;
    public $harga;
    public $stok;
    public $diskon;

    public function __construct($kode, $nama, $harga, $stok, $diskon) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
        $this->diskon = $diskon;
    }

    public function hargaDiskon() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function nilaiStok() {
        return $this->hargaDiskon() * $this->stok;
    }
}
?>
