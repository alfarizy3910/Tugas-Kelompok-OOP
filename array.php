<!doctype html>
<?php 

// membuat array karyawan
$karyawan = [
  [
    "NIK" => "12121234","Nama"=> "Hendra", "Jenis_Kelamin"=>"Laki-Laki","Umur"=>"21","alamat"=>"serpong","jabatan"=>"IT","Spesialis"=>"Backand Developer"
  ],
  [
    "NIK" => "121232","Nama"=> "Aris", "Jenis_Kelamin"=>"Laki-Laki","Umur"=>"601","alamat"=>"cipondoh","jabatan"=>"Digital Marketing","Spesialis"=>"frontand Developer"
  ],
  [
    "NIK" => "12132553","Nama"=> "Sundara", "Jenis_Kelamin"=>"Laki-Laki","Umur"=>"80","alamat"=>"Rangkas","jabatan"=>"Admin","Spesialis"=>"Android Developer"
  ]
];

 ?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Array</title>
  </head>
  <body>
    <h1>Data Karyawan</h1>


      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
  Array
</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable1">
  OOP
</button>

<!-- Array -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">DATA KARYAWAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php 
foreach($karyawan as $isi){ 
  echo "<ul>";
    echo "<li> NIK: "      .$isi["NIK"]."<br>";
    echo "<li>Nama: "      .$isi["Nama"]."<br>";
    echo "<li>Kelmain: "   .$isi["Jenis_Kelamin"]."<br>";
    echo "<li>Umur: "      .$isi["Umur"]."<br>";
    echo "<li>alamat: "    .$isi["alamat"]."<br>";
    echo "<li>Jabatan: "   .$isi["jabatan"]."<br>";
    echo "<li>Spesialis: " .$isi["Spesialis"]."<br>";
    echo"</ul>";
    echo "<hr>";
}
         ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>




<!-- OOP -->
<div class="modal fade" id="exampleModalScrollable1" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">DATA KARYAWAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
        <?php 


class karyawan{
  public $NIK, $NAMA, $JK, $UMUR, $ALAMAT, $JABATAN, $SPEC;
  public function __construct($NIK="nik", $NAMA="nama", $JK="jk", $UMUR="umur", $ALAMAT="alamat", $JABATAN="jabatan", $SPEC="spec"){
    $this->nik = $NIK;
    $this->nama = $NAMA;
    $this->jk = $JK;
    $this->umur = $UMUR;
    $this->alamat = $ALAMAT;
    $this->jabatan = $JABATAN;
    $this->spec = $SPEC;
  }

  public function getData(){
    return "$this->nik,$this->nama,$this->jk,$this->umur,$this->alamat,$this->spec";
  }
  public function getDataMaster(){
    $data ="{$this->jabatan}{$this->getData()}";
    return $data;
  }
}
class IT extends karyawan{
  public function getDataMaster(){
    $data ="Jabatan:
    {$this->jabatan},{$this->getData()}<br>";
    return $data;
  }
}

$data1 = new IT(" <br> NIK: 1331431 "," <br>Nama: Hendra "," <br>Jenis_Kelamin: Laki-Laki"," <br> Umur: 21"," <br> Alamat: serpong","IT"," <br> Spesialis: Backand Developer");
$data2 = new IT(" <br> NIK: 232342 "," <br>Nama: Agus "," <br>Jenis_Kelamin: Laki-Laki"," <br> Umur: 26"," <br> Alamat: jakarta","IT"," <br> Spesialis: Frontand Developer");
$data3 = new IT(" <br> NIK: 24114124 "," <br>Nama: puji "," <br>Jenis_Kelamin: Perempuan"," <br> Umur: 24"," <br> Alamat: serang","IT"," <br> Spesialis: Desain Web");

echo $data1->getDataMaster();
echo "<hr>";
echo $data2->getDataMaster();
echo "<hr>";
echo $data3->getDataMaster();

 ?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<!-- Function -->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
