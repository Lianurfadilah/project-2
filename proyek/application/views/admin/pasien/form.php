<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Tambah Data Pasien</h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2><?php echo ($form_type=='EDIT')? 'Edit':'Tambah' ;?>&nbsp;Pasien<small><?php echo ($form_type=='EDIT') ?></small></h2>
            <div class="clearfix"></div>
            <br/>
          </div>
          <div class="x_content">
            <br />
            <form class="form-horizontal form-label-left" role="form" id="form_pasien" method="post" action="<?php echo base_url('pasien/save_pasien'); ?>"  enctype="multipart/form-data">
              <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nik">NIK <span class="required">*</span></label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="number" id="nik" name="nik" required="required" class="form-control col-md-6 col-xs-12" value="<?php if ($form_type=='EDIT'){echo $pasien->nik;} ?>">
                </div>
              </div>
              <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_pasien">Nama Pasien <span class="required">*</span></label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" id="nama_pasien" name="nama_pasien" required="required" class="form-control col-md-6 col-xs-12" value="<?php if ($form_type=='EDIT'){echo $pasien->nama_pasien;} ?>">
                </div>
              </div>
              <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="umur">Umur <span class="required">*</span></label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="number" id="umur" name="umur" required="required" class="form-control col-md-6 col-xs-12" value="<?php if ($form_type=='EDIT'){echo $pasien->umur;} ?>">
                </div>
              </div>
              <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="notlp">No Telp <span class="required">*</span></label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="number" id="notlp" name="notlp" required="required" class="form-control col-md-6 col-xs-12" value="<?php if ($form_type=='EDIT'){echo $pasien->notlp;} ?>">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat">Alamat <span class="required" style="color: red;">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea class="form-control" rows="3" name="alamat" placeholder="Alamat Pasien" required=""><?php if ($form_type=='EDIT'){echo $pasien->alamat;} ?></textarea>
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="keluhan">Keluhan <span class="required" style="color: red;">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea class="form-control" rows="3" name="keluhan" placeholder="Keluhan Pasien" required=""><?php if ($form_type=='EDIT'){echo $pasien->keluhan;} ?></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-3 col-sm-3 col-xs-12 col-md-offset-3">
                  <?php if($form_type=='EDIT'){
                  echo '<input type="hidden" id="form_type" name="form_type" value="EDIT">
                  <input type="hidden" name="id_pasien" value="'.$pasien->id_pasien.'">
                  <a href="'.base_url('pasien').'" class="btn btn-primary">Kembali</a>
                  <button type="submit" class="btn btn-success">Simpan</button>'
                  ;
                  }else if($form_type=='INPUT'){
                  echo '<input type="hidden" id="form_type" name="form_type" value="INPUT">
                  <a href="'.base_url('pasien').'" class="btn btn-primary">Kembali</a>
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