<body class="hold-transition login-page" style="background-color: #000080;">
    <div class="login-box">
        <?php
        if ($this->session->flashdata('error') != '') {
            echo '<div class="alert alert-danger" role="alert">';
            echo $this->session->flashdata('error');
            echo '</div>';
        }
        ?>

        <?php
        if ($this->session->flashdata('success_register') != '') {
            echo '<div class="alert alert-info" role="alert">';
            echo $this->session->flashdata('success_register');
            echo '</div>';
        }
        ?>
        <div class="login-logo">
            <a href="#" style="color: whitesmoke;"><b>Sistem</b>Serikat Kerja</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Login boss</p>

                <form action="<?php echo base_url('login/proses'); ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">

                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">LogIn</button>
                        </div>
                    </div>
                </form>
                <p class="mb-0">
                    <a href="<?php echo base_url('register'); ?>" class="text-center">Daftar Akun Baru</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->