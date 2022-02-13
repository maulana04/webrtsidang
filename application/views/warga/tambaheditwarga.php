<div class="content-wrapper">
    <section class="content-header">
      <h1>
      <?= $judul;?>
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url();?>dashboard"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Data Warga</li>
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
            <form  action="<?php echo base_url('datawarga/'.$aksi.'');?>" method="post" enctype="multipart/form-data">
            <div class="box-body">

                <div class="form-group">
                <label for="nkk">NKK</label>
                <input class="form-control" type="hidden" name="nkkLama" value="<?=$nkk?>"/>
                <input class="form-control" type="text" name="nkk" placeholder="Input NKK" value="<?=$nkk?>"/>       
                </div>


                <div class="form-group">
                <label for="NIK">NIK</label>
                <input class="form-control" type="text" name="nik" placeholder="NIK" id="nik" value="<?=$nik?>"/>       
                <span class="text-danger" id="ket">*NIK tidak benar</span>
                </div>
                <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input class="form-control" type="text" name="nama" placeholder="nama" value="<?=$nama?>"/>       
                </div>

                <div class="form-group">
                  <label for="">Jenis Kelamin</label>
                  <select class="form-control" name="jk">
                    <option>- Pilih Jenis Kelamin -</option>
                    <option value="Laki-Laki" <?= $jk == "Laki-Laki" ? "selected" : ""; ?>>Laki-laki</option>
                    <option value="Perempuan" <?= $jk == "Perempuan" ? "selected" : ""; ?>>Perempuan</option>
                  </select>
                </div>

                <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input class="form-control" type="text" name="tempat_lahir" placeholder="tempat lahir" value="<?=$tempat_lahir?>"/>
                </div>
                
                <div class="form-group">
                  <label for="tanggal_lahir">Tanggal Lahir</label>
                  <input type="date" name="tanggal_lahir" class="form-control" value="<?=$tanggal_lahir?>"/>
                </div>


                <div class="form-group">
                <label for="agama">Agama</label>
                <input class="form-control" type="text" name="agama" placeholder="Agama" value="<?=$agama?>"/>
                </div>
                
                <div class="form-group">
                <label for="pendidikan">Pendidikan</label>
                <input class="form-control" type="text" name="pendidikan" placeholder="Pendidikan" value="<?=$pendidikan?>"/>
                </div>    

                <div class="form-group">
                <label for="jenis_pekerjaan">Jenis Pekerjaan</label>
                <input class="form-control" type="text" name="jenis_pekerjaan" placeholder="jenis pekerjaan" value="<?=$jenis_pekerjaan?>"/>
                </div>  

                <div class="form-group">
                  <label for="">Status Pernikahan</label>
                  <select class="form-control" name="status_pernikahan">
                    <option>- Pilih Status -</option>
                    <option value="Kawin" <?= $status_pernikahan == "Kawin" ? "selected" : ""; ?>>Kawin</option>
                    <option value="Belum Kawin" <?= $status_pernikahan == "Belum Kawin" ? "selected" : ""; ?>>Belum Kawin</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="">Status Hidup</label>
                  <select class="form-control" name="status_hidup">
                    <option>- Pilih Status -</option>
                    <option value="Hidup" <?= $status_pernikahan == "Hidup" ? "selected" : ""; ?>>Hidup</option>
                    <option value="Meninggal" <?= $status_pernikahan == "Meninggal" ? "selected" : ""; ?>>Meninggal</option>
                  </select>
                </div>


                <div class="form-group">
                  <label for="">Status Keluarga</label>
                  <select class="form-control" name="status_keluarga">
                    <option>- Pilih Status -</option>
                    <option value="Kepala Keluarga" <?= $status_keluarga == "Kepala Keluarga" ? "selected" : ""; ?>>Kepala Keluarga</option>
                    <option value="Istri" <?= $status_keluarga == "Istri" ? "selected" : ""; ?>>Istri</option>
                    <option value="Anak" <?= $status_keluarga == "Anak" ? "selected" : ""; ?>>Anak</option>
                  </select>
                </div>            
               
                <div class="form-group">
                <label for="nama_ayah">Nama Ayah</label>
                <input class="form-control" type="text" name="nama_ayah" placeholder="Nama ayah" value="<?=$nama_ayah?>"/>
                </div>
                              
                <div class="form-group">
                <label for="nama_ibu">Nama Ibu</label>
                <input class="form-control" type="text" name="nama_ibu" placeholder="Nama ibu" value="<?=$nama_ibu?>"/>
                </div>              

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button id="submit" type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
      </div>
    
    
    
    </section>
</div>
