<div class="content-inner">
          <!-- Page Header-->
<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Tambah Resep</h2>
  </div>
</header>
<!-- Dashboard Counts Section-->
<section class="dashboard-counts no-padding-bottom">
  <div class="container-fluid">
    <div class="row bg-white has-shadow">
      <!-- Item -->
      <div class="col-xl-12 col-sm-12">
        <form action="<?=base_url()?>resep/store" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label>Judul:</label>
            <input type="text" name="judul" class="form-control" required />
          </div>
          <div class="form-group">
            <label>Kategori:</label>
            <select name="kategori" class="form-control" required >
              <option value="">--pilih--</option>
              <option value="masakan">masakan</option>
              <option value="kue">kue</option>
              <option value="wallpaper">wallpaper</option>
            </select>
          </div>
          <div class="form-group">
            <label>Gambar:</label>
            <input type="file" name="gambar" class="form-control" required/>
          </div>
          <div class="form-group">
            <label>Keterangan:</label>
            <textarea name="keterangan" class="form-control" required style="resize: none; min-height: 450px;" ></textarea>
          </div>
          <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
        </form>
      </div>
      
    </div>
  </div>
</section>

