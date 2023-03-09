<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>personal profile</title>
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" media="screen and (max-width:800px)" href="tablet.css">
    <link rel="stylesheet" media="screen and (max-width:530px)" href="phone.css">
</head>
<body>
    <nav class="navbar">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#hobi">My Hobi</a></li>
            <li><a href="#contact">Contact Me</a></li>
        </ul>
    </nav>
    <section id="home">
        <div class="main">
            <h1 class="heading">Perkenalkan Saya <br> MUHAMMAD FIQRI FIRMANSYAH <br> XI PPLG</h1>
            <button class="btn">
                Cek Disini
            </button>
        </div>
    </section>
    <section id="about">
        <h1 class="headings">ABOUT ME</h1>
        <div id="pic">
            <img src="foto3.jpg" alt="">
            <div id="intro">
                <h2>M FIQRI FIRMANSYAH</h2>
                <P>Saya adalah seorang laki-laki yang lahir pada tanggal 30 oktober 2005, nama lengkap MUHAMMAD FIQRI FIRMANSYAH. Lahir di karawang saya tinggal di jl.pawarengan, Kec.Cikampek, Kab. Karawang, Jawa Barat 41373. Saya menamatkan sekolah dasar di MI Arruhaniyah dan melanjutkan jenjang ke Pondok Pesantren Daarul Huda Banjar selama 3 tahun lalu memasuki jenjang Sekolah Menengah Kejuruan di SMK TI Muhammadiyah 1 Cikampek dan mengambil jurusan Rekayasa Perangkat Lunak</P>
            </div>
        </div>
    </section>
    <section id="portfolio">
        <h1 class="headings">PORTFOLIO</h1>
        <div class="gallery">
            <img src="pic.jpg" alt="">
            <img src="pic2.jpg" alt="">
            <img src="pic3.jpg" alt="">
            <img src="pic4.jpg" alt="">
            <img src="pic5.jpg" alt="">
            <img src="pic6.jpg" alt="">
        </div>
    </section>
    <section id="hobi">
        <h1 class="headings">My Hobi</h1>
        <div class="row">
            <div class="box">
                <img src="logo4.png" alt="">
                <h1 class="headings">Olahraga <br> Gym</h1>
                <p>Saya suka olahraga karena ingin membentuk tubuh yang bagus dan bisa menjadi pelindung bagi orang terdekat saya, dan juga saya tidak ingin menjadi orang yang mati di awal perang, saya memotivasikan diri saya seperti "lebih banyak kau keluar keringat sekarang, lebih sedikit kau mengeluarkan darah kelak".</p>
            </div>
            <div class="box">
                <img src="logo5.png" alt="">
                <h1 class="headings">Musik</h1>
                <p>saya suka musik karena saya suka lantunan melodi dari alat musik yang dipegangi oleh ahlinya seperti pianis,violinis,drummer dan gitaris. setiap mendengar lantunan melodi itu seakan melihat sesuatu yang baru di dalam fikiran saya.</p>
            </div>
            <div class="box">
                <img src="logo3.jpg" alt="">
                <h1 class="headings">games</h1>
                <p>saya suka bermain gim untuk melepas stress dari masalah-masalah yang ada sebaimana seperti pelampiasan, dikarenakan bermain game untuk bersenang-senang kan. jadi bermain game itu seperti melupakan sesaat tugas yang kita emban.</p>
            </div>
        </div>
    </section>
    <section id="contact">
        <h1 class="headings">CONTACT</h1>
        <form action="" class="form">
            <input type="text" name="name" class="input" placeholder="Masukkan Nama">
            <input type="email" name="name" class="input" placeholder="Masukkan Email">
            <textarea name="msg" id="msg" cols="30" rows="10" placeholder="Masukkan Pesan"></textarea>
            <input type="submit" value="KIRIM" id="kirim">
            <a href="login.php">log out</a>
        </form>
    </section>
</body>
</html>