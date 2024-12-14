 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="index3.html" class="brand-link">
         <img src="<?= base_url() ?>adminlte/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">AdminLTE 3</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">




         <!-- Sidebar Menu -->
         <nav class="mt-5">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 <li class="nav-header">Dashboard</li>
                 <li class="nav-item">
                     <a href="<?= base_url() ?>dashboard" class="nav-link">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Dashboard

                         </p>
                     </a>
                 </li>


                 <li class="nav-header">Services</li>
                 <li class="nav-item">
                     <a href="<?= base_url('category') ?>" class="nav-link">
                         <i class="nav-icon fas fa-list"></i>
                         <p>
                             Kategory
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="<?= base_url('service') ?>" class="nav-link">
                         <i class="nav-icon fas fa-cut"></i>
                         <p>
                             Services
                         </p>
                     </a>
                 </li>

                 <li class="nav-header">User List</li>
                 <li class="nav-item">
                     <a href="<?= base_url('user/admin') ?>" class="nav-link">
                         <i class="nav-icon fas fa-user-tie"></i>
                         <p>
                             Admin
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="<?= base_url('user/barber') ?>" class="nav-link">
                         <i class="nav-icon fas fa-user-tag"></i>
                         <p>
                             Barber
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="<?= base_url('user/client') ?>" class="nav-link">
                         <i class="nav-icon fas fa-user"></i>
                         <p>
                             Client
                         </p>
                     </a>
                 </li>

                 <li class="nav-header">Logout</li>
                 <li class="nav-item">
                     <a href="<?= base_url('logout') ?>" class="nav-link">
                         <i class="nav-icon fas fa-sign-out-alt"></i>
                         <p>
                             Logout
                         </p>
                     </a>
                 </li>




             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>