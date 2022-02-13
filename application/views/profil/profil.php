<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Profil
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url();?>dashboard"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Profil</li>
      </ol>
    </section>

    <section class="content">


        <!-- /.col -->
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Anggota Keluarga</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>NKK</th>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Agama</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $i = 1;
                foreach ($data as $row) {
                  echo '<tr>';  
                  echo '<td>'.$i.'</td>
                  <td>'.$row->nkk.'</td>
                  <td>'.$row->nik.'</td>
                  <td>'.$row->nama.'</td>
                  <td>'.$row->jk.'</td>
                  <td>'.$row->agama.'</td>
                  <td>
                  <a href="#" class="btn btn-success" role="button"><i class="glyphicon glyphicon-edit"></i></a>
                  <a href="#" class="btn btn-danger" role="button"><i class="glyphicon glyphicon-trash"></i></a>
                  </td>';
                  echo '</tr>';
                  $i++;
                }              
                ?> 
                </tbody>
                </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      <!-- /.row -->

    </section>
</div>