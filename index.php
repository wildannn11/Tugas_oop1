<?php

// Parent class Dompet
class Dompet {
    // Property dengan access modifier sesuai permintaan
    public $jenis;
    protected $warna;
    private $isi;

    // Constructor
    public function __construct($jenis, $warna, $isi) {
        $this->jenis = $jenis;
        $this->warna = $warna;
        $this->isi = $isi;
        echo "Dompet {$this->jenis} telah dibuat.<br>";
    }

    // Destructor
    public function __destruct() {
        echo "Dompet {$this->jenis} telah dibuang.<br>";
    }

    // Setter
    public function setWarna($warna) {
        $this->warna = $warna;
    }

    public function setisi($isi) {
        $this->isi = $isi;
    }

    // Getter
    public function getWarna() {
        return $this->warna;
    }

    public function getisi() {
        return $this->isi;
    }

    // Method
    public function getInfo() {
        return "Dompet {$this->jenis}, warna {$this->warna}, isi {$this->isi}.";
    }
}

// Child class Uang yang mengextends Dompet
class Uang extends Dompet {
    // Property tambahan khusus untuk class Uang
    private $jumlah;

    // Constructor
    public function __construct($jenis, $warna, $isi, $jumlah) {
        parent::__construct($jenis, $warna, $isi);
        $this->jumlah = $jumlah;
        echo "Uang sebesar {$this->jumlah} rupiah telah diambil dari bank.<br>";
    }

    // Destructor
    public function __destruct() {
        echo "Dompet uang sebesar {$this->jumlah} rupiah telah disumbangkan.<br>";
        parent::__destruct();
    }

    // Setter
    public function setJumlah($jumlah) {
        $this->jumlah = $jumlah;
    }

    // Getter
    public function getJumlah() {
        return $this->jumlah;
    }

    // Method override (polymorphism)
    public function getInfo() {
        return "Uang {$this->jumlah} rupiah, jenis {$this->jenis}, warna {$this->getWarna()}, isi {$this->getisi()}.";
    }
}

// Instansiasi object dari masing-masing class
$dompet1 = new Dompet("Bulu", "coklat", 15);
$uang1 = new Uang("Kulit", "hitam", "Kartu Transjakarta", 500000);

// Set semua property dari objectnya
$dompet1->setWarna("merah");
$dompet1->setisi("Kartu pelajar");
$uang1->setJumlah(500000);

// Get semua property dari objectnya
echo "Info Dompet 1: " . $dompet1->getInfo() . "<br>";
echo "Info Dompet 2: " . $uang1->getInfo() . "<br>";
