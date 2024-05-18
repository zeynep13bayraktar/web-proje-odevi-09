<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style3.css">
    <script src="bootstrap.js"></script>
    <title>Aloni</title>
</head>

<body>
    <div class="ust-kisim">

        <nav class="navbar navbar-expand-lg nav-bg ">
            <!--style.css de ekli navbar-bg classımı buraya getirerek navbarımın arka planının rengini ayarladım-->
            <div class="container p-0">
                <!--"p-0", 992px ve altına inince ekran genişliği, navbarımın üstündeki seçeneklere mause götürdüğümde oluşan mavimtırak arka planın sağ ve sola olan boşluklarını sıfırlar  -->
                <a class="navbar-brand" href="#">
                    <img class="img-fluid logo" src="pictures/resimler/logo2.png" alt="">
                    <!--sitemin logosunun ismi-->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item d-flex align-items-center p-2">
                            <!--p-2 ler burada ekran 992px ve daha küçükken aşağı doğru sıralanan navbar elemanlarımı bi tık sağa kaydırıp büyütmeme yarıyor-->
                            <a class="nav-link active" aria-current="page" href="hakkimizda.html">Hakkımda</a>
                            <span class="ayrac">|</span>
                            <!--navbar elemanlarım arasına ayraç ekleme-->
                        </li>
                        <li class="nav-item d-flex align-items-center p-2">
                            <a class="nav-link" href="ozgecmis.html">Özgeçmiş</a>
                            <span class="ayrac">|</span>
                        </li>
                        <li class="nav-item d-flex align-items-center p-2">
                            <a class="nav-link" href="sehrim.html">Şehrim</a>
                            <span class="ayrac">|</span>
                        </li>
                        <li class="nav-item d-flex align-items-center p-2">
                            <a class="nav-link" href="mirasimiz.html">Mirasımız</a>
                            <span class="ayrac">|</span>
                        </li>
                        <li class="nav-item d-flex align-items-center p-2">
                            <a class="nav-link" href="ilgialanlarim.html">İlgi alanlarım</a>
                            <span class="ayrac">|</span>
                        </li>
                        <li class="nav-item d-flex align-items-center p-2">
                            <a class="nav-link" href="iletisim.html">İletişim</a>
                            <span class="ayrac">|</span>
                        </li>
                        <li class="nav-item d-flex align-items-center p-2 right-links">
                            <a href="logout.php"><button class="btn">Çıkış yap</button></a>
                        </li>
                    </ul>
                </div>
        </nav>


        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex flex-column align-items-center justify-content-center ">
                    <!--d-flex ile logo ve yazımı yanyana aldı, flex-column ile alt alta getirdik-->
                    <img src="pictures/resimler/logo5.jpg" class="img-fluid ana-sayf-logo bosluk mb-4" alt="" />
                    <h1 class="display-2 text-center ana-yazi fw-bold shadow">ZEYNEP BAYRAKTAR</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid footer">
        <div class="row">
            <div class="col-md-12 sutun-footer d-flex flex-column justify-content-center align-items-center">
              <div class="class">
                    <i class="fa-brands fa-instagram fa-3x"></i>
                </div>
                <p>©copyright 2024 Tüm Hakları Saklıdır</p> 
                <p>Zeynep Bayraktar</p>
            </div>
        </div>
    </div>
</body>

</html>