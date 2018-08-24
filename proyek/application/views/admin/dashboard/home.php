page content -->
<div class="right_col" role="main">
  <div class="">
	  <div class="title_left">
	    <h4>Dashboard Admin</h4>
	  </div>
    <div class="row top_tiles">
      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-book"></i></div>
          <div class="count"><?php echo $pasien; ?></div>
          <h3>Data Pasien</h3>
          <p><a href="<?php echo base_url('Pasien'); ?>">Go to Data Pasien List <i class="fa fa-arrow-right"></i></a></p>
        </div>
      </div>
    </div>
    <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Jumlah Pasien <small>/bulan</small></h2>
                    <div class="filter">
                      <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                        <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-9 col-sm-12 col-xs-12">
                      <div class="demo-container" style="height:280px">
                        <div id="chart_plot_02" class="demo-placeholder"></div>
                      </div>
                      <div class="tiles">
                        <div class="col-md-4 tile">
                          <span>Grafik Jumlah Pasien /Bulan</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
       </div>
   </div>
</div>

<!-- /page content