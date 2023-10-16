<?php 
$coon=mysqli_connect("localhost","root","","web-v3");
function query($database){
    global $coon;
    $rows=[];
    $result=mysqli_query($coon,$database);
    while($row=mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}
function tambah($data){
    $nama=$data["PEMESAN"];
    $prodi=$data["PRODI"];
    $ruang=$data["RUANGLAB"];
    $hari=$data["HARI"];
    $tanggal=$data["TANGGALPINJAM"];
    $mulai=$data["JAMMULAI"];
    $selesai=$data["JAMSELESAI"];
   
    
    global $coon;
    $tambah="INSERT INTO lab VALUES
    ('','$nama','$prodi','$ruang','$hari','$tanggal','$mulai','$selesai')
    ";
    $result=mysqli_query($coon,$tambah);
    return $result;
}
function hapus($d){
    global $coon;

    $result=mysqli_query($coon,"DELETE FROM lab WHERE ID = $d");
    return $result;
}

function ubah($data){
    $nama=htmlspecialchars($data["PEMESAN"]);
    $prodi=htmlspecialchars($data["PRODI"]);
    $ruang=htmlspecialchars($data["RUANGLAB"]);
    $hari=htmlspecialchars($data["HARI"]);
    $tanggal=htmlspecialchars($data["TANGGALPINJAM"]);
    $mulai=htmlspecialchars($data["JAMMULAI"]);
    $selesai=htmlspecialchars($data["JAMSELESAI"]);
    $id=$data["ID"];
    global $coon;
    $result=mysqli_query($coon," UPDATE lab SET
    PEMESAN = '$nama',
    PRODI = '$prodi',
    RUANG LAB = '$ruang',
    HARI = '$hari',
    TANGGAL PINJAM = '$tanggal',
    JAM MULAI = '$mulai',
    JAM SELESAI = '$selesai',
    WHERE ID = $id
    ");
    return $result;
}

function cari($keyword){
    $quer="SELECT * FROM lab 
    WHERE
    PEMESAN LIKE '%$keyword%'
    ";
 return query($quer);
}
?>

