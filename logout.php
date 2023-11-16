<body>
    <?php
        session_start();
        session_destroy();
        echo "<script>alert('Anda Telah Melakukan Logout. Silahkan Login Kembali');window.location='index.php';</script>";
    ?>
</body>