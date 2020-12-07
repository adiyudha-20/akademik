<?php
	error_reporting( error_reporting() & ~E_NOTICE );
	include "../koneksi.php";

   
     if ($_GET['gu']=="add_guru") {
		include "add_guru.php";
	}

	else if ($_GET['gu']=="create_guru") {
		include "create_guru.php";
	}

	else if ($_GET['gu']=="edit_guru") {
		include "edit_guru.php";
	}

	else if ($_GET['gu']=="update_guru") {
		include "update_guru.php";
	}

	else if ($_GET['gu']=="delete_guru") {
		include "delete_guru.php";
	}

	else{
		include "read_guru.php";
	}
?>