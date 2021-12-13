@php
	session_start();
	
	$con = mysqli_connect('localhost', 'root', '', 'tubes_sbd');

	if($con -> connect_errno) {
		die ("Tidak ada koneksi ke database" . $connect -> connect_error);
	}
@endphp