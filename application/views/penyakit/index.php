<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Deteksi Martabak</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Deteksi Martabak</a></li>
                        <li class="breadcrumb-item active">Data Deteksi Martabak</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <?= $this->session->flashdata('message'); ?>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card-header bg-white py-3">
                    <div class="row">
                        <div class="col">
                            <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                                Data Deteksi Martabak
                            </h4>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url() ?>penyakit/add" class="btn btn-sm btn-primary btn-icon-split">
                                <span class="icon">
                                    <i class="fa fa-plus"></i>
                                </span>
                                <span class="text">
                                    Tambah Data Deteksi
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="exampleLaporan" width="100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Penyakit</th>
                                <th>Definisi</th>
                                <th>Solusi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($penyakit) :
                                $no = 1;
                                foreach ($penyakit as $p) :
                            ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $p['nama_penyakit'] ?></td>
                                        <td><?= $p['definisi']; ?></td>
                                        <td><?= $p['solusi']; ?></td>
                                        <td>
                                            <a href="<?= base_url('penyakit/edit/') . $p['kd_penyakit'] ?>" class="btn btn-circle btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                            <a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('penyakit/delete/') . $p['kd_penyakit'] ?>" class="btn btn-circle btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="5" class="text-center">
                                        Data Kosong
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.col -->
        <!-- /.row -->
    </section>
    <!-- /.content -->

</div>
<!-- /.content-wrapper -->