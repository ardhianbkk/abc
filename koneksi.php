<?php
	$koneksi=mysqli_connect("localhost","root","","lsp");
	if (mysqli_connect_errno($koneksi))
	{
		echo "koneksi gagal".mysqli_connect_error();

	}


?>