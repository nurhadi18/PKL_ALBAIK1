<?php 
include 'koneksi.php';

$id_admin = $_GET['id_admin'];

$sql = mysqli_query($kon, "DELETE FROM admin WHERE id_admin = $id_admin ");

if ($sql) {
?>
<script type="text/javascript">
	alert ("Data Berhasil Di hapus");
	window.location.href="admin.php";
</script>
<?php
} else {
	echo "Data Tak Dihapus";
}

?>