<?php
class Nilai
{
    var $Nama;
    var $Kelas;
    var $MataKuliah;
    var $Nilai;
 
    function statuslulus()
    {
        if ($this->Nilai >= 75)
            $status = "Lulus";
        else
            $status = "Tidak Lulus";
        return $status;
    }
    function setNama($i)
    {
        $this->Nama = $i;
    }
    function getNama()
    {
        return $this->Nama;
    }
    function setKelas($i)
    {
        $this->Kelas = $i;
    }
    function getKelas()
    {
        return $this->Kelas;
    }
    function setMataKuliah($i)
    {
        $this->MataKuliah = $i;
    }
    function getMataKuliah()
    {
        return $this->MataKuliah;
    }
    function setNilai($i)
    {
        $this->Nilai = $i;
    }
    function getNilai()
    {
        return $this->Nilai;
    }
}
 
$Data1 = array('Aditya', 'SI 2', 'Pemrograman Berorientasi Objek', 80);
$Data2 = array('Shinta', 'SI 2', 'Pemrograman Berorientasi Objek', 75);
$Data3 = array('Ineu', 'SI 2', 'Pemrograman Berorientasi Objek', 55);
 
for ($i = 1; $i <= 3; $i++) {
    for ($h = 0; $h <= 3; $h++) {
        ${"Nilai$i"} = new Nilai();
        ${"Nilai$i"}->setNama(${"Data$i"}[0]);
        ${"Nilai$i"}->setKelas(${"Data$i"}[1]);
        ${"Nilai$i"}->setMataKuliah(${"Data$i"}[2]);
        ${"Nilai$i"}->setNilai(${"Data$i"}[3]);
    }
}
 
for ($i = 1; $i <= 3; $i++) {
    echo "Mahasiswa$i<br>"
        . ${"Nilai$i"}->getNama() . "<br>"
        . ${"Nilai$i"}->getKelas() . "<br>"
        . ${"Nilai$i"}->getMataKuliah() . "<br>"
        . ${"Nilai$i"}->getNilai() . "<br>"
        . ${"Nilai$i"}->statuslulus() . "<br><br>";
}
 
?>