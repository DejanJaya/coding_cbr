<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Penyakit</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Penyakit</a></li>
                        <li class="breadcrumb-item active">Edit Data Penyakit</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <?php
    if ($this->session->flashdata('error') != '') {
        echo '<div class="alert alert-danger" role="alert">';
        echo $this->session->flashdata('error');
        echo '</div>';
    }
    ?>
    <!-- Main content -->
    <section class="content">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm border-bottom-primary">
                    <div class="card-header bg-white py-3">
                        <div class="row">
                            <div class="col">
                                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                                    Form Edit Penyakit
                                </h4>
                            </div>
                            <div class="col-auto">
                                <a href="<?= base_url() ?>penyakit" class="btn btn-sm btn-secondary btn-icon-split">
                                    <span class="icon">
                                        <i class="fa fa-arrow-left"></i>
                                    </span>
                                    <span class="text">
                                        Kembali
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url() ?>penyakit/proses_edit" method="post">

                            <div class="row form-group">
                                <label class="col-md-3 text-md-right" for="kd_penyakit">Kode Penyakit</label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                                        </div>
                                        <input value="<?= $penyakit->kd_penyakit ?>" name="kd_penyakit" id="kd_penyakit" type="text" class="form-control" placeholder="Kode Penyakit...">
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-md-3 text-md-right" for="nama_penyakit">Nama Penyakit</label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-phone"></i></span>
                                        </div>
                                        <input value="<?= $penyakit->nama_penyakit ?>" name="nama_penyakit" id="nama_penyakit" type="text" class="form-control" placeholder="Nama Penyakit...">
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-md-3 text-md-right" for="definisi">Definisi</label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-phone"></i></span>
                                        </div>
                                        <input value="<?= $penyakit->definisi ?>" name="definisi" id="definisi" type="text" class="form-control" placeholder="Definisi...">
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-md-3 text-md-right" for="solusi">Solusi</label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-phone"></i></span>
                                        </div>
                                        <input value="<?= $penyakit->solusi ?>" name="solusi" id="solusi" type="text" class="form-control" placeholder="Solusi...">
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-9 offset-md-3">
                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->

</div>
<!-- /.content-wrapper -->