<div class="content-wrapper">
    <section class="content-header">
      <h1>
      <?= $judul;?>
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url();?>dashboard"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Data RT</li>
        <li class="active"><?= $judul;?></li>
      </ol>
    </section>

    <section class="content">
    
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
           
            <!-- form start -->
            <form  action="<?= base_url();?>datart/submit_tambah" method="post" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                <label for="provinsi">Provinsi</label>
                <select class="form-control" name="provinsi" id="provinsi">
                    <?php
                    foreach ($wilayah as $wil) {
                        echo "<option value='$wil->id'>$wil->nama ($wil->id)</option>";
                    }
                    ?>
                </select>       
                </div>

                <div class="form-group">
                <label for="kabupaten">Kabupaten/Kota</label>
                <select class="form-control" name="kabupaten" id="kabupaten" value="">
                    <!-- Kabupaten di load menggunakan ajax -->
                </select>       
                </div>

                <div class="form-group">
                <label for="kecamatan">Kecamatan</label>
                <select class="form-control" name="kecamatan" id="kecamatan" value="">
                </select>
                </div>
                
                <div class="form-group">
                  <label for="desa">Desa/Kelurahan</label>
                  <select name="desa_id" id="desa" class="form-control" value="">
                  </select>
                </div>

                <div class="form-group">
                  <label for="rw">Rw</label>
                  <select name="rw_id" id="rw" class="form-control" value="">
                  </select>
                </div>

                <div class="form-group">
                  <label for="RT">RT</label>
                  <input class="form-control" type="text" name="nama_rt" placeholder="Masukan No RT" value=""/>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
      </div>
    </section>
</div>