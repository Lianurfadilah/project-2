          <div class="right_col" role="main">
            <div class="">    
              <div class="col-md-12 col-sm-12 col-xs-12 pull-right">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Pasien Sudah Di Periksa</h2>
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
                            <th style="text-align: center;">Status</th>
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
                            <td><?php if($pasien['status'] == 0) { 
                              echo '<center> <a class="btn btn-danger btn-xs"> <i class="fa fa-danger"></i> Belum Di Periksa</a>
                              </center>';
                            } else {
                              echo '<center> <a class="btn btn-success btn-xs"> Sudah Di Periksa </a> </center>';
                            }
                            ?>
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