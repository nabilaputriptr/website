<?php 
require "funcion.php";

$t=$_GET["x"];

if(hapus($t)){
    echo"
    <script>
    alert('data berhasil dihapus');
    document.location.href='index1.php';
</script>
    ";
}else{
    echo "
    <script>
    alert('data berhasil gagal dihapus');
    document.location.href='index1.php';
</script>
    ";
}
?>