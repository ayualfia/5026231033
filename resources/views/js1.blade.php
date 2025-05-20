<html>
    <head>
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            function hello()
            {
                alert("selamat Anda mendapatkan hadiah 1 Milyar!");
            }

            function tambah()
            {
                var bilangan1 = document.getElementById("bil1").value;
                var bilangan2 = document.getElementById("bil2").value;

                var hasil = Number.parseInt(bilangan1) +  Number.parseInt(bilangan2) ;

                document.getElementById("hasil").innerHTML = hasil ;
                console.log("sudah selesai");
            }
        </script>
    </head>
    <body>
        <div class="container">
            <button class="btn btn-primary" onclick="hello();">klik disini</button>
        </div>
        <p>
            Bilangan 1 :
            <input type="text" id="bil1" value="0" class="form-control">
            <br>
            Bilangan 2 :
            <input type="text" id="bil2" value="0" class="form-control">
            <br>
            Hasil Penjumalahan :
            <div id="hasil"> </div>
            <br>
            <button class="btn btn-success" onclick="tambah();">Tambah</button>
        </p>
    </body>
</html>