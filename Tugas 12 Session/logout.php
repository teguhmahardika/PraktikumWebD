<?php 
	session_start();
	session_destroy();
	{
		echo"<script> alert ('Silahkan Datang Kembali.');
		location.href='index.html';</script>";
	}
?>