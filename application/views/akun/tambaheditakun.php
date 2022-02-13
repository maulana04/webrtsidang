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
            <form  action="<?php echo base_url('akun/'.$aksi.'');?>" method="post" enctype="multipart/form-data">
            <div class="box-body">
              
                <div class="form-group">
                  <label for="">NKK</label>
                  <select class="form-control" name="nkk">
                  <option>- Pilih NKK -</option>
                    <?php
                    foreach ($data as $row) {
                      if($nkk == $row->nkk){
                        echo '<option value="'.$row->nkk.'" selected>'.$row->nkk.'</option>';
                      }
                      else{
                        echo '<option value="'.$row->nkk.'">'.$row->nkk.'</option>';
                      }
                    }
                    ?>
                  </select>
                </div>
                
                <div class="form-group">
                <label for="Email">Email</label>
                <input class="form-control" type="text" name="email" placeholder="Input Email" value="<?=$email?>"/>       
                </div>

                <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Input Password" value="<?=$password?>"/>       
                </div>
                
                <div class="form-group">
                  <label for="">Role</label>
                  <select class="form-control" name="role">
                    <option>- Pilih Role -</option>
                    <option value="rt" <?= $role == "rt" ? "selected" : ""; ?> >Ketua RT</option>
                    <option value="warga" <?= $role == "warga" ? "selected" : ""; ?> >warga</option>
                  </select>
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