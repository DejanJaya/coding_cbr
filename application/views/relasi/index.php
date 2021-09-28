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
                        <li class="breadcrumb-item active">Data Relasi</li>
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
                <div class="card shadow-sm border-bottom-primary">
                    <div class="card-header bg-white py-3">
                        <div class="row">
                            <div class="col">
                                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                                    Data Relasi
                                </h4>
                            </div>
                            <div class="col-auto">
                                <a href="<?= base_url() ?>relasi/add" class="btn btn-sm btn-primary btn-icon-split">
                                    <span class="icon">
                                        <i class="fa fa-plus"></i>
                                    </span>
                                    <span class="text">
                                        Tambah Relasi
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table width="100%" border="0" cellpadding="4" cellspacing="1" class="table table-striped table-bordered" id="exampleLaporan">
                            <tr>
                                <th>No. </th>
                                <th>Gejala</th>
                                <th>Nama Penyakit</th>
                            </tr>
                            <?php
                            $no = 1;
                            if ($relasi) :
                                foreach ($relasi as $r) :
                            ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td>
                                            <table width='600' cellpadding='4' cellspacing='1' class="table table-striped table-bordered">
                                                <tr>
                                                    <td width="50"><?= $r['kd_gejala']; ?></td>
                                                    <td width="300"><?= $r['gejala']; ?></td>
                                                    <td width="50"><?= $r['bobot']; ?></td>
                                                    <td width="20"><a href="<?= base_url('relasi/edit/') . $r['id_relasi'] ?>" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a></td>
                                                    <td width="20"><a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('relasi/delete/') . $r['id_relasi'] ?>" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash"></i></a></td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td><?= $r['kd_penyakit']; ?>
                                            &nbsp;|&nbsp;<strong>
                                                <?= $r['nama_penyakit']; ?>
                                            </strong></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="7" class="text-center">
                                        Data Kosong
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </table>
                    </div>
                </div>

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->

</div>
<!-- /.content-wrapper -->