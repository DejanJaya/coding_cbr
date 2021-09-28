 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-light-success elevation-4">
     <!-- Brand Logo -->
     <a style="color: white;" href="<?php echo base_url('admin') ?>" class="brand-link navbar-success">
         <img src="<?php echo base_url() ?>assets/dist/img/logo_martabak.jpeg" class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light" style="font-size: 17px;">Sistem Deteksi Martabak</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 <!-- <li class="nav-item has-treeview menu-open">
                     <a href="#" class="nav-link active">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Dashboard
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="./index.html" class="nav-link active">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Dashboard v1</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="./index2.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Dashboard v2</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="./index3.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Dashboard v3</p>
                             </a>
                         </li>
                     </ul>
                 </li> -->
                 <li class="nav-item">
                     <a class="nav-link" href="<?php echo base_url('admin') ?>">
                         <i class="nav-icon fas fa-home"></i>
                         <p>Dashboard</p>
                     </a>
                 </li>

                 <li class="nav-item">
                     <a class="nav-link" href="<?php echo base_url('gejala') ?>">
                         <i class="nav-icon fas fa-book"></i>
                         <p>Gejala</p>
                     </a>
                 </li>

                 <li class="nav-item">
                     <a class="nav-link" href="<?php echo base_url('penyakit') ?>">
                         <i class="nav-icon fas fa-book-medical"></i>
                         <p>Penyakit</p>
                     </a>
                 </li>

                 <li class="nav-item">
                     <a class="nav-link" href="<?php echo base_url('relasi') ?>">
                         <i class="nav-icon fas fa-book-medical"></i>
                         <p>Relasi</p>
                     </a>
                 </li>

                 <li class="nav-item">
                     <a class="nav-link" href="<?= base_url() ?>login/logout">
                         <i class="nav-icon fas fa-fw fa-sign-out-alt"></i>
                         <p>Logout</p>
                     </a>
                 </li>
                 <!-- <li class="nav-header">EXAMPLES</li> -->
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>