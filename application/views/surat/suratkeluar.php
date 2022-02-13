<div class="content-wrapper">
    <section class="content-header">
      <h1>
      <?=$judul;?>
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url();?>dashboard"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><?=$judul;?></li>
      </ol>
    </section>

    <section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <div class="box-tools">
                        <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default">
                                <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="box-body table-responsive">
                    <table id="warga" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama Surat</th>
                                <th>Tanggal Penerbitan</th>
                                <th>Keterangan</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                        <td>1</td>
                        <td>surat pengantar</td>
                        <td>23/01/2021</td>
                        <td><span class="badge badge-success">approved</span></td>
                        <td>
                        <a href="#" class="btn btn-primary" role="button"><i class="glyphicon glyphicon-search"></i></a>
                        </td>
                        </tr>
                        </tbody>
                    </table>
                    <ul class="pagination pagination-sm no-margin pull-right">
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    </section>
</div>