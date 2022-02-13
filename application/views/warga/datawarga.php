<div class="content-wrapper">
    <section class="content-header">
      <h1>
      Data Warga
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url();?>dashboard"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Data Warga</li>
      </ol>
    </section>

    <section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <a href="<?= base_url();?>datawarga/tambah" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
                    <a href="<?= base_url();?>datawarga/export_data" class="btn btn-success" role="button" title="Export Data"><i class="glyphicon glyphicon-print"></i> Export Data</a>
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
                                <th>NKK</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($warga as $wrg) {
                                echo '<tr>';  
                                echo '<td>'.$i.'</td>
                                <td>'.$wrg->nkk.'</td>
                                <td>'.$wrg->nik.'</td>
                                <td>'.$wrg->nama.'</td>
                                <td>'.$wrg->jk.'</td>
                                <td>'.$wrg->tempat_lahir.'</td>
                                <td>'.$wrg->tanggal_lahir.'</td>
                                <td>
                                <a href="'.base_url("datawarga/edit/$wrg->nik").'" class="btn btn-success" role="button"><i class="glyphicon glyphicon-edit"></i></a>
                                 <a href="'.base_url("datawarga/hapus/$wrg->nik").'" class="btn btn-danger" role="button"><i class="glyphicon glyphicon-trash"></i></a>
                                <a href="#" class="btn btn-primary" role="button"><i class="glyphicon glyphicon-search"></i></a>
                                </td>';
                                echo '</tr>';
                                $i++;
                            }              
                            ?> 

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
