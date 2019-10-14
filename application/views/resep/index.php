<div class="content-inner">
          <!-- Page Header-->
<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Resep</h2>
  </div>
</header>
<!-- Dashboard Counts Section-->
<section class="dashboard-counts no-padding-bottom">
  <div class="container-fluid">
    <div class="row bg-white has-shadow">
      <!-- Item -->
      <div class="col-xl-12 col-sm-12">
        <a href="<?=base_url()?>resep/add" class="btn btn-danger">
        <i class="fa fa-plus"></i>
        Tambah</a>
        <hr/>
        <table id="myTable" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Gambar</th>
              <th>Judul</th>
              <th>Kategori</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1;foreach($row->result() as $row_data){?>
            <tr>
              <td><?=$no++?>.</td>
              <td><img src="<?=base_url()?>file_upload/<?=$row_data->gambar?>" class="img img-thumbnail" width="350px" ></td>
              <td><?=$row_data->judul?></td>
              <td><?=$row_data->kategori?></td>
              <td>
                <a href="<?=base_url()?>resep/remove/<?=$row_data->id_resep?>" onclick="return confirm('are you sure?')" class="btn btn-xs btn-danger" ><i class="fa fa-remove"></i> Hapus</a>
                <a href="<?=base_url()?>resep/edit/<?=$row_data->id_resep?>" class="btn btn-xs btn-success" onclick="if(!confirm(\'Anda yakin mengedit data ini?\')) return false;"><i class="fa fa-pencil"></i> Edit</a>
              </td>
            </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
      
    </div>
  </div>
</section>

