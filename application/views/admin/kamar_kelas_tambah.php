<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body id="page-top">

<?php $this->load->view("admin/_partials/navbar.php") ?>

<div id="wrapper">

  <?php $this->load->view("admin/_partials/sidebar.php") ?>

  <div id="content-wrapper">

    <div class="container-fluid">

    <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
    <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Tambah Kelas Kamar</div>

          <div class="card-body">
            <div class="table-responsive">
              <form method="post" action="<?php echo base_url().'admin/dokter_tambah_aksi'; ?>">
                  <div class="form-group">
                    <label class="control-label col-md-3">Kelas Kamar</label>
                       <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="" name="username">
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="" name="password">
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="" name="nama">
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="" name="alumni">
                        </div>
                        
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="" name="foto">
                        </div>
                  </div>
                  <div class="form-group">
                       <div class="col-md-9">
                            <input type="submit" class="btn btn-success " value="SAVE">
                        </div>
                  </div>
              </form>
        
            
          </div>
        </div>
        
      </div>

   </div>
    <!-- /.container-fluid -->

    <!-- Sticky Footer -->
    <?php $this->load->view("admin/_partials/footer.php") ?>

  </div>
  <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->


<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
    
</body>
</html>