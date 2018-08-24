          <div class="right_col" role="main">
            <div class="">    
              <div class="col-md-12 col-sm-12 col-xs-12 pull-right">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><a class="btn btn-primary btn-sm" href="<?php echo base_url('admin/dokter/form'); ?>"><i class="fa fa-plus"></i>Tambah Data Pasien</a></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                            <th style="text-align: center; width: 5%;">No</th>
                            <th style="text-align: center;">NIK</th>
                            <th style="text-align: center;">Nama Pasien</th>
                            <th style="text-align: center;">Umur</th>
                            <th style="text-align: center;">No Telp</th>
                            <th style="text-align: center;">Alamat</th>
                            <th style="text-align: center;">Keluhan</th>
                            <th style="text-align: center; width: 8%;">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i=1; foreach($pasien as $pasien) { ?>
                        <tr class="odd gradeX">
                            <td style="text-align: center;"><?php echo $i; ?></td>
                            <td><?php echo (ucwords($pasien['nik'])); ?></td>
                            <td><?php echo (ucwords($pasien['nama_pasien'])); ?></td>
                            <td><?php echo $pasien['umur']; ?></td>
                            <td><?php echo $pasien['notlp']; ?></td>
                            <td><?php echo ucwords($pasien['alamat']); ?></td>
                            <td><?php echo ucwords($pasien['keluhan']); ?></td>
                            <td class="center">
                              <center>
                                <a href="<?php echo base_url('dokter/data_pasien/form/'.$pasien['id_pasien']); ?>" class="btn btn-warning btn-xs" title="Edit"><i class="fa fa-pencil"></i></a>

                                <a href="<?php echo base_url('dokter/data_pasien/delete/'.$pasien['id_pasien']); ?>" class="btn btn-danger btn-xs" onClick="return confirm('Yakin ingin menghapus Data Pasien yang bernama <?php echo (ucwords($pasien['nama_pasien'])); ?> ini?')" title="Delete"><i class="fa fa-trash"></i></a>
                              </center>
                            </td>
                        </tr>
                        <?php $i++; } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>