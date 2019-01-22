<!DOCTYPE html>
<html lang="en">
<head>
    <title>Beranda</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/style.css">
</head>
<body style="background: linear-gradient(135deg, #325adf 0%, #e7530f 100%);">
<header class="ob">
    <div class="atas">
        <div id="logo"><img style="width: 127px; margin-left: 40px; float: left;" src="<?=base_url() ?>assets/ngkrun.png" alt=""></div>
        <nav>
            <ul>
                <li><a href="<?=base_url()?>index.php/welcome/utama"> Home </a></li>
                <li><a href="<?=base_url()?>index.php/welcome/event"> Event </a></li>
                <li><a href="<?=base_url()?>index.php/welcome/gallery"> Gallery </a></li>
                <li><a href="<?=base_url()?>index.php/welcome/contact"> Contact </a></li>
                <li><a href="<?=base_url()?>index.php/welcome/profil"> MyProfil</a></li>
            </ul>
        </nav>
    </div>
</header>
<h1 align="center" style="color:skyblue; text-align: left; font-size: 10.3mm;
    margin-top: 97px; margin-left: 12px; font-family: sans-serif;">Selamat Datang <?=$nama_lengkap?> <br> Berperilakulah Seperti <?= $jenis_kelamin?></h1>
<p style="font-size: 18px; margin-left: 56px; margin-top: 39px;">Jadilah perempuan yang dewasa pemikirannya, baik attitudenya, terpuji akhlaknya.
       Sudah bertahan, jadi jangan menyerah.</p>
<img style="width: 823px; margin-left: 518px; margin-top: -312px;}" src="<?=base_url() ?>assets/back.png" alt="">
</body>
</html>