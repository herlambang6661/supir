<!-- Bootstrap core JavaScript-->
<script src="<?= base_url(); ?>assets/sbadmin2/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url(); ?>assets/sbadmin2/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url(); ?>assets/sbadmin2/js/sb-admin-2.min.js"></script>

<!-- Sweetalert 2 -->
<script src="<?= base_url(); ?>assets/bootstrap/sweetalert2@11"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script type="text/javascript">
    $('form #btn-ok').click(function(e) {
        let $form = $(this).closest('form');
        var username = $("#username").val();
        var password = $("#password").val();

        if (username.length == "" && password.length == "") {

            Swal.fire({
                // icon: 'warning',
                title: 'Oops...',
                text: 'Kolom Username & Password Wajib Diisi !',
                // imageUrl: '<?= base_url(); ?>assets/sbadmin2/img/depp.gif',
                html: '<center><lottie-player src="https://assets10.lottiefiles.com/packages/lf20_Tkwjw8.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop autoplay></lottie-player></center><br><h1 class="h4">Kolom Username & Password Wajib Diisi !</h1>',
                // imageWidth: 400,
                // imageAlt: 'Error Login',
            });

        } else if (username.length == "") {

            Swal.fire({
                // icon: 'warning',
                title: 'Oops...',
                text: 'Kolom Username Wajib Diisi !',
                html: '<center><lottie-player src="https://assets10.lottiefiles.com/packages/lf20_Tkwjw8.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop autoplay></lottie-player></center><br><h1 class="h4">Kolom Username Wajib Diisi !</h1>',
                // imageUrl: '<?= base_url(); ?>assets/sbadmin2/img/depp.gif',
                // imageWidth: 400,
                // imageAlt: 'Error Login',
            });

        } else if (password.length == "") {

            Swal.fire({
                // icon: 'warning',
                title: 'Oops...',
                text: 'Password Wajib Diisi !',
                html: '<center><lottie-player src="https://assets10.lottiefiles.com/packages/lf20_Tkwjw8.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop autoplay></lottie-player></center><br><h1 class="h4">Kolom Password Wajib Diisi !</h1>',
                // imageUrl: '<?= base_url(); ?>assets/sbadmin2/img/depp.gif',
                // imageWidth: 400,
                // imageAlt: 'Error Login',

            });

        } else {

            $.ajax({

                url: "<?= base_url() ?>index.php/GD/Dashboard/login",
                type: "POST",
                data: {
                    "username": username,
                    "password": password
                },

                success: function(response) {

                    if (response == "success") {

                        Swal.fire({
                                icon: 'success',
                                title: 'Username & Password Cocok',
                                text: 'Anda akan di arahkan ke Halaman Dashboard',
                                timer: 4000,
                                showCancelButton: false,
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
                                },
                                // html: '<center><img class="img-fluid" src="<?= base_url(); ?>assets/sbadmin2/img/successlogin.gif"  background="transparent" ></img></center><br><h1 class="h4">Anda akan di arahkan ke Halaman Dashboard</h1>',
                                // imageUrl: '<?= base_url(); ?>assets/sbadmin2/img/successlogin.gif',
                                // imageWidth: 400,
                                // imageAlt: 'Error Login',
                            })
                            .then(function() {
                                window.location.href = "<?php echo base_url() ?>EPROC/Dashboard";
                            });

                    } else {

                        Swal.fire({
                            // icon: 'error',
                            title: 'Gagal Masuk',
                            text: 'Username & Password tidak cocok',
                            // imageUrl: '<?= base_url(); ?>assets/sbadmin2/img/depp.gif',
                            html: '<center><lottie-player src="https://assets7.lottiefiles.com/private_files/lf30_GjhcdO.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop autoplay></lottie-player></center><br><h1 class="h4">Username & Password tidak cocok</h1>',
                            imageWidth: 400,
                            imageAlt: 'Error Login',
                        });


                    }

                    console.log(response);

                },

                error: function(response) {

                    Swal.fire({
                        // type: 'error',
                        title: 'Opps!',
                        text: 'Please Contact Administrator. Error Code : ' + response,
                        imageUrl: '<?= base_url(); ?>assets/sbadmin2/img/error.jpg',
                        imageWidth: 400,
                        imageAlt: 'Error',
                    });

                    console.log(response);

                }

            });

        }

    });
</script>
</body>

</html>