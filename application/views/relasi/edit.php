<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Relasi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Relasi</a></li>
                        <li class="breadcrumb-item active">Edit Data Relasi</li>
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
                                    Form Edit Relasi
                                </h4>
                            </div>
                            <div class="col-auto">
                                <a href="<?= base_url() ?>relasi" class="btn btn-sm btn-secondary btn-icon-split">
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
                        <form action="<?= base_url() ?>relasi/proses_edit" method="post">
                            <div class="row form-group">
                                <label class="col-md-3 text-md-right" for="Bobot">Bobot</label>
                                <div class="col-md-9">
                                    <input value="<?= $relasi['bobot'] ?>" name="bobot" id="bobot" type="text" class="form-control" placeholder="Bobot...">
                                    <input type="hidden" name="id_relasi" value="<?= $relasi['id_relasi'] ?>" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-md-3 text-md-right" for="kd_gejala">Gejala</label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <select name="kd_gejala" id="kd_gejala" class="custom-select">
                                            <option value="" selected disabled>Pilih Jenis Gejala</option>
                                            <?php foreach ($gejala as $g) : ?>
                                                <option <?= $relasi['kd_gejala'] == $g['kd_gejala'] ? 'selected' : ''; ?> <?= set_select('kd_gejala', $g['kd_gejala']) ?> value="<?= $g['kd_gejala'] ?>"><?= $g['gejala'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <div class="input-group-append">
                                            <a class="btn btn-primary" href="<?= base_url('gejala/add'); ?>"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-md-3 text-md-right" for="kd_penyakit">Penyakit</label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <select name="kd_penyakit" id="kd_penyakit" class="custom-select">
                                            <option value="" selected disabled>Pilih Satuan Barang</option>
                                            <?php foreach ($penyakit as $p) : ?>
                                                <option <?= $relasi['kd_penyakit'] == $p['kd_penyakit'] ? 'selected' : ''; ?> <?= set_select('kd_penyakit', $p['kd_penyakit']) ?> value="<?= $p['kd_penyakit'] ?>"><?= $p['nama_penyakit'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <div class="input-group-append">
                                            <a class="btn btn-primary" href="<?= base_url('penyakit/add'); ?>"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-9 offset-md-3">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
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