<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PT Astra International Tbk</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/assetets/logo/astra_international-logo_brandlogos.net_favx2.png" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html"><span class="fw-bolder text-primary">PT Astra International Tbk</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="ETS">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="resume">Resume</a></li>
                            <li class="nav-item"><a class="nav-link" href="projects">Projects</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <section class="py-5 bg-gradient-primary">
                <div class="container bg-white rounded shadow-lg p-4" style="background-image: url('assets/img/bg-pattern.png'); background-size: cover; border: 2px dashed #fff;">
                <div class="row">
                    <!-- Kiri: Info Kontak -->
                    <div class="col-md-4 d-flex flex-column justify-content-center align-items-center text-white text-center p-4" style="background-color: #007bff; border-radius: 10px;">
                    <h5 class="mb-2">Butuh Bantuan?</h5>
                    <p>Silahkan Hubungi Tim</p>
                    <h3 class="fw-bold bg-white text-success px-3 py-1 rounded">ASTRA</h3>
                    </div>

                    <!-- Kanan: Form -->
                    <div class="col-md-8 mt-4 mt-md-0 ">
                    <form id="formAstraFull" onsubmit="return validateAstraFull();">
                        <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Nama Anda *</label>
                            <input type="text" id="nama" class="form-control" placeholder="Tuliskan nama Anda">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Kategori *</label>
                            <select id="kategori" class="form-control">
                            <option value="">Pilih Kategori</option>
                            <option value="umum">Umum</option>
                            <option value="teknis">Teknis</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Email *</label>
                            <input type="email" id="email" class="form-control" placeholder="Tuliskan email Anda">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Telepon *</label>
                            <input type="text" id="telepon" class="form-control" placeholder="Tuliskan telepon Anda">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Pekerjaan *</label>
                            <select id="pekerjaan" class="form-control">
                            <option value="">Pilih Pekerjaan</option>
                            <option value="karyawan">Karyawan</option>
                            <option value="mahasiswa">Mahasiswa</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Perusahaan *</label>
                            <input type="text" id="perusahaan" class="form-control" placeholder="Tuliskan nama perusahaan Anda">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Kota *</label>
                            <input type="text" id="kota" class="form-control" placeholder="Tuliskan kota tinggal Anda">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Negara *</label>
                            <select id="negara" class="form-control">
                            <option value="">Pilih Negara</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="col-12 mb-3">
                            <label>Subyek *</label>
                            <input type="text" id="subyek" class="form-control" placeholder="Tuliskan subyek pesan Anda">
                        </div>
                        <div class="col-12 mb-3">
                            <label>Pesan *</label>
                            <textarea id="pesan" class="form-control" rows="4" placeholder="Tulis pesan Anda"></textarea>
                        </div>
                        <div class="col-12 d-flex justify-content-between">
                            <button type="reset" class="btn btn-outline-light text-dark">Hapus isian</button>
                            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                        </div>
                        </div>
                    </form>
                    </div>
                </div>
                </div>
            </section>
        </main>
        <!-- Footer-->
        <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0">Copyright &copy; Your Website 2023</div></div>
                    <div class="col-auto">
                        <a class="small" href="#!">Privacy</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Terms</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer-->
        <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0">Copyright &copy; Your Website 2023</div></div>
                    <div class="col-auto">
                        <a class="small" href="#!">Privacy</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Terms</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function validateAstraFull() {
            const fields = [
            { id: 'nama', name: 'Nama' },
            { id: 'kategori', name: 'Kategori' },
            { id: 'email', name: 'Email' },
            { id: 'telepon', name: 'Telepon' },
            { id: 'pekerjaan', name: 'Pekerjaan' },
            { id: 'perusahaan', name: 'Perusahaan' },
            { id: 'kota', name: 'Kota' },
            { id: 'negara', name: 'Negara' },
            { id: 'subyek', name: 'Subyek' },
            { id: 'pesan', name: 'Pesan' }
            ];

            for (let field of fields) {
            const el = document.getElementById(field.id);
            if (!el.value.trim()) {
                Swal.fire("Kesalahan", `${field.name} harus diisi!`, "error");
                el.focus();
                return false;
            }
            }

            // Contoh validasi email sederhana
            const email = document.getElementById("email").value;
            const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
            if (!email.match(emailPattern)) {
            Swal.fire("Kesalahan", "Format email tidak valid!", "error");
            document.getElementById("email").focus();
            return false;
            }

            // Nomor telepon harus angka
            const telepon = document.getElementById("telepon").value;
            if (isNaN(telepon)) {
            Swal.fire("Kesalahan", "Telepon harus berupa angka!", "error");
            document.getElementById("telepon").focus();
            return false;
            }

            return true;
        }
        </script>
    </body>
</html>
