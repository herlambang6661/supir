<body>
    <style>
    a {
        text-decoration: none;
    }

    .login-page {
        width: 100%;
        height: 100vh;
        display: inline-block;
        display: flex;
        align-items: center;
    }

    .form-right i {
        font-size: 100px;
    }
    </style>
    <div class="login-page bg-purple">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <h3 class="mb-3"></h3>
                    <div class="bg-white shadow rounded">
                        <div class="row">
                            <div class="col-md-7 pe-0">
                                <div class="form-left h-100 py-5 px-5">
                                    <form action="" class="row g-4">
                                        <div class="col-12">
                                            <label>Username</label>
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="fa fa-user"></i></div><br>
                                                <input type="text" class="form-control" placeholder="Enter Username"
                                                    id="username" name="username">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label>Password</label>
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="fa fa-key"></i></div>
                                                <input type="password" class="form-control" placeholder="Enter Password"
                                                    id="password" name="password">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button type="button"
                                                class="btn btn-primary px-4 float-end mt-4 btn-sign">Login <i
                                                    class="fa-solid fa-right-to-bracket"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5 ps-0 d-none d-md-block">
                                <div class="form-right h-100 bg-primary text-white text-center pt-5">
                                    <i class="fa-solid fa-truck-field fa-bounce"></i>
                                    <h2 class="fs-1">Selamat Datang</h2>
                                    <h6 class="text-center">LOGIN UNTUK MENGGUNAKAN APLIKASI</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text-end text-secondary mt-3">Aplikasi Bongkar & Muat Kendaraan PT PNTEX</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->

</body>
<!-- <body class="bg-primary">
    <br>
    <br>
    <div class="container col-lg-4">
        <div class="card">
            <div class="card-header">
                <h4 class="text-center">LOGIN UNTUK MENGGUNAKAN APLIKASI</h4>
            </div>
            <div class="card-body">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="Username" id="username" name="username">
                    <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                    <label for="floatingPassword">Password</label>
                </div>
                <hr>
                <div class="d-grid gap-2 col-12 mx-auto">
                    <button type="submit" class="btn btn-primary text-center btn-sign" id="login">Sign In</button>
                </div>


                <script>
                var input = document.getElementById("password");
                input.addEventListener("keypress", function(event) {
                    if (event.key === "Enter") {
                        event.preventDefault();
                        document.getElementById("login").click();
                    }
                });
                </script>
            </div>
        </div>
    </div>
</body> -->
<?php $this->load->view('template/_footer'); ?>

<script>
$(".btn-sign").click(function() {

    var user = $("#username").val();
    var pass = $("#password").val();

    if (user.length == "") {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Username Wajib Diisi !'
        });

    } else if (pass.length == "") {

        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Password Wajib Diisi !'
        });

    } else {

        $.ajax({
            url: "<?= base_url() ?>index.php/Login/checklogin",
            type: "POST",
            beforeSend: function() {
                let timerInterval
                Swal.fire({
                    title: 'Mohon Menunggu...',
                    html: 'Sedang Mengambil Data',
                    showConfirmButton: false,
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading()
                        const b = Swal.getHtmlContainer().querySelector('b')
                        timerInterval = setInterval(() => {
                            b.textContent = Swal.getTimerLeft()
                        }, 100)
                    },
                    willClose: () => {
                        clearInterval(timerInterval)
                    }
                });
            },
            data: {
                "selUser": user,
                "pass": pass
            },

            success: function(response) {

                if (response == "success") {

                    Swal.fire({
                            icon: 'success',
                            title: 'Username & Password Cocok',
                            text: 'Anda akan di arahkan ke Halaman Dashboard',
                            timer: 1000,
                            showCancelButton: false,
                            showConfirmButton: false
                        })
                        .then(function() {

                            window.location.href =
                                "<?php echo base_url() ?>index.php/Home";
                        });

                } else {

                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal Masuk',
                        text: 'Username & Password tidak cocok'
                    });


                }

                console.log(response);

            },

            error: function(response) {

                Swal.fire({
                    icon: 'error',
                    title: 'Opps!',
                    text: 'server error!'
                });

                console.log(response);

            }

        });

    }

});
</script>