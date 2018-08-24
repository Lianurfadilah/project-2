<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <!-- <h3>Tambah Data Obat</h3> -->
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2><?php echo ($form_type=='EDIT')? 'Edit':'Tambah' ;?>&nbsp;Data Obat<small><?php echo ($form_type=='EDIT') ?></small></h2>
            <div class="clearfix"></div>
            <br/>
          </div>
          <div class="x_content">
            <br />
            <form class="form-horizontal form-label-left" role="form" id="form_obat" method="post" action="<?php echo base_url('obat/save_obat'); ?>"  enctype="multipart/form-data">
              <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nik">Nama Obat <span class="required">*</span></label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" id="nama_obat" name="nama_obat" required="required" class="form-control col-md-6 col-xs-12" value="<?php if ($form_type=='EDIT'){echo $obat->nama_obat;} ?>">
                </div>
              </div>
              <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_obat">Quantity Masuk <span class="required">*</span></label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="number" id="quantity_masuk" name="quantity_masuk" required="required" class="form-control col-md-6 col-xs-12" value="<?php if ($form_type=='EDIT'){echo $obat->quantity_masuk;} ?>">
                </div>
              </div>
              <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jumlah_obat">Jumlah Obat <span class="required">*</span></label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="number" id="jumlah_obat" name="jumlah_obat" required="required" class="form-control col-md-6 col-xs-12" value="<?php if ($form_type=='EDIT'){echo $obat->jumlah_obat;} ?>">
                </div>
              </div>
              <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="harga_obat">Harga Obat <span class="required">*</span></label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="number" id="harga_obat" name="harga_obat" required="required" class="form-control col-md-6 col-xs-12" value="<?php if ($form_type=='EDIT'){echo $obat->harga_obat;} ?>">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-3 col-sm-3 col-xs-12 col-md-offset-3">
                  <?php if($form_type=='EDIT'){
                  echo '<input type="hidden" id="form_type" name="form_type" value="EDIT">
                  <input type="hidden" name="id_obat" value="'.$obat->id_obat.'">
                  <a href="'.base_url('obat').'" class="btn btn-primary">Kembali</a>
                  <button type="submit" class="btn btn-success">Simpan</button>'
                  ;
                  }else if($form_type=='INPUT'){
                  echo '<input type="hidden" id="form_type" name="form_type" value="INPUT">
                  <a href="'.base_url('obat').'" class="btn btn-primary">Kembali</a>
                  <button type="submit" class="btn btn-success">Simpan</button>';
                  } ?>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>