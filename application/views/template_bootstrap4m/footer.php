            <!-- Page Footer-->
            <footer class="main-footer">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-6">
                    <p>Your company &copy; 2017-2019</p>
                  </div>
                  <div class="col-sm-6 text-right">
                    <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">Bootstrapious</a></p>
                    <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                  </div>
                </div>
              </div>
            </footer>
        </div>

        </div>
    </div>
    <!-- JavaScript files-->
    <script src="<?=base_url()?>assets_bootstrap4m/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>assets_bootstrap4m/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="<?=base_url()?>assets_bootstrap4m/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets_bootstrap4m/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?=base_url()?>assets_bootstrap4m/vendor/chart.js/Chart.min.js"></script>
    <script src="<?=base_url()?>assets_bootstrap4m/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?=base_url()?>assets_bootstrap4m/js/charts-home.js"></script>
    <!-- Main File-->
    <script src="<?=base_url()?>assets_bootstrap4m/js/front.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <?php 
    if(!empty($script)){
        $this->load->view($script);
    }
    ?>
  </body>
</html>