<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="" class="img-circle" alt="">
        </div>
        <div class="pull-left info">
          <p><?= $role?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu Utama</li>
        <?php
        if ($role == 'admin'){
        echo'
        <li class="treeview-active">
          <a href="'.site_url().'dashboard">
            <i class="fa fa-home"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview-active">
          <a href="'.site_url().'datart">
            <i class="fa fa-book"></i>
            <span>Data RT</span>
          </a>
        </li>
        <li class="treeview-active">
          <a href="'.site_url().'datawarga">
            <i class="fa fa-book"></i>
            <span>Data Warga</span>
          </a>
        </li>
        <li class="treeview-active">
          <a href="'.site_url().'akun">
            <i class="fa fa-group"></i>
            <span>Buat Akun</span>
          </a>
        </li>
        <li class="treeview-active">
          <a href="'.site_url().'login/logout">
            <i class="fa fa-sign-out"></i>
            <span>Logout</span>
          </a>
        </li>
        ';}
        else if ($role == 'rt'){
        echo'
        <li class="treeview-active">
          <a href="'.site_url().'dashboard">
            <i class="fa fa-home"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview-active">
          <a href="'.site_url().'profil">
            <i class="fa fa-user"></i>
            <span>Profil</span>
          </a>
        </li>
        <li class="treeview-active">
          <a href="'.site_url().'datawarga">
            <i class="fa fa-book"></i>
            <span>Data Warga</span>
          </a>
        </li>
        <li class="treeview-active">
        <a href="'.site_url().'suratmasuk">
          <i class="fa fa-inbox"></i>
          <span>Surat Masuk</span>
        </a>
      </li>
      <li class="treeview-active">
        <a href="'.site_url().'suratkeluar">
          <i class="fa fa-envelope-o"></i>
          <span>Surat Keluar</span>
        </a>
      </li>
        <li class="treeview-active">
          <a href="'.site_url().'login/logout">
            <i class="fa fa-sign-out"></i>
            <span>Logout</span>
          </a>
        </li>
        ';}
        else if ($role == 'warga'){
        echo'
        <li class="treeview-active">
          <a href="'.site_url().'dashboard">
            <i class="fa fa-home"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview-active">
          <a href="'.site_url().'profil">
            <i class="fa fa-user"></i>
            <span>Profil</span>
          </a>
        </li>
        <li class="treeview-active">
          <a href="'.site_url().'suratkeluar">
            <i class="fa fa-envelope-o"></i>
            <span>Surat Keluar</span>
          </a>
        </li>
        <li class="treeview-active">
          <a href="'.site_url().'login/logout">
            <i class="fa fa-sign-out"></i>
            <span>Logout</span>
          </a>
        </li>
        ';}
      ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>