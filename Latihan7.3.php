<?php
class Employee {
    var $gajiPokok;

    public function __construct($gajiPokok) {
        $this->gajiPokok = $gajiPokok;
    }

    public function getGajiPokok() {
        return $this->gajiPokok;
    }
}

class PegawaiMingguan extends Employee {
    var $hargaBarang;
    var $targetStock;

    public function __construct($gajiPokok, $hargaBarang, $targetStock) {
        parent::__construct(gajiPokok: $gajiPokok);
        $this->hargaBarang = $hargaBarang;
        $this->targetStock = $targetStock;
    }

    public function hitungGaji($totalPenjualan): float|int {
        $persentasePenjualan = ($totalPenjualan / $this->targetStock) * 100;

        if ($persentasePenjualan > 70) {
            $bonus = 0.10 * $this->hargaBarang * $totalPenjualan;
        } else {
            $bonus = 0.03 * $this->hargaBarang * $totalPenjualan;
        }

        return $this->getGajiPokok() + $bonus;
    }
}
// Menginisialisasi objek PegawaiMingguan
$pegawai = new PegawaiMingguan(gajiPokok: 2000000, hargaBarang: 50000, targetStock: 100);

// Menghitung gaji dengan total penjualan
$totalPenjualan = 2; // Misalnya pegawai menjual 80 barang
$gaji = $pegawai->hitungGaji(totalPenjualan: $totalPenjualan);

// output
echo "Gaji pegawai: Rp " . number_format(num: $gaji,decimals: 2,decimal_separator: ',', thousands_separator: '.') . "<br/>";

?>