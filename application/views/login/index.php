<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link href="<?= base_url('assets/'); ?>login/css/login.css" rel="stylesheet">
    <title>Sign in & Sign up Form</title>
</head>

<body>
    <input type="hidden" name="" id="register" value="<?= $this->session->flashdata('registrasi'); ?>">
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="<?= base_url(); ?>login/login" class="sign-in-form" id="form_login" method="POST">
                    <h2 class="title">Sign in</h2>
                    <?= $this->session->flashdata('pesan_login'); ?>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Email" name="email" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" required />
                    </div>
                    <input type="submit" class="btn" value="Login" />
                </form>

                <!-- form register -->
                <form action="<?= base_url(); ?>login/register" class="sign-up-form" id="form_sign_up" method="POST">
                    <h2 class="title">Sign up</h2>
                    <?= $this->session->flashdata('pesan_register'); ?>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Nama" id="nama" name="nama" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" id="email" name="email" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" id="password" name="password" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password Verifikasi" id="verifikasi" name="verifikasi" required />
                    </div>
                    <input type="submit" class="btn" value="Sign up" />
                </form>
                <!-- end form -->

            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                        ex ratione. Aliquid!
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Sign up
                    </button>
                </div>
                <img src="<?= base_url('assets/'); ?>login/img/logo.svg" class="image">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                        laboriosam ad deleniti.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign in
                    </button>
                </div>
                <img src="<?= base_url('assets/'); ?>login/img/logo.svg" class="image">
            </div>
        </div>
    </div>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>login/js/login.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>js/jquery-3.4.1.min.js"></script>
    <script>
        let register = $('#register').val();
        if (register == 1) {
            $('#sign-up-btn').click()
        }
    </script>
</body>

</html>