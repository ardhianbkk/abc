<head>
<title> latihan lsp </title>
<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>

<body>
    <div class="container" >
        <div class="card-header">
            list data costumer
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                <th>nama</th>
                <th>telp</th>
                <th>alamat</th>
                <th>kota</th>
                <th>kodepost</th>
                <th>aksi</th>
                </tr>
            <?php 
                include "koneksi.php";
                $no=1;
                $tampil=mysqli_query($koneksi, "select * from custumer");
                while ($data=mysqli_fetch_array($tampil))
                {
            ?>
            <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $data['nama'];?></td>
                    <td><?php echo $data['telp'];?></td>
                    <td><?php echo $data['kota'];?></td>
                    <td><?php echo $data['kodepos'];?></td>
                    <td><?php echo $data['kodepos'];?></td>
                    <td> <a href="edit.php?idcust=<?php echo $data['idcust']?>">edit </a>
                        <a href="delete.php?idcust=<?php echo $data['idcust']?>">delete </a></td>
            </tr>
            <?php } ?>
            </table>
       
        </div>
     
    </div>

</body>