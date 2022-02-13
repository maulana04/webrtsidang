<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2021 <span>SIRT</span>.</strong> All rights
    reserved.
  </footer>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url();?>assets/js/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Data RT tambah RT -->

<script>
  // pada saat klik provinsi rubah value kabupaten
  $("#provinsi").change(function(){

    var id = $("#provinsi").val();

    $.ajax({
    url : "<?php echo base_url();?>datart/get_kabupaten",
    method : "POST",
    data : {id:id},
    async : true,
    dataType : 'json',
    success: function(data){
        var html = '';
        var i;

        for (i=0; i<data.length; i++) {
            html += '<option value='+data[i].id+'>'+data[i].nama+" ("+data[i].id+")"+'</option>'
        }
        $("#kabupaten").html(html);
    },
    error: function(xhr, status, error) {
    alert(xhr.responseText);
    }
    });
    });

    // pada saat klik kabupaten rubah value kecamatan
    $("#kabupaten").change(function(){

    var id = $("#kabupaten").val();

    $.ajax({
    url : "<?php echo base_url();?>datart/get_kecamatan",
    method : "POST",
    data : {id:id},
    async : true,
    dataType : 'json',
    success: function(data){
        var html = '';
        var i;

        for (i=0; i<data.length; i++) {
            html += '<option value='+data[i].id+'>'+data[i].nama+" ("+data[i].id+")"+'</option>'
        }
        $("#kecamatan").html(html);
    },
    error: function(xhr, status, error) {
    alert(xhr.responseText);
    }
    });
    });
    
    // pada saat klik kecamatan rubah value desa
    $("#kecamatan").change(function(){

    var id = $("#kecamatan").val();

    $.ajax({
    url : "<?php echo base_url();?>datart/get_desa",
    method : "POST",
    data : {id:id},
    async : true,
    dataType : 'json',
    success: function(data){
        var html = '';
        var i;

        for (i=0; i<data.length; i++) {
            html += '<option value='+data[i].id+'>'+data[i].nama+" ("+data[i].id+")"+'</option>'
        }
        $("#desa").html(html);
    },
    error: function(xhr, status, error) {
    alert(xhr.responseText);
    }
    });
    });

    // pada saat klik desa munculkan id desa
    $("#desa").change(function(){

    var id = $("#desa").val();

    $.ajax({
    url : "<?php echo base_url();?>datart/get_rw",
    method : "POST",
    data : {id:id},
    async : true,
    dataType : 'json',
    success: function(data){
        var html = '';

        for (i=0; i<data.length; i++) {
            html += '<option value='+data[i].id+'>'+data[i].nama_rw+'</option>'
        }
        $("#rw").html(html);

        
    },
    error: function(xhr, status, error) {
    alert(xhr.responseText);
    }
    });
    });
    
    $(document).ready( function() {
      $("#ket").hide();
      $('#nik').on('keyup',function(e){
        if ($(this).val().length < 16) {
          $("#ket").show();
          $( "#submit" ).prop( "disabled", true );
        }
        else {
          $("#ket").hide();
          $( "#submit" ).prop( "disabled", false );
        }
      });
    });

    
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url();?>assets/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url();?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url();?>assets/js/dataTables.bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url();?>assets/js/adminlte.min.js"></script>
</body>
</html>