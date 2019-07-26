<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- ini menu side bar -->
    <ul class="sidebar-menu" data-widget="tree">
      <li>
       <a href="<?php echo base_url() ?>beranda">
         <i class="fa fa-home"></i> <span>Beranda</span>
       </a>
      </li>
    </ul>

    <ul class="sidebar-menu" data-widget="tree">
      <li class="active">
        <a href="<?php echo base_url() ?>report">
          <i class="fa fa-book"></i> <span>Report</span>
        </a>
      </li>
    </ul>

    <ul class="sidebar-menu" data-widget="tree">
      <li class="treeview">
        <a href="#">
          <i class="fa fa-cogs"></i> <span>Setting</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url() ?>setting_macaddress"><i class="fa fa-circle-o"></i> Change Mac-Address</a></li>
            <li class="active"><a href="<?php echo base_url() ?>setting_pcrusak"><i class="fa fa-circle-o"></i> Input Computer Error</a></li>
          </ul>
      </li>
    </ul>
    <!-- akhir dari menu -->
  </section>
  <!-- /.sidebar -->
</aside>
