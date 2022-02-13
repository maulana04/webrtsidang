<div class="content-wrapper">
    <section class="content-header">
      <h1>
      <?= $judul;?>
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url();?>dashboard"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Surat Masuk</li>
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
            <form  action="<?php echo base_url('suratmasuk/'.$aksi.'');?>" method="post" enctype="multipart/form-data">
            <div class="box-body">

                <div class="form-group">
                <label for="nama_surat">Nama Surat</label>
                <input class="form-control" type="text" name="nama_surat" placeholder="Input Nama Surat" value="<?=$nama_surat?>"/>       
                </div>

                <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input class="form-control" type="text" name="keterangan" placeholder="Input keterangan" value="<?=$keterangan?>"/>       
                </div>

                <div class="form-group">
                <label for="tanggal_pembuatan">Tanggal Pembuatan</label>
                <input class="form-control" type="date" name="tanggal_pembuatan" placeholder="Input tanggal pembuatan" value="<?=$tanggal_pembuatan?>"/>       
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