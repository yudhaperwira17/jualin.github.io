<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Bagas Ferdianto Saputra V3422014">
  <meta name="generator" content="Hugo 0.108.0">
  <title>Menu Kredit</title>

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
  </style>


  <!-- Custom styles for this template -->
  <link href="product.css" rel="stylesheet">
</head>

<body>

  <header class="site-header sticky-top py-1">
    <nav class="container d-flex flex-column flex-md-row justify-content-between">
      <a class="py-2" href="index.php" aria-label="Product">
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

  <main>
  <section>
        <div class="container">
              <div class="py-5 text-center">
                <h2>Formulir KREDIT IPhone 25 PRO MAX 1 TB di Gadget Store</h2>
                <p class="lead">Silahkan isi form berikut untuk pembelian produk terbaru kami yaitu IPhone 25 PRO MAX 1 TB secara KREDIT</p>
              </div>
        </div>
        <div class="container">
        <form enctype="multipart/form-data" action="terimakredit_uts.php" method="post">
        <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                <table align="center">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td> : <input type="text" name="nama"</></td>
                    </tr>
                    <tr>
                        <td>Nomor Telepon</td>
                        <td> : <input type="text" name="nohp" value="+62"</></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td> : <input type="email" name="email" value="@gmail.com"</></td>
                    </tr>
                    <tr>
                        <td>Tanggal Pesan</td>
                        <td> : <input type="date" name="tanggal"</></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td> : <textarea name="alamat"></textarea></td>
                    </tr>
                    <tr>
                        <td>Harga Iphone 25 Pro Max 1 TB</td>
                        <td> : <input type="number" name="harga" min="10000000" required</>
                        <span>(harganya 30 juta)</span>
                        </td> 
                    </tr>
                    <tr>
                        <td>Uang Muka(DP)</td>
                        <td> : <input type="number" name="uang_muka" min="30" max="100" required</>
                        <span>% (minimal 30% dari harga HP)</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Jangka Waktu</td>
                        <td> : <input type="number" name="waktu" min="1" max="5" required</>
                        <span>tahun</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Metode Pembayaran</td>
                        <td> :
                            <select name="bayar">
                                <option value="Transfer">Transfer Bank</option>
                                <option value="Dana">Dana</option>
                                <option value="Ovo">Ovo</option>
                                <option value="Gopay">Gopay</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td> 
                            <input type="submit" name="input" value="HITUNG"</>
                            <input type="reset" name="clear" value="CLEAR"</>
                    </tr>
                </table>
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