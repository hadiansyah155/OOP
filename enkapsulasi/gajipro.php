<!DOCTYPE html>
<html>
<head>
    <title>Penggajian</title>
</head>
<body>
<fieldset>
    <?php
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $nip = $_POST['nip'];
        $alamat = $_POST['alamat'];
        $jml_hari = $_POST['jml_hari'];
        class Gaji
        {
            public $nama, $nip, $alamat, $jml_hari;
            public function __construct($nama, $nip, $alamat, $jml_hari)
            {
                $this->nama = $nama;
                $this->nip = $nip;
                $this->alamat = $alamat;
                $this->jml_hari = $jml_hari;
            }
            public function datadiri()
            {
                $data = "Nama Karyawan : $this->nama <br>";
                $data .= "NIP          : $this->nip <br>";
                $data .= "Alamat       : $this->alamat <br>";
                $data .= "Jumlah Hari Kerja : $this->jml_hari";
                return $data;
            }
            public function gajikotor()
            {
                $gajikotor = $this->jml_hari * 75000;
                return $gajikotor;
            }
            public function gajibersih()
            {
                $gajibersih = $this->gajikotor() - ($this->gajikotor() * 0.025);
                return $gajibersih;
            }
        }
        $karyawan = new Gaji($nama, $nip, $alamat, $jml_hari);
        echo $karyawan->datadiri() . "<br>";
        echo "Gaji Kotor  : " . $karyawan->gajikotor() . "<br>";
        echo "Gaji Bersih : " . $karyawan->gajibersih();
    }
    ?>
</fieldset>
</body>
</html>