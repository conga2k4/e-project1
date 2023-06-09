<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Garden World</title>
    <!-- Title Logo -->
    <link rel="shortcut icon" type="image/ico" href="/favicon.ico" />
    <!-- Bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" /> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <link rel="stylesheet" href="../../Lib/css/bootstrap.min.css"> -->
    <!-- Icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="../../Config/css/style.css">
    <link rel="stylesheet" type="text/css" href="/e-project1/Config/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../Config/css/title.css">
    <link rel="stylesheet" type="text/css" href="../../Config/css/chitietbaiviet.css">
    <link rel="stylesheet" type="text/css" href="../../Config/css/trangtonghop.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <style>
        

        
    </style>
</head>


<body class="bg-light-subtle">
    <!-- Navbar -->
    <div id="header">
        <a class="navbar-brand logo2 bg-body-tertiary me-lg-5" href="HomePage.php" style="color: rgb(20, 162, 29)">
            <span class="ms-lg-5" style="font-weight:bold;">
                <ion-icon name="leaf-outline" class="ms-lg-5"></ion-icon>𝔾𝕒𝕣𝕕𝕖𝕟𝕎𝕠𝕣𝕝𝕕
            </span>
        </a>
        <nav class="navbar navbar-expand-lg bg-body-tertiary d-flex" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand logo1 me-lg-5" href="HomePage.php" style="color: rgb(20, 162, 29)">
                    <span class="ms-lg-5" style="font-weight:bold;">
                        <ion-icon name="leaf-outline" class="ms-lg-5"></ion-icon>𝔾𝕒𝕣𝕕𝕖𝕟𝕎𝕠𝕣𝕝𝕕
                    </span>
                </a>
                <div class="nav navbar-nav searchSm">
                    <form class="nav-item input-group" action="search.php" method="post">
                        <input type="text" aria-describedby="basic-addon2" name="search2" id="search2" class="search2" placeholder="Search">
                        <span type="submit" onclick="getfocus()" class="input-group-text me-2" id="basic-addon2" style="background-color: rgb(20, 162, 29);"><ion-icon name="search-outline"></ion-icon></span>
                    </form>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0 flex-wrap ms-auto me-auto ">
                        <li class="nav-item ms-4">
                            <a class="nav-link active" aria-current="page" href="HomePage.php">
                                Home</a>
                        </li>
                        <li class="nav-item ms-4 dropdown">
                            <!-- <a href="KyThuat.php" class="nav-link active">
                            Kiến thức
                        </a> -->
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Knowledge
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="KienThucCoBan.php">Basic Knowledge</a></li>
                                <li><a class="dropdown-item" href="KyThuat.php">Tips and Tricks</a></li>
                            </ul>
                        </li>
                        <li class="nav-item ms-4 dropdown">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Garden Design
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="LuaChonSanPham.php">Garden design</a></li>
                                <li><a class="dropdown-item" href="PhuKien.php">Accessory</a></li>
                            </ul>
                        </li>
                        <li class="nav-item ms-4 dropdown">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Tool
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="CongCu.php">Device</a></li>
                                <li><a class="dropdown-item" href="DatvaPhanBon.php">Soil and Fertilizer</a></li>
                                <li><a class="dropdown-item" href="ThuocTruSau.php">Pesticides</a></li>
                                <li><a class="dropdown-item" href="HatGiong.php">Seeds</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="nav navbar-nav  me-auto searchLg">
                        <form class="nav-item input-group" action="search.php" method="post">
                            <input type="text" aria-describedby="basic-addon1" name="search" id="search" class="search" placeholder="Search" style="width:200px;">
                            <span type="submit  " onclick="getfocus()" class="input-group-text me-2" id="basic-addon1" style="background-color: rgb(20, 162, 29);"><ion-icon name="search-outline"></ion-icon></span>
                        </form>
                    </div>
                    <!-- <div class="nav navbar-nav me-auto ms-1">
                    <div class="nav-item ms-2 mt-2 dropdown">
                        <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <ion-icon name="people-outline" style="font-size: 30px"></ion-icon>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Login</a></li>
                            <li><a class="dropdown-item" href="#">Signup</a></li>
                        </ul>
                    </div>
                </div>
            -->
                </div>
            </div>
        </nav>
    </div>
    <script>
        window.onscroll = function() {
            myFunction()
        };

        var header = document.getElementById("navbar");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
    </script>
    <script>
        function getfocus() {
            document.getElementById("search").focus();
            document.getElementById("search2").focus();
        }
    </script>
    <script type= "text/javascript">
        $(document).on('click','ul','li','a', function(){
            $(this).addClass('active').siblings().removeClass('active')
        })
    </script>