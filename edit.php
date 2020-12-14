<?php include "koneksi.php";
    $id=$_GET['idcust'];
    $sql= mysqli_query($koneksi, "select * from custumer where idcust='$id'");
    $data=mysqli_fetch_array($sql);
?>
<head>
<title> latihan lsp </title>
<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>

<body>
    <div class="container" >
        <div class="card-header">
            input data costumer
        </div>
        <div class="card-body">
        <form action="" method="POST" class="form-item">
            <div class="form-group">
            <label for="nama">input nama</label>
            <input type="text" name="nama" value="<?php echo $data['nama'];?>" class="form-control col-md-6" placeholder="masukan nama">
            </div>

            <div class="form-group">
            <label for="telepon">telepon</label>
            <input type="number" name="telepon" value="<?php echo $data['telp'];?>" class="form-control col-md-6" placeholder="masukan telepon">
            </div>

            <div class="form-group">
            <label for="Alamat">input Alamat</label>
            <input type="text" name="alamat" value="<?php echo $data['alamat'];?>" class="form-control col-md-6" placeholder="masukan Alamat">
            </div>

            <div class="form-group">
            <label for="kota">input kota</label>
            <input type="text" name="kota" value="<?php echo $data['kota'];?>" class="form-control col-md-6" placeholder="masukan kota">
            </div>

            <div class="form-group">
            <label for="kodepos">input kodepos</label>
            <input type="number" name="kodepos" value="<?php echo $data['kodepos'];?>" class="form-control col-md-6" placeholder="masukan kodepos">
            </div>

            <button type="submit" class="btn btn-secondary" name="submit">submit</button>
            <button type="reset" class="btn btn-danger" >reset  </button>
        </form>
        <?php 
           if(isset($_POST['submit'])){
            $nama=$_POST['nama'];
            $alamat=$_POST['alamat'];
            $kota=$_POST['kota'];
            $kodepos=$_POST['kodepos'];
            $telepon=$_POST['telepon'];
            
            mysqli_query($koneksi, "update custumer set  nama='$nama', telp='$telepon', alamat='$alamat',kota='$kota', kodepos='$kodepos' where idcust='$id')")
             or die (mysqli_error($koneksi));

           }
        ?>
        </div>
     
    </div>

</body>