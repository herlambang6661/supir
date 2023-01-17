<body class="bg-primary">
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
</body>
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