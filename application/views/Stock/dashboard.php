<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="<?php echo base_url()?>index.php/Stock/"><i class="fa fa-dashboard fa-fw"></i>Stock Keeper Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-envelope fa-fw"></i>GRN<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo base_url()?>index.php/Stock/newGRN">New GRN Submit</a>
                    </li>
                    <li>
                        <a href="">Saved Drafts</a>
                    </li>
                </ul>
                <!-- /.nav-second-level --> 
            </li>
            <li>
                <a href="#"><i class="fa fa-file-text fa-fw"></i> Specification Documents<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="">Request Specification Sheet</a>
                    </li>
                     <li>
                        <a href=""> View Quatation Calling document</a>
                    </li>
                    <li>
                        
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-shopping-cart fa-fw"></i> Procurements<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                <li>
                    <a href="<?php echo base_url().'index.php/TEC' ;?>">Ongoing Procurements</a>
                </li>
                    <li>
                        <a href="<?php echo base_url().'index.php/Procurements' ;?>">Past Procurements</a> 
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>


<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard - Stock Keeper</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           
            
            <div class="row">  <!-- main rowwww -->
                <div class="col-lg-10">

                    <!-- Latest Procurements in dashboard -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-tasks fa-fw"></i>
                            Latest Requests
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Invoice No</th>
                                            <th>Comments</th>
                                            <th>Data of Delivery</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                            <?php

                                            foreach ($latest_procs as $key => $row1) {
                                             echo "
                                            <tr>   
                                            <td>{$row1['order_id']}</td>
                                            <td>{$row1['invoice']}</td>
                                            <td>{$row1['Comments']}</td>
                                            <td>{$row1['date']}</td>
                                                <td><div class='col-md-4'>
                                                <a href='' button id='singlebutton' name='singlebutton' class='btn btn-primary'>View</button>
                                                </div></td> 
                                            </tr>

                                            ";}
                                            ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body --> 
                    </div>
                    <!-- /Latest Procurements in dashboard -->
                  
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-2">

                    <!-- Procurements Notification updates -->
                   
                    <!-- Procurements Notification updates -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->



