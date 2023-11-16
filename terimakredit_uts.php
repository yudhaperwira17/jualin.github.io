<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Bagas Ferdianto Saputra V3422014">
  <meta name="generator" content="Hugo 0.108.0">
  <title>Hasil Perhitungan</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/product/">





  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  
    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
    .center {
            text-align: center;
            margin-top: 50px;
        }

    .btn {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }
  </style>


  <!-- Custom styles for this template -->
  <link href="product.css" rel="stylesheet">
</head>

<body>

  <header class="site-header sticky-top py-1">
    <nav class="container d-flex flex-column flex-md-row justify-content-between">
      <a class="py-2" href="#" aria-label="Product">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor"
          stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img"
          viewBox="0 0 24 24">
          <title>Product</title>
          <circle cx="12" cy="12" r="10" />
          <path
            d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94" />
        </svg>
      </a>
      <a class="py-2 d-none d-md-inline-block" href="index.php">Home Gadget Store</a>
      <a class="py-2 d-none d-md-inline-block" href="forminput_uts.php">Input Kredit Iphone</a>
      <a class="py-2 d-none d-md-inline-block" href="tabelkatalog.php">Katalog Produk</a>
      <a class="py-2 d-none d-md-inline-block" href="cekuser.php">Registrasi</a>
      <a class="py-2 d-none d-md-inline-block" href="login.php">Login</a>
    </nav>
  </header>
    <p></p>
  <main>
    <p></p>
  <h2 align="center">Hasil Perhitungan Kredit Iphone 25 PRO MAX Anda</h2>
  <!-- PHP -->
  <?php
    //mendefinisikan variabel dari forminput_uts
    $nama = $_POST['nama'];
    $nohp = $_POST['nohp'];
    $email = $_POST['email'];
    $date = $_POST['tanggal'];
    $address = $_POST['alamat'];
    $harga = $_POST['harga'];
    $uang_muka = $_POST['uang_muka'];
    $waktu = $_POST['waktu'];
    $bayar = $_POST['bayar'];

    // Percabangan untuk menentukan bunga
   if ($waktu >= 2) {
    $bunga = 10; // Bunga 10% per tahun jika waktu >=2 tahun
    } else {
  $bunga = 5; // Bunga 5% per tahun jika tenor < 2 tahun
    }
    
    //menghitung nilai uang muka
    $nilai_uang_muka = $harga * $uang_muka / 100;

    //menghitung pokok pinjaman
    $pokok_pinjaman = $harga - $nilai_uang_muka;

    // menghitung bunga per tahun
    $bunga_per_tahun = $pokok_pinjaman * ($bunga / 100);

    // menghitung jumlah cicilan per bulan
    $jumlah_cicilan_per_bulan = $pokok_pinjaman / ($waktu * 12) + $bunga_per_tahun / 12;

    // menghitung total bunga yang harus dibayarkan
    $total_bunga = $bunga_per_tahun * $waktu;
    ?>
    <section class="">
        <table align="center">
            <tr>
                <td>Nama Lengkap</td>
                <td> : <?=$nama?> </td>
            </tr>
            <tr>
                <td>Nomor Telepon</td>
                <td> : <?=$nohp?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td> : <?=$email?></td>
            </tr>
            <tr>
                <td>Tanggal Pesan</td>
                <td> : <?=$date?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td> : <?=$address?></td>
            </tr>
            <tr>
                <td>Harga Iphone 25 Pro Max 1 TB</td>
                <td> : Rp. <?=$harga?></td>
            </tr>
            <tr>
                <td>Uang Muka(DP)</td>
                <td> : Rp. <?=$uang_muka?><span>%  yaitu sebesar : <?=$nilai_uang_muka?> </span></td>
            </tr>
            <tr>
                <td>Jangka Waktu</td>
                <td> : <?=$waktu?> <span>tahun atau <?=($waktu * 12)?> bulan</span> </td>
            </tr>
            <tr>
                <td>Jumlah Pokok Pinjaman</td>
                <td> : Rp. <?=$pokok_pinjaman?></td>
            </tr>
            <tr>
                <td>Jumlah Bunga Pinjaman</td>
                <td> : Rp. <?=$total_bunga?></td>
            </tr>
            <tr>
                <td>Jumlah Cicilan Per Bulan</td>
                <td> : Rp. <?=$jumlah_cicilan_per_bulan?></td>
            </tr>
            <tr>
                <td>Metode Pembayaran</td>
                <td> :  <?=$bayar?></td>
            </tr>
        </table>
        <div class="center">
        <form action="tagihan.php" method="get">
            <button class="btn" type="submit">Lakukan Pembayaran</button>
        </form>
    </div>
</section>
</main>

<hr>
  <style>
    .wrapper {
      text-align: center;
    }
    footer {
      display: inline-block;
    }
  </style>
  
  <div class="wrapper">
    <footer>
      <div id="column">
          <h2>Dapatkan Bantuan dan Dukungan</h2>
          Untuk mendapatkan petunjuk atau dukungan dari kami, kunjungi situs <a
              href="http://support.com">support.gadgetstore.com</a> dan submit form
          anda.
      </div>
      <div id="column">
          <h2>Hubungi Kami</h2>
          Jl. Kabut 56<br>
          Surakarta 5644 Jawa Tengah<br>
          (+6231) 5556667
      </div>
      <div id="column">
          <h2>Temukan Kami di ...</h2>
          <a href="http://facebook.com/">Facebook</a><br>
          <a href="http://twitter.com/">Twitter</a>
      </div>
  
  </footer>
  </div>


  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>