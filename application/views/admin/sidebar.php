
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="<?=base_url()?>Admin_dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-cog"></i>
            <span>News</span>
            <span class="pull-right-container">
              <i class="fa fa-arrow-circle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url()?>Manage_news"><i class="fa fa-caret-right"></i>Manage News</a></li>
            <li><a href="<?=base_url()?>Manage_news/add_news"><i class="fa fa-caret-right"></i> Add New News</a></li>
          </ul>
        </li>
          
        <li class="treeview">
          <a href="#">
            <i class="fa fa-list"></i>
            <span>Categories</span>
            <span class="pull-right-container">
              <i class="fa fa-arrow-circle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url()?>Categories"><i class="fa fa-caret-right"></i> Manage Categories</a></li>
            <li><a href="<?=base_url()?>Categories/add_categories"><i class="fa fa-caret-right"></i> Add Category</a></li>
          </ul>
        </li>
          
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-arrow-circle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url()?>Users/index"><i class="fa fa-caret-right"></i> Manage Users</a></li>
          </ul>
        </li>    
          
     
    </section>
    <!-- /.sidebar -->
  </aside>
