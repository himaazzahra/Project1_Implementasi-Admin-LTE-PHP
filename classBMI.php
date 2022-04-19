<?php
class bmiPasien{
    public $nama, $berat, $tinggi, $umur, $jenis_kelamin;
    public function hasilBMI()
    {
        return "<b>Nama : $this->nama <br><br>
        Berat Badan : $this->berat <br><br>
        Tinggi Badan : $this->tinggi <br><br>
        Jenis Kelamin : $this->jeniskelamin</br>";
    }
    public function statusBMI($BMI)
    {
        if ($BMI < 18.5) {
            return "<td>Kekurangan Berat Badan</td>";
        } else if ($BMI >= 18.5 && $BMI <= 24.9) {
            return "<td>Kelebihan Berat Badan</td>";
        } else {
            return "<td>Kegemukan (Obesitas)</td>";
        }
    }
}
if (isset($_GET["nama_lengkap"])) {
    $bmi = new bmiPasien;
    $bmi->nama = $_GET["nama_lengkap"];
    $bmi->berat = $_GET["berat"];
    $bmi->tinggi = $_GET["tinggi"];
    $bmi->umur = $_GET["umur"];
    $bmi->jenis_kelamin = $_GET["jenis_kelamin"];
}
$pasien1 = ['nama'=> 'Adzhimatinur Azzahra', 'kelamin' => 'Perempuan', 'umur' => 18, 'berat' => 52.4, 'tinggi' =>162];
$pasien2 = ['nama'=> 'Ammar Ayyasy', 'kelamin' => 'Laki-laki', 'umur' => 19, 'berat' => 53.8, 'tinggi' =>176];
$pasien3 = ['nama'=> 'Deriyamsi', 'kelamin' => 'Perempuan', 'umur' => 18.5, 'berat' => 59.1, 'tinggi' =>168];
$pasien4 = ['nama'=> 'Harun Fahrizal', 'kelamin' => 'Laki-laki', 'umur' => 18, 'berat' => 50.1, 'tinggi' =>180];
$pasien5 = ['nama'=> 'Rania Azamy', 'kelamin' => 'Perempuan', 'umur' => 17.5, 'berat' => 47.1, 'tinggi' =>160];
$pasien6 = ['nama'=> 'Seriani', 'kelamin' => 'Perempuan', 'umur' => 17, 'berat' => 59.1, 'tinggi' =>152];
$pasien7 = ['nama'=> 'Wildan Ahmad', 'kelamin' => 'Laki-laki', 'umur' => 19, 'berat' => 57.6, 'tinggi' =>176];
$pasien8 = ['nama'=> 'Yulia Ananda', 'kelamin' => 'Perempuan', 'umur' => 18.3, 'berat' => 53.1, 'tinggi' =>157];
$pasien9 = ['nama'=> $bmi->nama, 'kelamin' => $bmi->jenis_kelamin, 'umur' => $bmi->umur, 'berat' => $bmi->berat, 'tinggi' => $bmi->tinggi];

$ar_pasien = [$pasien1, $pasien2, $pasien3, $pasien4, $pasien5, $pasien6, $pasien7, $pasien8, $pasien9];
?>