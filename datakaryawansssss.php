<?php

class Karyawan{
    public $nik, $nama, $jk, $umur, $alamat, $jabatan, $spesialis;
    
    public function dataKaryawan(){
        $data = [
            ["nik"=>"112233", "nama"=>"Jaka", "jk"=>"Laki - Laki", "umur"=>25, "alamat"=>"Rangkasbitung - Lebak", "jabatan"=>"IT Developer", "spesialis"=>"Programmer"],
            ["nik"=>"223344", "nama"=>"Joko", "jk"=>"Laki - Laki", "umur"=>23, "alamat"=>"Jakarta Pusat", "jabatan"=>"Digital Marketing", "spesialis"=>"Pemasaran"],
            ["nik"=>"334455", "nama"=>"Adinda", "jk"=>"Perempuan", "umur"=>20, "alamat"=>"Tangerang Selatan", "jabatan"=>"Admin", "spesialis"=>"Entry Data"]
        ];
        return $data;
    }

}

class BagianKaryawan extends Karyawan{
    public function lihatDataKaryawan($a, $b){
        $data = $this->dataKaryawan();
        return $data[$a][$b];
    }
}

$karyawan = new BagianKaryawan();
?>
<table border=1 cellpadding=10>
<tr>
<th> NIK</th>
<th> Nama</th>
<th> Jenis Kelamin</th>
<th> Umur</th>
<th> Alamat</th>
<th> Jabatan</th>
<th> Spesialis</th>
</tr>
<?php
    for ($i=0; $i < 3; $i++) { 
    echo "<tr>";
    echo "<td>".$karyawan->lihatDataKaryawan($i, 'nik')."</td>";
    echo "<td>".$karyawan->lihatDataKaryawan($i, 'nama')."</td>";
    echo "<td>".$karyawan->lihatDataKaryawan($i, 'jk')."</td>";
    echo "<td>".$karyawan->lihatDataKaryawan($i, 'umur')."</td>";
    echo "<td>".$karyawan->lihatDataKaryawan($i, 'alamat')."</td>";
    echo "<td>".$karyawan->lihatDataKaryawan($i, 'jabatan')."</td>";
    echo "<td>".$karyawan->lihatDataKaryawan($i, 'spesialis')."</td>";
    echo "</tr>";
    }
?>
</table>