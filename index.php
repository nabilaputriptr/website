    <?php 
    if(isset($_POST["submit"])){
        //seleksi
        if($_POST["nama"]=="admin" && $_POST["password"]=="123"){
            //loncat
            header("Location:tambah.php");
            exit;
        }else{
            $error=true;
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEMINJAMAN LAB UPT KOMPUTER</title>
	

    <!--vendor css ================================================== -->
    <link rel="stylesheet" type="text/css" href="css/vendor.css">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!--Bootstrap ================================================== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

    <!-- Style Sheet ================================================== -->
    <link rel="stylesheet" type="text/css" href="styles.css">

    <!-- Google Fonts ================================================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,700;1,300&family=Roboto:wght@300;400;700&display=swap"
        rel="stylesheet">


    <!-- script ================================================== -->
    <script src="js/modernizr.js"></script>
	

</head>

<body data-bs-spy="scroll" data-bs-target="#header-nav" tabindex="0">

    <nav class="navbar navbar-expand-lg bg-white navbar-light container-fluid py-3 position-fixed ">
        <div class="container">
          <a class="navbar-brand" href="index.php"><img src="images/upt.komputer.1.png" alt="logo" ></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
          </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav align-items-center justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link text-uppercase  active px-3" aria-current="page"
                                href="index.php">home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase  active px-3" href="#services">Schedule</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase  px-3" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase  px-3" href="#blog">Contact</a>
                        </li>
                       
                        
                    
                    </ul>

                    <div class="d-flex mt-5 mt-lg-0 ps-lg-3 align-items-center justify-content-center ">
                        <ul class="navbar-nav justify-content-end align-items-center">
                            <li class="nav-item">
                                <a class="nav-link px-3 phone-no" href="https://www.youtube.com/@xrpl_2_08nabilacahyaningpu8">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path
                                            d="M18.3274 22.5001C17.4124 22.5001 16.1271 22.1691 14.2024 21.0938C11.862 19.7813 10.0516 18.5696 7.72383 16.2479C5.47946 14.0049 4.38727 12.5527 2.85868 9.77115C1.1318 6.63052 1.42618  4.98427 1.75524 4.28068C2.14712 3.43974 2.72555 2.93677 3.47321 2.43755C3.89787 2.15932 4.34727 1.92081 4.81571 1.72505C4.86258 1.7049 4.90618 1.68568 4.94508 1.66833C5.17712 1.5638 5.52868 1.40583 5.97399 1.57458C6.27118 1.68615 6.53649 1.91443 6.9518 2.32458C7.80352 3.16458 8.96743 5.03537 9.3968 5.95412C9.68508 6.57333 9.87587 6.98208 9.87633 7.44052C9.87633 7.97724 9.60633 8.39115 9.27868 8.83787C9.21727 8.92177 9.15633 9.00193 9.09727 9.07974C8.74055 9.54849 8.66227 9.68396 8.71383 9.92583C8.81837 10.4119 9.5979 11.859 10.879 13.1372C12.1601 14.4155 13.5654 15.1458 14.0534 15.2499C14.3056 15.3038 14.4438 15.2222 14.9276 14.8529C14.997 14.7999 15.0682 14.7451 15.1427 14.6902C15.6424 14.3185 16.0371 14.0555 16.5612 14.0555H16.564C17.0201 14.0555 17.4106 14.2533 18.0574 14.5796C18.9012 15.0052 20.8282 16.1541 21.6734 17.0068C22.0845 17.4211 22.3137 17.6855 22.4257 17.9822C22.5945 18.429 22.4356 18.7791 22.332 19.0135C22.3146 19.0524 22.2954 19.0951 22.2752 19.1424C22.0779 19.61 21.838 20.0585 21.5585 20.4821C21.0602 21.2274 20.5554 21.8044 19.7126 22.1968C19.2798 22.4015 18.8062 22.5052 18.3274 22.5001Z"
                                            fill="#313131" />
                                    </svg>
                                   
                                </a>
                            </li>
                        </ul>
                     NABILA
                    </div>
                </div>
            </div>
      </div>
    </nav>

    <section id="hero" class="position-relative overflow-hidden py-4" style="background: url(images/bg-masthead.jpg);">
        <!-- <div class="pattern-overlay pattern-right position-absolute">
            <img src="images/pattern-hero.png" alt="pattern">
        </div> -->
        <div class="container py-5 mt-5">
            <div class="row align-items-center py-5 mt-5">
                <div class="col-md-6 mb-5 mb-md-0">
				<h6 class="text-white">UNIPMA</h6>
                    <h2 class="text-white fw-bold display-2">WELCOME TO WEBSITE UPT KOMPUTER</h2>
                    <ul class="list-unstyled">
                        <li class="text-white fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23"
                                fill="none">
                                <g clip-path="url(#clip0_1_359)">
                                    <path
                                        d="M11.5 0.359375C5.34719 0.359375 0.359375 5.34719 0.359375 11.5C0.359375 17.6528 5.34719 22.6406 11.5 22.6406C17.6528 22.6406 22.6406 17.6528 22.6406 11.5C22.6406 5.34719 17.6528 0.359375 11.5 0.359375ZM11.5 2.51562C16.4653 2.51562 20.4844 6.53393 20.4844 11.5C20.4844 16.4653 16.4661 20.4844 11.5 20.4844C6.5347 20.4844 2.51562 16.4661 2.51562 11.5C2.51562 6.5347 6.53393 2.51562 11.5 2.51562ZM17.7982 8.36746L16.7859 7.34693C16.5762 7.13557 16.2349 7.13418 16.0235 7.34387L9.67375 13.6426L6.98778 10.9349C6.77813 10.7235 6.43681 10.7221 6.22545 10.9318L5.20487 11.9441C4.99352 12.1538 4.99212 12.4951 5.20182 12.7065L9.27987 16.8176C9.48952 17.0289 9.83084 17.0303 10.0422 16.8206L17.7952 9.12983C18.0065 8.92014 18.0079 8.57882 17.7982 8.36746Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1_359">
                                        
                                    </clipPath>
                                </defs>
                            </svg>
      
                        </li>
                        <li class="text-white fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23"
                                fill="none">
                                <g clip-path="url(#clip0_1_359)">
                                    <path
                                        d="M11.5 0.359375C5.34719 0.359375 0.359375 5.34719 0.359375 11.5C0.359375 17.6528 5.34719 22.6406 11.5 22.6406C17.6528 22.6406 22.6406 17.6528 22.6406 11.5C22.6406 5.34719 17.6528 0.359375 11.5 0.359375ZM11.5 2.51562C16.4653 2.51562 20.4844 6.53393 20.4844 11.5C20.4844 16.4653 16.4661 20.4844 11.5 20.4844C6.5347 20.4844 2.51562 16.4661 2.51562 11.5C2.51562 6.5347 6.53393 2.51562 11.5 2.51562ZM17.7982 8.36746L16.7859 7.34693C16.5762 7.13557 16.2349 7.13418 16.0235 7.34387L9.67375 13.6426L6.98778 10.9349C6.77813 10.7235 6.43681 10.7221 6.22545 10.9318L5.20487 11.9441C4.99352 12.1538 4.99212 12.4951 5.20182 12.7065L9.27987 16.8176C9.48952 17.0289 9.83084 17.0303 10.0422 16.8206L17.7952 9.12983C18.0065 8.92014 18.0079 8.57882 17.7982 8.36746Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1_359">
                                        <rect width="23" height="23" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            
                        </li>
                        <li class="text-white fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23"
                                fill="none">
                                <g clip-path="url(#clip0_1_359)">
                                    <path
                                        d="M11.5 0.359375C5.34719 0.359375 0.359375 5.34719 0.359375 11.5C0.359375 17.6528 5.34719 22.6406 11.5 22.6406C17.6528 22.6406 22.6406 17.6528 22.6406 11.5C22.6406 5.34719 17.6528 0.359375 11.5 0.359375ZM11.5 2.51562C16.4653 2.51562 20.4844 6.53393 20.4844 11.5C20.4844 16.4653 16.4661 20.4844 11.5 20.4844C6.5347 20.4844 2.51562 16.4661 2.51562 11.5C2.51562 6.5347 6.53393 2.51562 11.5 2.51562ZM17.7982 8.36746L16.7859 7.34693C16.5762 7.13557 16.2349 7.13418 16.0235 7.34387L9.67375 13.6426L6.98778 10.9349C6.77813 10.7235 6.43681 10.7221 6.22545 10.9318L5.20487 11.9441C4.99352 12.1538 4.99212 12.4951 5.20182 12.7065L9.27987 16.8176C9.48952 17.0289 9.83084 17.0303 10.0422 16.8206L17.7952 9.12983C18.0065 8.92014 18.0079 8.57882 17.7982 8.36746Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1_359">
                                        <rect width="23" height="23" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                           
                        </li>
                    </ul>
                </div>
				<body>

	            
                <div class=" col-md-5 offset-md-1">
				<form action="" method="post">
                    <form class="hero-form p-5" >
					
                        <h3 class="text-white">LOGIN</h3>
                        <div class="mb-4">
                            <label for="" class="">Username</label>
                            <input type="" name="nama" id="text" class="form-control border-0" autocomplete="off" required >
                        </div>
                        <div class="mb-3">
                            <label for="" class="">Password</label>
							<input type="text" name="password" id="pw" class="form-control border-0" autocomplete="off" required >               
                        </div>
						<br>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg" name="submit">LOGIN</button>
					
                        </div>
                    </form>
            </div>
        </div>
    </section>

    <section id="testimonial" class=" position-relative  py-5">

        <div class="testimonial-pattern-overlay pattern-left position-absolute">
            <img src="images/pattern-testimonial.png" alt="pattern">
        </div>
        <div class="testimonial-pattern-overlay pattern-right position-absolute">
            <img src="images/right-pattern-testimonial.png" alt="pattern">
        </div>

        <div class="container py-5">
            <h6 class="text-white">ABOUT US</h6>
            <h2 class="text-white fw-bold display-4 mb-4">Prakerin UPT Komputer</h2>

            <div class="swiper testimonial-swiper mb-4">
                <div class="swiper-wrapper">
                    <div class="swiper-slide testimonial-content p-5">
                       
                        <div class="row">
                            <div class="col-md-3">
                                <img src="" alt="" class="">
                            </div>
                            <div class="col-md-9">
                               <h5> AFRIZA</h5>
							   <h5>PROJECT MANAGER</h5>
							   <p>Memiliki Tanggung Jawab atas perencanaan,pengadaan dan pelaksanaan proyek.</p>
                                <div class="d-flex">
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide testimonial-content p-5">
                        
                        <div class="row">
                            <div class="col-md-3">
                             
                            </div>
                            <div class="col-md-9">
                                <h5>ADIVA</h5>
								<h5>PROGRAMMER</h5>
								<p>bertugas merancang kode-kode pemrograman (mencoding).
                                <div class="d-flex">
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide testimonial-content p-5">
                       
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                                <h5>NOPI</h5>
								<h5>DATABASE</h5>
								<p>Bertugas menyimpan dan melindungi data dengan menggunakan software.
                                <div class="d-flex">
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide testimonial-content p-5">
                     
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                               <h5>YOVITA</h5>
							   <h5>DESAINER</h5>
							   <p>Bertugas mendesain website untuk menentukan tampilan 
							      website supaya terlihatmenarik untuk konsumen.</p>
                                <div class="d-flex">
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide testimonial-content p-5">
                      
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                               <h5>PIKA - NABILA</h5>
							   <H5>SYSTEM ANALIST</H5>
							   <p>Bertugas mengakomodasi kebutuhan apa saja yang dibutuhkan oleh
							      tim dalam pembuatan website, meneliti dan mengevaluasi sistem.</p>
                                <div class="d-flex">
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="swiper-pagination mb-5"></div>
        </div>

    </section>

    <section id="services" class="my-5 pt-5">
        <div class="container pt-5">
            <h6 class="">jadwal</h6>
            <h2 class=" fw-bold display-4 mb-4">SCHEDULE</h2>
            <div class="row">
                <div class=" mt-4 col-md-6 col-lg-3">
                </div>

<?php 
 require "funcion.php";
 $database = query('SELECT * FROM lab');
 
if(isset($_POST["keyword"])){
    $database=cari($_POST["keyword"]);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
        body{
            background-color:white;
        }
        .data{
            position: relative;
            left: 48px;
        }
        .container table{
            margin: auto;
        }
        .mahok a{
            color: black;
        }.thead{
            background-color: black;
            color: white;
        }
		table th,
		table td{
		border: 1px solid #000000;
		padding: 7px 17 px;
		}
    </style>
</head>
<body>

       
    </form>
    </div>
    <br>
    <div class="container">
        <table border="1" cellpadding="10" cellspacing="0">
            <thead class="thead">
                <tr>
                    <th>ID</th>
                    
                    <th>PRODI</th>
                    <th>RUANG LAB</th>
                    <th>HARI</th>
                    <th>TANGGAL PINJAM</th>
                    <th>JAM MULAI</th>
                    <th>JAM SELESAI</th>
                  
                </tr>
            </thead>
            <tbody>
                <?php $i=1; ?>
                <?php foreach($database as $dts) :?>
                 <tr>
                    <td><?php echo $i ?></td>
               
                <td><?php echo $dts["PRODI"] ?></td>
                <td><?php echo $dts["RUANG LAB"] ?></td>
                <td><?php echo $dts["HARI"] ?></td>
                <td><?php echo $dts["TANGGAL PINJAM"] ?></td>
                <td><?php echo $dts["JAM MULAI"] ?></td>
                <td><?php echo $dts["JAM SELESAI"] ?></td>
              
                </tr>
          
                <?php $i++; ?>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</body>
</html>
            </div>
        </div>
    </section>
<br>
<br>
<br>
<br>
<br>
    <section id="about">
        <div class="container py-5">
            <div class="row align-items-center py-5">
                <div class=" col-md-6 ps-md-5"><img src="images/tentang.jpeg" alt="image" width="525" height="364" class="img-fluid"></div>
                <div class="col-md-6 px-4 py-5">
                    <h6 class="">tentang kami</h6>
                    <h2 class=" fw-bold display-4 mb-3">ABOUT US</h2>
                    <p class="">Kami merupakan siswa-siswi dari SMKN 1 mejayan yang saat ini sedang menjalankan prakerin di Unipma(Universitas PGRI Madiun), tepatnya di UPT komputer.
                        <br>
                        <br>
                    Dimulai pada tanggal 17 Juli 2023 sampai dengan 17 Desember 2023. Oleh 6 Anak siswa-siswi, 2 laki-laki dan 4 perempuan.</p>
                 
                </div>
            </div>
        </div>
    </section>

    <section id="projects">

        <div class="container-fluid my-5 pt-5 p-0 ">
            <h6 class="text-center text-white mt-5">Prototipe</h6>
            <h2 class="text-center text-white fw-bold display-4 mb-5">Prakerin UPT KOMPUTER</h2>
            <div class="mb-4">
                <p class="text-center">
                    <button class="filter-button px-3 me-2 mb-3 active" data-filter="*">All</button>
                    <button class="filter-button px-3 me-2 mb-3" data-filter=".roof">MEMPERBAIKI PC</button>
                    <button class="filter-button px-3 me-2 mb-3" data-filter=".install">MEMBUAT WEBSITE</button>
					<button class="filter-button px-3 me-2 mb-3" data-filter=".windows">INSTALL WINDOWS 10</button>
					<button class="filter-button px-3 me-2 mb-3" data-filter=".lab">LAB KOMPUTER</button>
                </p>
            </div>

            <div class="isotope-container">
                <div class="col-md-2 item install">
                    <a href="#"><img src="images/pt3.jpeg" alt="image" width="475" height="285" class="img-fluid"></a>
                    <div class="">
                    </div>
              </div>
				
                <div class="col-md-2 item install">
                    <a href="#"><img src="images/pt4.jpeg" alt="image" width="479" height="276" class="img-fluid"></a>
                    <div class="">
                    </div>
              </div>
				
                <div class="col-md-2 item roof">
                    <a href="#"><img src="images/pt6.jpeg" alt="image" width="481" height="277" class="img-fluid"></a>
                    <div class="">
                    </div>
              </div>
				
                <div class="col-md-2 item roof">
                    <a href="#"><img src="images/pt7.jpeg" alt="image" class="img-fluid"></a>
                    <div class="">
                    </div>
                </div>
				
                <div class="col-md-2 item windows">
                    <a href="#"><img src="images/pt5.jpeg" alt="image" class="img-fluid"></a>
                    <div class="">
                    </div>
                </div>
				
                <div class="col-md-2 item lab">
                    <a href="#"><img src="images/pt2.jpeg" alt="image" class="img-fluid"></a>
                    <div class="">
                    </div>
                </div>

            </div>
        </div>

    </section>

    <section id="process">
        <div class="container my-5 py-5">
            <div class="row process-components my-5">
                <div class="d-flex flex-wrap justify-content-between">

                    <div class="col text-center px-4 my-5">
                        <iconify-icon class="process-icon mb-2" icon="mdi:phone-outline"></iconify-icon>
						<h5 class="process-heading">UNIPMA</h5>
                        <h5 class="process-heading">0351-462986</h5>
                    </div>
                    <div class="col text-center px-4 my-5">
                        <iconify-icon class="process-icon mb-2" icon="mdi:phone-outline"></iconify-icon>
						<h5 class="process-heading">UPT KOMPUTER</h5>
                        <h5 class="process-heading">+62 813-3138-9761</h5>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <section id="faq">

        <div class="container my-5 pb-5 ">
            <h6 class="text-center">Frequently asked questions</h6>
            <h2 class="text-center fw-bold display-4 mb-5">We’ve got answers</h2>

            <div class="accordion col-md-8 offset-md-2" id="accordionPanelsStayOpenExample">

                <div class="accordion-item mt-3">
                    <h5 class="accordion-header border-0" id="panelsStayOpen-headingOne">
                        <button class="accordion-button fs-5" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapseOne">
                            Upt Komputer terletak dimana ?
                        </button>
                    </h5>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            <p>Kampus 1 lantai 3 Universitas PGRI Madiun, Jln. Setia Budi No 85, Madiun, Jawa Timur.Indonesia</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item mt-3">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseTwo">
                            Website Upt Komputer ?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body">
                            <p>uptkomputer.@unipma.ac.id dan www.uptkom-unipma.com</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item mt-3">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                        <button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseThree">
                             APA SAJA PERATURAN PEMINJAMAN LAB UPT KOMPUTER ?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body">
                            <p>1. Lab. Komputer merupakan sarana praktikkum mahasiswa universitas PGRI Madiun </p>
<P>2. Mahasiswa wajib menjaga kebersihan Lab Komputer disetiap ruang</p>
<P>3. Mahasiswa wajib menunjukkan Kartu Tanda Mahasiswa (KTM) kepada asisten Lab, ketika memasuki Lab. Komputer.</p>
<P>4. Hanya mahasiswa berstatus aktif perkuliahan yang dapat menggunakan Lab Komputer</p>
<P>5. Bersikap sopan di dalam ruangan Lab. Komputer dan bertoleransi terhadap pengguna yang lain, tidak berbicara terlalu keras, bergurau, duduk diatas meja dan sebagainya.</P> <P>6. Dilarang makan minum ataupun merokok di dalam Lab. Komputer.</P>
<p>7. Melakukan scanning AntiVirus terhadap flashdisk yang akan digunakan sebelum menggunakan komputer.</p>
<p>8. Dilarang memperbaiki sendiri perangkat komputer dan peralatannya. Jika terjadi kerusakan atau masalah pada perangkat komputer tersebut, harap lapor kepada sistem Lab. Komputer atau petugas Lab. Komputer.</p>
<p>9 Dilarang memindahkan atau memodifikasi konfigurasi perangkat komputer, software atau peripheral lain tanpa seizin asisten Lab. Komputer atau petugas Lab. Komputer </p>
<p>10. Memperlakukan fasilitas peralatan Lab. Komputer dengan baik dan dilarang merusak/mengambil segel/barcode yang ada.
 </p>
                        </div>
                    </div>
                </div>

               
            </div>

        </div>
    </section>

    <section id="blog" class="my-5 ">
        <div class="container py-5">
            <div class="row align-items-center ">
                <div class="col-md-6 col-lg-3">
                    <div class="mb-10">
                        <h2 class=" fw-bold display-15 mb-10">Management UPT Komputer</h2>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="mb-3">
                      <a href="#"><img src="images/netral.png" alt="image" width="283" height="281" class="img-fluid"></a>
                      <h6 class="my-3">Kepala UPT Komputer</h6>
                        <a href="#" class="text-decoration-none">
                            <h5 class="mb-3">Andria M.Kom</h5>
                        </a>
                        
                        </p>
                        

                  </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="mb-3">
                        <a href="#"><img src="images/netral.png" alt="image" width="280" height="265" class="img-fluid"></a>
                        <h6 class="my-3">Staff UPT Komputer</h6>
                        <a href="#" class="text-decoration-none">
                            <h5 class="mb-3">Fajar S, S.Kom</h5>
                        </a>
                       
                        </p>
                       

                  </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="mb-3">
                      <a href="#"><img src="images/netral.png" alt="image" width="282" height="260" class="img-fluid"></a>
                      <h6 class="my-3">Staff UPT Komputer</h6>
                        <a href="#" class="text-decoration-none">
                            <h5 class="mb-3">Arjun Dwi Bastian</h5>
                        </a>
                        
                        </p>
                       

                  </div>
                </div>


            </div>
        </div>
    </section>

    <section id="cta" class="position-relative my-5">
        <div class="cta-pattern-overlay pattern-left position-absolute top-50 start-0 translate-middle-y">
            <img src="images/cta-pattern.png" alt="pattern">
        </div>
        <div class="container my-5 py-5">
            <div class="row align-items-center my-5">
                <div class="col-md-6 offset-md-2">
                    <h6 class="text-white">UNIPMA</h6>
                    <h2 class="text-white fw-bold display-4">SMART AND COMPETITIVE</h2>
                </div>
                
            </div>
        </div>
    </section>

    <section id="footer">
        <div class="container footer-container mt-5 pt-3">
            <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 my-5 py-5 ">

                <div class=" col-md-4 mt-5 mt-md-0 ">
                    <p class="">MEDSOS UNIPMA</p>
                    <div class="d-flex align-items-center ">
                        <a href="https://www.facebook.com/unipma" target="_blank"><iconify-icon class="social-link-icon active pe-4"
                                icon="mdi:facebook"></iconify-icon></a>
                        <a href="https://youtube.com/@unipma?si=lqijXS8ktDFIM51M" target="_blank"><iconify-icon class="social-link-icon pe-4"
                                icon="mdi:youtube"></iconify-icon></a>
                        <a href="https://instagram.com/official_unipma?igshid=MzRIODBiNWFIZA==" target="_blank"><iconify-icon class="social-link-icon pe-4"
                                icon="mdi:instagram"></iconify-icon></a>
                        
                    </div>

                </div>

               
                <div class="col-md-3 ">
                    <h5 class="py-3">Contact Info</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item d-flex mb-3">
                            <iconify-icon class="contact-icon pe-3" icon="ion:location"></iconify-icon>
                            <a href="#" class="nav-link p-0 ">UPT KOMPUTER </a>
                        </li>
                        <li class="nav-item d-flex mb-3">
                            <iconify-icon class="contact-icon pe-3" icon="ion:call"></iconify-icon><a href="#"
                                class="nav-link p-0 ">+62 813-3138-9761</a>
                        </li>
                        <li class="nav-item d-flex mb-3">
                            <iconify-icon class="contact-icon pe-3" icon="ion:mail"></iconify-icon><a href="#"
                                class="nav-link p-0 "> uptkomputer@unipma.ac.id</a>
                        </li>

                    </ul>
                </div>



            </footer>
        </div>



        <footer class="d-flex flex-wrap justify-content-between align-items-center border-top"></footer>

        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-2 pt-4">
                <div class="col-md-6 d-flex align-items-center">
                    <p>© 2023 REKAYASA PERANGKAT LUNAK</p>

                </div>
                <div class="col-md-6 d-flex align-items-center justify-content-end">
                  <p class="">© 2023<a href="" class="website-link"
                            target="_blank"> <b><u>Prakerin UPT KOMPUTER</u></b></a> <br> 
                    Distributed By: <a href="https://themewagon.com"><b><u>Nabila Cahyaning Putri</b></a></p>
                </div>

            </footer>
        </div>
    </section>

    <!-- script ================================================== -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>


</body>

</html>