<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Detail Status Pasien</h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-6 col-xs-12">
        <!-- <div class="x_panel"> -->
          <div class="x_content">
            <br/>
            <form class="form-horizontal form-label-left" role="form" id="form_pasien" method="post" action="<?php echo base_url('pasien/save_pasien_dokter'); ?>"  enctype="multipart/form-data">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i> Data Pasien</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Pasien</a>
                        </li>
                     </ul>
                     <div id="myTabContent" class="tab-content">
                       <!-- Pasien -->
                       <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                         <div class="form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12">NIK</label>
                           <div class="col-md-8 col-sm-9 col-xs-12">
                             <input type="text" class="form-control col-md-8 col-xs-12" readonly value="<?php echo $pasien->nik?>">
                           </div>
                         </div>
                         <div class="form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pasien</label>
                           <div class="col-md-8 col-sm-9 col-xs-12">
                             <input type="text" class="form-control col-md-8 col-xs-12" readonly value="<?php echo $pasien->nama_pasien?>">
                           </div>
                         </div>
                         <div class="form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Umur</label>
                           <div class="col-md-8 col-sm-9 col-xs-12">
                             <input type="text" class="form-control col-md-8 col-xs-12" readonly value="<?php echo $pasien->umur; ?>">
                            </div>
                          </div>
                          <div class="form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12">No Telp</label>
                           <div class="col-md-8 col-sm-9 col-xs-12">
                             <input type="text" class="form-control col-md-8 col-xs-12" readonly value="<?php echo $pasien->notlp; ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                            <div class="col-md-8 col-sm-9 col-xs-12">
                              <textarea class="form-control col-md-8 col-xs-12" readonly><?php echo $pasien->alamat; ?></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Keluhan</label>
                            <div class="col-md-8 col-sm-9 col-xs-12">
                              <textarea class="form-control col-md-8 col-xs-12" readonly><?php echo $pasien->keluhan; ?></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Status Periksa</label>
                           <div class="col-md-8 col-sm-9 col-xs-12">
                             <input type="text" class="form-control col-md-8 col-xs-12" readonly value="<?php if($pasien->status == 0) {
                                echo 'Belum Di Periksa';
                              } else { echo 'Sudah Di Periksa'; }?>">
                           </div>
                          </div>
                        </div>
                      </div>
                    </div>
 
                  </div>
                </div>
              </div>
            </form>
          </div>
        <!-- </div> -->
      </div>
      
    </div>
    <div class="row">
      <div class="x_content">
        <div class="x_panel">
          <form class="form-horizontal form-label-left" role="form" id="form_pasien" method="post" action="<?php echo base_url('pasien/save_pasien_dokter'); ?>"  enctype="multipart/form-data">
            <div class="form-group">
              <center>
              <!-- <label class="control-label col-md-5 col-sm-5 col-xs-12">Kelayakan <span class="required">*</span></label> -->
              <h2>Status Di Periksa</h2>
              <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-4">Ubah Status <span class="required">*</span></label>
                <div class="radio col-md-3 col-sm-6 col-xs-8" required="required">
                  <label>
                    <input class="flat" type="radio" name="status" value="0"> Belum Di Periksa
                  </label>
                  <label>
                    <input class="flat" type="radio" name="status" value="1"> Sudah Di Periksa
                  </label>
                </div>
              </div>
              </center>
            </div>
            
            <br>
            <div class="form-group">
              <center>
                <?php if($form_type=='EDIT'){
                  echo '<input type="hidden" id="form_type" name="form_type" value="EDIT">
                  <input type="hidden" name="id_pasien" value="'.$pasien->id_pasien.'">
                  <a href="'.base_url('dokter/pasien').'" class="btn btn-primary">Kembali</a>
                  <button type="submit" class="btn btn-success">Simpan</button>'
                  ;
                  }else if($form_type=='INPUT'){
                  echo '<input type="hidden" id="form_type" name="form_type" value="INPUT">
                  <a href="'.base_url('dokter/pasien').'" class="btn btn-primary">Kembali</a>
                  <button type="submit" class="btn btn-success">Simpan</button>';
                  } ?>
              </center>
            </div>
            <!-- <a class="btn btn-round btn-primary" href="'.base_url('super_admin/pemberdayaan/Survey/validasi/'.$pasien['id_pasien']).'"><i class="fa fa-plus"> -->
          </form>
        </div>
      </div>
    </div>
  </div>
</div>