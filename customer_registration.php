<?php
session_start();
if (isset($_SESSION["uid"])) {
    header("location:profile.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon" />
    <title>Modern Bag | Register</title>
    <?php
    include 'cssfile.php';
    ?>
</head>

<body>
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <header id="header">
        <!--header-->
        <div class="header_top navbar-fixed-top">
            <!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 ">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="index.php"><i class="fa fa-home"></i> Ladies Bag</a></li>
                                <li><a href="tel:+6283456789"><i class="fa fa-phone"></i> +6283456789 </a></li>
                                <li><a href="mailto:ahkk9866@gmail.com"><i class="fa fa-envelope"></i>
                                        ladiesbag@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                <li><a href=""><i class="fa fa-google-plus"></i></a></li>

                                <li class=""><a href="#" class="dropdown-toggle function_for_user"
                                        data-toggle="dropdown"><span
                                            class="glyphicon glyphicon-shopping-cart function_for_user_span"></span>
                                        Cart <span class="badge">0</span></a>
                                    <div class="dropdown-menu" style="width:500px; margin-left: -540px">
                                        <div class="panel panel-success">
                                            <div class="panel-heading">
                                                <div class="row">
                                                    <div class="col-md-3">Urutan Numerik</div>
                                                    <div class="col-md-3">Barang</div>
                                                    <div class="col-md-3">Nama Produk</div>
                                                    <div class="col-md-3">Harga</div>
                                                </div>
                                            </div>
                                            <div class="panel-body"></div>
                                            <div class="panel-footer"></div>
                                        </div>
                                    </div>

                                </li>
                                <li>&nbsp</li>
                                <li class="">
                                    <a href="#" class=" dropdown-toggle function_for_user" data-toggle="dropdown">
                                        <span class=" glyphicon glyphicon-user function_for_user_span"></span> Login
                                    </a>
                                    <ul class="dropdown-menu loginup">
                                        <div style="width:300px;">
                                            <div class="panel panel-primary">
                                                <h2 class="center">Login</h2>
                                                <div id="" class="panel-heading">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control" onclick="focus(this)"
                                                        placeholder="Email" id="email" required />
                                                    <label for="email">Password</label>
                                                    <input type="password" class="form-control" onclick="focus(this)"
                                                        placeholder="Kata Sandi" id="password" required />
                                                    <p><br /></p>
                                                    <h6><a class="register" href="customer_registration.php"><i>Daftar
                                                                akun baru</i></a></h6>
                                                    <input type="submit" class="btn btn-success" style="float:right;"
                                                        id="login" value="Login">
                                                </div>
                                                <div style="height: 65px;" class="panel-footer" id="e_msg"></div>
                                            </div>
                                        </div>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header_top-->

        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="row" style="
                         margin-top: 37px;
                         ">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="index.php"><img alt="" src="images/LOGO2.png"></a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-middle-->

        <div class="header-bottom">
            <!--header-bottom-->
            <div class="container">
                <div class="row menu">
                    <div class="col-sm-8">
                        <div class="navbar-header">
                            <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle"
                                type="button">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class=" mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li class="menuhover"><a href="index.php">Home</a></li>
                                <li class="menuhover"><a href="">HandBag</a></li>
                                <li class="menuhover"><a href="">Backpack</a></li>
                                <li class="menuhover"><a href="">Wallet</a></li>
                                <li class="menuhover"><a href="">Promosi</a></li>
                                <li class="menuhover"><a href="">Informasi</a></li>
                                <li class="menuhover"><a href="">Kontak</a></li>
                                <!--                                    <li class="menuhover"><a href="">Keranjang Belanja</a></li>-->
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <!--                            <div class="">
                                                            <input type="text" class="form-control" id="search" >
                                                        </div>
                                                        <div>
                                                            <input type="button" class="btn btn-primary" id="search_btn" value="Mencari">
                                                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div style="
                         position: fixed;
                         margin-top: -196px;
                         margin-left: 1125px;
                         z-index: 9999;" class="col-md-2 col-xs-2" id="signup_msg">
                    <!--                    Notification dialog box-->
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="panel" style="border-color: #f19fc5;
                             height: 690px;">
                        <div class="panel-heading">
                            <h2 class="center">Daftarkan Akun Baru
                            </h2>
                        </div>
                        <div class="panel-body">

                            <form method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="f_name">Nama</label>
                                        <input type="text" placeholder="Nama" id="f_name" name="f_name"
                                            class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="f_name">Nama Belakang</label>
                                        <input type="text" placeholder="Nama Belakang" id="l_name" name="l_name"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="email">Email</label>
                                        <input type="text" placeholder="Email" id="email" name="email"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="password">Kata Sandi</label>
                                        <input type="password" placeholder="Kata Sandi" id="password" name="password"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="repassword">Masukan Kembali Kata Sandi</label>
                                        <input type="password" placeholder="Masukan Kembali Kata Sandi" id="repassword"
                                            name="repassword" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="mobile">No Telfon</label>
                                        <input type="text" placeholder="No Telfon" id="mobile" name="mobile"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="address1">Alamat 1</label>
                                        <input type="text" placeholder="Alamat 1" id="address1" name="address1"
                                            class="form-control">
                                    </div>
                                    <p><br /></p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5 class="center">Dengan mendaftar, Anda menyetujui

                                                <a class="red" href="#popup1">
                                                    ketentuan penggunaan
                                                </a>
                                                Tas Modern
                                            </h5>
                                        </div>
                                    </div>
                                    <p><br /></p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input style="float:right;" value="Daftar" type="button" id="signup_button"
                                                name="signup_button" class="btn btn-success btn-lg">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
    </section>
    <footer id="footer">
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <aside>
                            <h1 class="picture_video_footer element_footer fadeIn">Video</h1>
                            <iframe class="video" width="260" height="163"
                                src="https://www.youtube.com/embed/ZDWmadQDIJM?start=9" frameborder="0" gesture="media"
                                allow="encrypted-media" allowfullscreen>
                            </iframe>
                        </aside>

                    </div>

                    <div class="col-sm-3">
                        <aside>
                            <h1 class="element_footer fadeIn">Danh mục</h1>
                            <ul class="category">
                                <li><a href="" class="category_boder black"><i class=""></i>Home</a></li>
                                <li><a href="" class="category_boder black"><i class=""></i>HandBag</a></li>
                                <li><a href="" class="category_boder black"><i class=""></i>Backpack</a></li>
                                <li><a href="" class="category_boder black"><i class=""></i>Wallet</a></li>
                                <li><a href="" class="category_boder black"><i class=""></i>Promosi</a></li>
                            </ul>
                        </aside>

                    </div>

                    <div class="col-sm-3">
                        <aside>
                            <h1 class="infor_footer element_footer"> Chúng tôi</h1>
                            <a>
                                <img class="logo_footer" alt="" src="images/logo_footer.png">
                            </a>
                        </aside>
                    </div>

                    <div class="col-sm-3">
                        <aside>
                            <h1 class="contact_footer element_footer">Liên hệ</h1>
                            <address>
                                <h4 class="center test font_thuphap">Modern Bag</h4>
                                <br>
                                99 Tô Hiến Thành, Sơn Trà, TP Đà Nẵng
                                Điện thoại liên hệ:
                                <h5><a class="phone black" href="tel:0904765341">Mr.Cư: 0904765341</a></h5>
                                <h5><a class="phone black" href="tel:01664328986">Ms.Linh: 01664328986</a></h5>
                            </address>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <div style="text-align: center; font-size: x-small">

        </div>
    </footer>

    <div id="popup1" class="overlay">
        <div class="popup">
            <h2>Ketentuan penggunaan</h2>
            <img border="0" src="images/LOGO2.png" width="200" height="40" alt="logo">
            <br>
            <a class="close" href="#" style="
                   margin-top: 66px;
                   margin-right: 73px;
                   ">&times;</a>
            <div style="overflow:auto;" class="content">

                <table border="0" width="100%" cellspacing="0" id="table1">
                    <tbody>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td bgcolor="">
                            </td>
                        </tr>
                        <tr bgcolor="#EAEAEA">
                            <td><b>Ketentuan penggunaan</b></td>
                        </tr>
                        <tr bgcolor="#EAEAEA">
                            <td>
                                1. Tentang akun pengguna: Saat mendaftar akun, Anda harus memberikan informasi lengkap
                                tentang nama lengkap Anda, nama login, email,... Ini bukan informasi wajib, tetapi bila
                                tersedia Untuk risiko dan kerugian di masa depan, kami hanya akan menerima kasus di mana
                                informasi di atas diisi dengan benar dan lengkap. Kasus hilangnya informasi atau
                                informasi palsu tidak akan terselesaikan. Informasi ini akan digunakan sebagai dasar
                                untuk mendukung resolusi. Jika Anda memberikan informasi apa pun yang tidak benar atau
                                tidak akurat, atau jika kami memiliki alasan untuk mencurigai bahwa informasi tersebut
                                tidak benar atau tidak akurat, kami berhak untuk menangguhkan sementara waktu untuk
                                memverifikasi atau menghentikan penggunaan Akun Anda dan menolak semua penggunaan saat
                                ini atau di masa mendatang. Layanan (atau bagian apa pun darinya) tanpa tanggung jawab
                                apa pun untuk Anda.
                                <br>
                                2. Kata sandi akun: Di bagian manajemen akun, untuk sebuah akun, pengguna akan memiliki
                                kata sandi. Kata sandi yang digunakan untuk login ke Modern Bag. Jika pengguna lupa kata
                                sandinya, mereka dapat menggunakan emailnya untuk mengambil kata sandinya. Pengguna
                                bertanggung jawab untuk melindungi kata sandi dan email mereka sendiri. Jika kata sandi
                                atau email diungkapkan dengan cara apa pun, Modern Bag tidak akan bertanggung jawab atas
                                segala kerugian yang timbul.<br>
                                3. Item: Dengan satu akun, Anda bisa membeli banyak produk. Jika ingin dalam jumlah
                                banyak, Anda dapat menghubungi kami melalui email ladiesbag@gmail.com.
                                .<br>
                                4. Sama sekali tidak menggunakan program, alat, atau bentuk apa pun yang mengganggu
                                situs web atau mengubah struktur situs web (hack, cheat, bot...). Pelanggaran apa pun
                                yang ditemukan akan ditangani sesuai ketentuan hukum
                                .<br>
                                5. ilarang keras mendistribusikan, menyebarkan, atau mendorong aktivitas apa pun yang
                                mengganggu, menyabotase, atau menyusup ke data layanan serta sistem server.
                                <br>
                                6. Apabila Anda menemukan kesalahan pada website, mohon memberitahukan kami melalui
                                email ladiesbag@gmail.com.
                                <br>
                                7. Dilarang melakukan tindakan login secara ilegal atau mencoba login secara ilegal yang
                                dapat menyebabkan kerusakan pada sistem server layanan. Semua tindakan tersebut dianggap
                                sebagai tindakan perusakan milik orang lain dan akan menghilangkan semua hak penggunanya
                                dan akan dituntut secara hukum jika diperlukan.
                                <br>
                                8.Tidak menerima pembelian barang atau rekening layanan dengan uang sungguhan atau
                                natura baik di dalam maupun di luar website. Jika pengguna melanggar ketentuan ini, kami
                                tidak bertanggung jawab untuk memulihkan barang atau jasa. Selain itu, jika kami
                                mendeteksi akun yang melanggar, kami akan mengunci akun tersebut secara permanen.<br>
                                9. Saat berkomunikasi dengan pengguna lain, Anda tidak boleh melecehkan, mengutuk,
                                mengganggu, atau terlibat dalam perilaku tidak etis terhadap pemain lain.<br>
                                10. Dilarang keras menghina atau mengejek orang lain dalam bentuk apapun (mengolok-olok,
                                meremehkan, mendiskriminasi agama, gender, suku, dan lain-lain).<br>
                                11. Melarang sepenuhnya segala tindakan peniruan identitas atau dengan sengaja membuat
                                orang lain salah mengira Anda sebagai pengguna lain dalam sistem. Pelanggaran apa pun
                                akan ditangani atau akun dicabut.<br>
                                12. Tas Modern - kami tidak akan bertanggung jawab atas masalah sistem apa pun saat Anda
                                menginstal dan menggunakan layanan ini.<br>
                                13. Ketika mendeteksi pelanggaran seperti penggunaan cheat, hacks, atau kesalaha
                                lainnya, Modern Bag berhak menggunakan informasi yang Anda berikan saat mendaftar akun
                                untuk mentransfernya ke pihak yang berwenang untuk diselesaikan sesuai peraturan
                                hukum.<br>
                                14. Jika terjadi force majeure seperti korsleting listrik, kerusakan perangkat keras
                                atau perangkat lunak, atau bencana alam, dll. Pengguna harus menerima segala kerusakan,
                                jika ada.<br>
                                15. Tas Modern mempunyai hak penuh untuk menghapus, memperbaiki atau mengubah data dan
                                informasi akun apabila orang tersebut melanggar peraturan di atas tanpa persetujuan
                                pengguna.<br>
                                16. Melarang secara mutlak segala tindakan propaganda, sabotase, dan distorsi terhadap
                                pemerintahan, lembaga politik, dan kebijakan negara... Jika terdeteksi, akun tersebut
                                tidak hanya akan dihapus, tetapi kami juga akan memberikan informasi orang tersebut
                                kepada pihak yang berwenang untuk mengambil tindakan hukum.<br>
                            </td>
                        </tr>
                        <tr>
                            <td bgcolor="#f19fc5">
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size: x-small">
                                Bản quyền thuộc về Modern Bag.<br>
                                Giấy phép ICP số 89/GP-TTĐT-STTTT, CV cung cấp MXH-DV số 1477/STTTT-TTĐT, cấp ngày
                                06/06/2024<br>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="js/jquery2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="main.js"></script>

    <script src="js/jquery.js"></script>
    <script src="js/functions.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <!--   <script src="assets/js/bootstrap.min.js"></script>     -->
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.li-scroller.1.0.js"></script>
    <script src="assets/js/jquery.newsTicker.min.js"></script>
    <script src="assets/js/jquery.fancybox.pack.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/preloader.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/slider.min.js"></script>
    <script type="text/javascript">
    function Focus(object) {
        object.value = "Test";
    }

    function Blur(object) {
        if (object.value == "")
            object.value = "Nhap tu khoa";
    }
    </script>
</body>

</html>