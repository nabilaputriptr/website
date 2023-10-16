<?php 
require "funcion.php";

if(isset($_POST["submit"])){

    if(tambah($_POST)){
        echo"
        <script>
    alert('data berhasil dimasukkan');
    document.location.href='index1.php';
</script>
        ";
    }else{
        echo"
        gagal ditambah
        ";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        
        .container{
            background-image: url('images/marble.jpg') ;
            background-size: cover;
            width: 100%;
            height: 650px;
            position: relative;
            display: flex;
            justify-content: center;

            
       
}

.container::after{
    content: '';
    display: block;
    position: absolute;
    top:0;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: white;
    opacity: 0.4;
}
.container .f{
    z-index: 1;
}

input
{
  
   height: 18px;
}button{
    height: 25px;
}.mahok{
position: relative;
left: -470px;
margin-left: 5px;
}a{

    color: black;
}
table{
    margin-top: 70px;
}





    </style>
</head>
<body>

   
        <div class="container">
        <form class="f" action="" method="post">
        <h4 class="mahok"><a href="index.php">_______________KEMBALI KE HALAMAN AWAL</a></h4><br><br>
        <table  cellpadding="5" cellspacing="0">
            <tr>
           <td> PEMESAN : </td> <td> <input type="text" name="PEMESAN" ></td>
            </tr>
            <tr>
          <td>  PRODI : </td> 
		  <td> <select name="PRODI">
		  <option></option>
		  <option>PANCASARJANA PENDIDIKAN BAHASA DAN SASTRA INDONESIA</option>
		  <option>PANCASARJANA PENDIDIKAN ILMU PENGETAHUAN SOSIAL</option>
		  <option>PENDIDIKAN GURU SEKOLAH DASAR</option>
		  <option>PENDIDIKAN GURU PENDIDIKAN ANAK USIA DINI</option>
		  <option>BIMBINGAN KONSELING</option>
		  <option>PENDIDIKAN PANCASILA DAN KEWARGANEGARAAN</option>
		  <option>PENDIDIKAN SEJARAH</option>
		  <option>PENDIDIKAN AKUNTANSI</option>
		  <option>PENDIDIKAN EKONOMI</option>
		  <option>PENDIDIKAN BAHASA DAN SASTRA INDONESIA</option>
		  <option>PENDIDIKAN BAHASA INGGRIS</option>
		  <option>PENDIDIKAN MATEMATIKA</option>
		  <option>PENDIDIKAN BILOGI</option>
		  <option>PENDIDIKAN FISIKA</option>
		  <option>PENDIDIKAN TEKNIK ELEKTRO</option>
		  <option>AKUNTANSI</option>
		  <option>MANAJEMEN</option>
		  <option>FARMASI</option>
		  <option>ILMU KEOLAHRAGAAN</option>
		  <option>TEKNIK INFORMATIKA</option>
		  <option>SISTEM INFORMASI</option>
		  <option>TEKNIK INDUSTRI</option>
		  <option>TEKNIK KIMIA</option>
		  <option>TEKNIK ELEKTRO</option>
		  <option>HUKUM</option>
		  <option>PENDIDIKAN PROFESI GURU</option>
		  <option>D3 MANAJEMEN PAJAK</option>
		  </select>
            </tr>
            <tr>
          <td> RUANG LAB : </td>  
		  <td> <select name="RUANGLAB">
		  <option></option>
		  <option>LAB UPT KOMPUTER 1 </option>
		  <option>LAB UPT KOMPUTER 2</option>
		  </select>
		  </td>
            </tr>
            <tr>
           <td> HARI :</td>
            <td><select name="HARI" >
                <option></option>
                <option>SENIN</option>
                <option>SELASA</option>
                <option>RABU</option>
                <option>KAMIS</option>
                <option>JUMAT</option>
                <option>SABTU</option>
                <option>MINGGU</option>
            </select>
            </td>
            </tr>
            <tr>
           <td> TANGGAL PINJAM :</td> <td><input type="date" name="TANGGALPINJAM" ></td>
            </tr>
            <tr>
           <td>JAM MULAI :</td>  <td><input type="text" name="JAMMULAI" ></td>
            </tr>
           <tr>
          <td> JAM SELESAI :</td> <td><input type="text" name="JAMSELESAI" ></td>
            </tr>
            <tr>
          <td> <button type="submit" name="submit">Kirim</button></td> 
            </tr>
            </table>
        </form>
    </div>
</body>
</html>