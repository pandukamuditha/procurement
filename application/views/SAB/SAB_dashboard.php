<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href=""><i class="fa fa-dashboard fa-fw"></i> Dashboard </a>
            </li>
            <li>
                <a href="#"><i class="fa fa-envelope fa-fw"></i> Purchase Requests<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo base_url()?>index.php/new_purchase_request">New Pruchase Request</a>
                    </li>
                    <li>
                        <a href="morris.html">Saved Drafts</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-file-text fa-fw"></i> Specification Documents<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                     <li>
                        <a href="<?php echo base_url().'index.php/Quotation/newQuotation' ;?>">Quatation Calling document</a>
                    </li>

                    <li>
                        <a href="<?php echo base_url().'index.php/Purchase_order/purchaseOrder';?>">Create Purchase Order</a>
                    </li>

                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-shopping-cart fa-fw"></i> Procurements<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                <li>
                    <a href="morris.html">Ongoing Procurements</a>
                </li>
                    <li>
                        <a href="<?php echo base_url().'index.php/procurements' ;?>">Past Procurements</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="<?php echo base_url().'index.php/Quotation_opening_schedule';?>"><i class="fa fa-shopping-cart fa-fw"></i> Quotation Opening<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                <li>
                    <a href="<?php echo base_url().'index.php/Quotation_opening_schedule';?>">Quotation Opening</a>
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
                    <h1 class="page-header">Senior Assistant Bursar</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->


            <div class="row">  <!-- main rowwww -->
                <div class="col-lg-8">

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
                                            <th>Req. ID</th>
                                            <th>Department</th>
                                            <th>Items</th>
                                            <th>Requested on</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                            <?php

                                            foreach ($latest_procs as $key => $row1) {
                                             echo "
                                            <tr>
                                            <td>{$row1['pr_id']}</td>
                                            <td>{$row1['dept_id']}</td>
                                            <td>{$row1['dept_division']}</td>
                                            <td>{$row1['timestamp']}</td>
                                                <td><div class='col-md-4'>

                                                <a href='TEC/tec_review/pr_id={$row1['pr_id']}' button id='singlebutton' name='singlebutton' class='btn btn-warning'>Review Req.</button>

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
                <div class="col-lg-4">

                    <!-- Procurements Notification updates -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i>
                         Alerts
                        </div>
                        <!-- /.panel-heading -->

                        <div class="panel-body">
                            <?php

                            foreach ($pr_alert as $key => $row2) {
                                echo "

                                <div class='alert alert-info alert-success'>
                                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                                    <b>Req ID : {$row2['pr_id']},</b> Items : {$row2['item_name']} -  requested by {$row2['dept_division']}<a href='Purchase/view_apprv/pr_id={$row2['pr_id']}' class='alert-link'>Review</a>.

                                </div>";
                            }?>
                        </div>
                        <!-- .panel-body -->

                    </div>
                    <!-- Procurements Notification updates -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div>Purchase Order</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url().'index.php/Purchase_order/purchaseOrder';?>">
                            <div class="panel-footer">
                                <span class="pull-left">Create Now</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
