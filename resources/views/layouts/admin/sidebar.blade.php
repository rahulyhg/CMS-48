<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    {{ Route::is('nav') }}
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview menu-open {{ Request::is('nav/create') || Request::is('nav') || Request::is('dashboard') || Request::is('navitem') || Request::is('navitem/edit') ? 'active' : '' }} ">
                <a href="#">
                    <i class="fas fa-location-arrow mr-4"></i> <span>Navigation</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <!-- sub nav -->
                <ul class="treeview-menu">
                    <li class="{{ Request::is('nav') ? 'active' : '' }}"><a href="{{ route('navitem.index') }}"><i class="fas fa-chevron-right"></i> Main Nav</a></li>
                </ul>
            </li>
            <li class="treeview menu-open">
                <a href="#">
                    <i class="fas fa-paper-plane mr-4"></i><span>Page</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <!-- sub nav -->
                <ul class="treeview-menu">
                    <li class="{{ Request::is('page') || Request::is('page/create') ? 'active' : '' }}"><a href="{{ route('page.create') }}"><i class="fas fa-chevron-right"></i></i> Create</a></li>
                    <li class="{{ Request::is('page') ? 'active' : '' }}"><a href="{{ route('page.index') }}"><i class="fas fa-chevron-right"></i></i> All Pages</a></li>
                </ul>
            </li>
            <li class="treeview menu-open">
                <a href="#">
                    <i class="fas fa-inbox mr-4"></i> <span>Messages</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
                        <!-- sub nav -->
                <ul class="treeview-menu">
                    <li><a href="{{ route('message.index') }}"><i class="fas fa-chevron-right"></i> All Messages</a></li>
                </ul>
            </span>
                </a>
            </li>
            <li class="treeview menu-open">
                <a href="#">
                    <i class="fas fa-cogs mr-4"></i><span>Settings</span>
                    <span class="pull-right-container">
                           <i class="fa fa-angle-left pull-right"></i>
                        <!-- sub nav -->
                        <ul class="treeview-menu">
                            <li><a href="{{ route('users.index') }}"><i class="fas fa-chevron-right"></i> User</a></li>
                        </ul>
                    </span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
