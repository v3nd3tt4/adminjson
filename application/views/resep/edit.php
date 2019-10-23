<div class="content-inner">
          <!-- Page Header-->
<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Edit Resep</h2>
  </div>
</header>
<!-- Dashboard Counts Section-->
<section class="dashboard-counts no-padding-bottom">
  <div class="container-fluid">
    <div class="row bg-white has-shadow">
      <!-- Item -->
      <div class="col-xl-12 col-sm-12">
        <a href="<?=base_url()?>resep" class="btn btn-warning">< Kembali</a>
        <br/><br/>
        <form action="<?=base_url()?>resep/update" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label>Judul:</label>
            <input type="hidden" name="id_resep" value="<?=$row->row()->id_resep?>">
            <input type="text" name="judul" class="form-control" value="<?=$row->row()->judul?>" required />
          </div>
          <div class="form-group">
            <label>Kategori:</label>
            <select name="kategori" class="form-control" required >
              <option value="">--pilih--</option>
              <option value="masakan" <?=$row->row()->kategori == 'masakan' ? 'selected' : ''?>>masakan</option>
              <option value="kue" <?=$row->row()->kategori == 'kue' ? 'selected' : ''?>>kue</option>
              <option value="wallpaper" <?=$row->row()->kategori == 'wallpaper' ? 'selected' : ''?>>wallpaper</option>
              <option value="wallpaper_nature" <?=$row->row()->kategori == 'wallpaper_nature' ? 'selected' : ''?>>wallpaper_nature</option>
            </select>
          </div>
          <div class="form-group">
            <label>Gambar:</label>
            <input type="file" name="gambar" class="form-control"/>
            <small>*Isi jika hanya anda ingin mengubah gambar</small>
          </div>
          <div class="form-group">
            <label>Keterangan:</label>
            <textarea name="keterangan" class="form-control" required style="resize: none; min-height: 450px;" ><?=$row->row()->deskripsi?></textarea>
          </div>
          <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Update</button>
        </form>
      </div>
      
    </div>
  </div>
</section>

