    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Database Karyawan</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    </head>
    <body>
        <div class="container">
            <div class="card text">
                
                <div class="card-header">
                <h1 class="card-title"> Data Karyawan IT,Digital Marketing & Admin</h1>
                </div>
                <div class="card-body">
                </div>
                
            <?php
            $karyawan = [ 
                ['Steven','sstevenco@gmail.com','Laki-Laki','23th','Jl.Kembangan no.45 rt08/rw010 kel.babonhiu','IT','Fullstack Web Developer <hr>'],
                ['Daniel','KurtDaniel90@gmail.com','Laki-Laki','21th','Jl.penerbangan no.34 rt09/rw05 kel.makana','DM','Pemasaran dibidang digital<hr>'],
                ['Shifa','shievankos@gmail.com','Perempuan','24th','Jl.Inerbang rt10/rw08 kel.babonhiu','ADM','menginput data,me-replace data,dan mendelete data'],
            ];
            
            
            $id = 101119;
            foreach ($karyawan as $pegawai) {
                echo "<ul>";
                echo "<li> Nik : ".$id."</li>";
                echo "<li> Nama : ".$pegawai[0]."</li>";
                echo "<li> Jenis Kelamin : ".$pegawai[2]."</li>";
                echo "<li> Umur : ".$pegawai[3]."</li>";
                echo "<li> Alamat : ".$pegawai[4]."</li> ";
                echo "<li> Jabatan : ".$pegawai[5]."</li>";
                echo "<li> Specialist : ".$pegawai[6]."</li>";
                $id++;
                echo "</ul>";
            }
            
            
            
            ?>
            <div class="card-footer text-muted">
                    1 days ago
                </div>
            </div>
        </div>
    </body>
    </html>



