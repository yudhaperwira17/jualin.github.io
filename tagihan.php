<!DOCTYPE html>
<html>
<head>
<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/product/">





<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Pembayaran dan Upload Bukti</title>
 
    <style>
        /* CSS untuk mengatur tampilan tabel */
        .center {
            margin: center;
            text-align: center;
            margin-top: 50px;
           
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
        }

        /* CSS untuk mengatur tampilan button */
        .upload-btn {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            font-size: 14px;
            border: none;
            cursor: pointer;
        }
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
    .btn {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
<link href="product.css" rel="stylesheet">
</head>

<body>

  <header class="site-header sticky-top py-1">
    <nav class="container d-flex flex-column flex-md-row justify-content-between">
      <a class="py-2" href="index.phhp" aria-label="Product">
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

  <hr></hr>
  <hr></hr>
<h3 align="center">Lakukan Pembayaran Ke Salah Satu Rekening Berikut Ini dan UPLOAD Bukti Pembayaranya</h3>
<hr></hr>
<hr></hr>
    <table>
        <thead>
            <tr>
                <th>Bank Tujuan</th>
                <th>Nomor Rekening</th>
                <th>Upload Bukti Pembayaran</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>MANDIRI a.n Bagas Ferdianto Saputra</td>
                <td>00987652352853823</td>
                <td><input type="file" name="bukti_pembayaran"></td>
            </tr>
            <tr>
                <td>BRI a.n. Bagas Ferdianto Saputra</td>
                <td>09876543214343421</td>
                <td><input type="file" name="bukti_pembayaran"></td>
            </tr>
            <tr>
                <td>BNI a.n. Bagas Ferdianto Saputra</td>
                <td>235346574675747443</td>
                <td><input type="file" name="bukti_pembayaran"></td>
            </tr>
            <tr>
                <td>OVO a.n. Bagas Ferdianto Saputra</td>
                <td>235346235747443</td>
                <td><input type="file" name="bukti_pembayaran"></td>
            </tr>
            <tr>
                <td>DANA a.n. Bagas Ferdianto Saputra</td>
                <td>23333337443</td>
                <td><input type="file" name="bukti_pembayaran"></td>
            </tr>
            <tr>
                <td>GOPAY a.n. Bagas Ferdianto Saputra</td>
                <td>089776867856</td>
                <td><input type="file" name="bukti_pembayaran"></td>
            </tr>
            
    </div>
            <!-- Tambahkan baris sesuai dengan data yang ingin ditampilkan -->
        </Tbody>

    </table>
    <div class="center">
        <form action="konfirmasi.php" method="get">
            <button class="btn" type="submit">SIMPAN</button>
        </form>
</body>
</html>
