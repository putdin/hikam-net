 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
         <div class="sidebar-brand-icon rotate-n-15">
             <i class="fab fa-app-store"></i>
         </div>
         <div class="sidebar-brand-text mx-3">HIKAM-NET</div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         Menu
     </div>

     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
         <!-- Nav Item - Charts -->
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('admin/index') ?>">
             <i class="fas fa-file-invoice-dollar"></i>
             <span>Pencarian</span></a>
     </li>
     </li>
     <!-- Nav Item - Utilities Collapse Menu -->
     <li class="nav-item">
         <!-- Nav Item - Charts -->
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('admin/siswa') ?>">
             <i class="fas fa-user-graduate"></i>
             <span>Pelanggan</span></a>
     </li>
     </li>



     <!-- Nav Item - Utilities Collapse Menu -->
     <li class="nav-item">
         <!-- Nav Item - Charts -->
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('admin/siswa/kelas') ?>">
             <i class="fas fa-school"></i>
             <span>IP dan ODP</span></a>
     </li>
     </li>

     <!-- Nav Item - Utilities Collapse Menu -->
     <li class="nav-item">
         <!-- Nav Item - Charts -->
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('admin/index/spp') ?>">
             <i class="fas fa-money-bill-alt"></i>
             <span>Paket</span></a>
     </li>
     </li>

     <!-- Nav Item - Utilities Collapse Menu -->
     <li class="nav-item">
         <!-- Nav Item - Charts -->
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('admin/petugas') ?>">
             <i class="fas fa-user-shield"></i>
             <span>Petugas</span></a>
     </li>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Nav Item - Utilities Collapse Menu -->
     <li class="nav-item">
         <!-- Nav Item - Charts -->
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('auth/logout') ?>" data-toggle="modal" data-target="#logoutModal">
             <i class="fas fa-door-open"></i>
             <span>Logout</span></a>
     </li>
     </li>

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

 </ul>
 <!-- End of Sidebar -->
