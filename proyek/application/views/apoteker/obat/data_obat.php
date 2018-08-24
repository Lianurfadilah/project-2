          <div class="right_col" role="main">
            <div class="">    
              <div class="col-md-12 col-sm-12 col-xs-12 pull-right">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><a class="btn btn-primary btn-sm" href="<?php echo base_url('obat/form'); ?>"><i class="fa fa-plus"></i>Tambah  Data Obat</a></h2>
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
                            <th style="text-align: center;">Nama Obat</th>
                            <th style="text-align: center;">Quantity</th>
                            <th style="text-align: center;">Jumlah Obat</th>
                            <th style="text-align: center;">Harga Obat</th>
                            <th style="text-align: center;">Tanggal Masuk</th>
                            <th style="text-align: center; width: 8%;">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i=1; foreach($Master_obat as $stok_obat) { ?>
                        <tr class="odd gradeX">
                            <td style="text-align: center;"><?php echo $i; ?></td>
                            <td><?php echo (ucwords($stok_obat['nama_obat'])); ?></td>
                            <td><?php echo (ucwords($stok_obat['quantity_masuk'])); ?></td>
                            <td><?php echo $stok_obat['jumlah_obat']; ?></td>
                            <td><?php echo $stok_obat['harga_obat']; ?></td>
                            <td><?php echo date('j F Y H:i:s', strtotime($stok_obat['date'])); ?></td>
                            <td class="center">
                              <center>
                                <a href="<?php echo base_url('obat/form/'.$stok_obat['id_obat']); ?>" class="btn btn-warning btn-xs" title="Edit"><i class="fa fa-pencil"></i></a>

                                <a href="<?php echo base_url('obat/delete/'.$stok_obat['id_obat']); ?>" class="btn btn-danger btn-xs" onClick="return confirm('Yakin ingin menghapus Data Obat yang bernama <?php echo (ucwords($stok_obat['nama_obat'])); ?> ini?')" title="Delete"><i class="fa fa-trash"></i></a>
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