<aside class="left-side">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo $profile_pic; ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?php echo $fname; ?></p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="./"><i class="fa fa-home"></i> Home</a></li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-bar-chart-o"></i>
                <span>Financials</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="?do=mydeposits"><i class="fa fa-angle-double-right"></i> Deposits</a></li>
                <li><a href="?do=mypenalties"><i class="fa fa-angle-double-right"></i> Penalties</a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-money"></i>
                <span>Investments</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="?do=myinvestments"><i class="fa fa-angle-double-right"></i> General</a></li>
                
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i> <span>Reports</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="?do=financialreport"><i class="fa fa-angle-double-right"></i> Financial</a></li>
                <li><a href="?do=investmentreport"><i class="fa fa-angle-double-right"></i> Investments</a></li>
              </ul>
            </li>
            
            <li>
              <a href="?do=docs">
                <i class="fa fa-folder"></i> <span>Documents</span> <small class="label pull-right bg-green">new</small>
              </a>
            </li>
                    
            <li>
              <a href="?do=mycalendar">
                <i class="fa fa-calendar"></i> <span>Calendar</span>
                <small class="label pull-right bg-red">3</small>
              </a>
            </li>
            <li>
              <a href="?do=mymailbox">
                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                <small class="label pull-right bg-yellow">12</small>
              </a>
            </li>
            
            
            <li><a href="documentation/index.html"><i class="fa fa-book"></i> Help</a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>