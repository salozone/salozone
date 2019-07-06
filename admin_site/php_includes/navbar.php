    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Salon Management System</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
            <!-- user profile & setting & logout dropdown -->
        </ul>
        <!-- header navbar end -->


        <!-- sidebar nav start -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <!--<li>
                        <a href="#!"><i class="fa fa-product-hunt fa-fw"></i> Products <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="add-products.php">Add Products</a></li>
                            <li><a href="view-products.php">View Products</a></li>
                        </ul>
                    </li>-->
                    <li>
                        <a href="#!"><i class="fa fa-users fa-fw"></i> Customers <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <!--<li><a href="add-customer.php">Add Customer</a></li>-->
                            <li><a href="view-customer.php">View Customer</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#!"><i class="fa fa-inr fa-fw"></i> Order Products <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <!--<li><a href="add-sold.php">Add Sold</a></li>-->
                            <li><a href="view-sold.php">View Products</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>