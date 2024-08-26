<?php
class Kendaraan 
{
    var $jumlahRoda=4;
    var $warna;
    var $bahanBakar = "premium";
    var $harga=100000000;
    var $merk;
    var $tahunPembuatan = 2004;
    function statusHarga()
    {
        if($this->harga > 50000000)
        {
        $status = "Harga Kendaraan Mahal";
        }
        else 
        {
        $status = "Harga Kendaaraan Murah";   
        }
        return $status;
    }
    function statusSubsidi()
    {
        if($this -> tahunPembuatan < 2005 && $this -> bahanBakar== "premium")
        {
        $status = "DAPAT SUBSIDI";
        }
        else 
        {
        $status = "TIDAK DAPAR SUBSIDI";
        }
        return $status;
    }
}
//instansi kelas
$ObjekKendaraan = new Kendaraan(); //pembuatan objek dari kelas

echo "jumlahRoda :" . $ObjekKendaraan->$jumlahRoda;
echo "<br>";//proses instansiasi pemanggilan variable
echo "Status Harga :" . $ObjekKendaraan->$StatusHarga();
echo "<br>";//proses instansiasi/pemanggilan function dari kelas
echo "Status Subsidi :" . $ObjekKendaraan->statusSubsidi();
?>