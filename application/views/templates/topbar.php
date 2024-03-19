 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

     <!-- Main Content -->
     <div id="content">

         <!-- Topbar -->
         <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

             <!-- Page Heading -->
             <div class="small mb-0 ml-3">
                 <h1 class="h3 mb-1 text-primary font-weight-bold"><?= $title; ?></h1>
                 <span class="font-weight-bold text-primary"><?= date('l, d F Y') ?></span>
             </div>

             <!-- Topbar Navbar -->
             <ul class="navbar-nav ml-auto mr-3">
                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal">Tambah
                     Data</button>
             </ul>
         </nav>
         <!-- End of Topbar -->