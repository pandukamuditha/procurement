<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href=""><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-envelope fa-fw"></i> Purchase Requests<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="flot.html">New Pruchase Request</a>
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
                        <a href="flot.html">Request Specification Sheet</a>
                    </li>
                    <li>
                        <a href="morris.html">Saved Drafts</a>
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
            

<div class="container" style="border:1px solid #cecece;">
            <form class="form-horizontal" role="form"  method="post" action="<?php echo base_url() ?>index.php/Purchase/prDetails">
                <h2><u>Purchase Request-Details</u></h2>
                <div class="row" style="height:20px"></div>
                <div class="form-group">
                        <label for="dept_id" style="float:left;padding: 6px 12px 2px 12px; width:190px;position: relative; left:70px;">Department</label>
                        <select name="dept_id" style="width:auto;" class="form-control selectWidth">
                          <option class="">Financial Dept</option>
                          <option class="">Examination Dept</option>
                          <option class="">Academic Dept</option>
                          <option class="">Statistic Dept</option>
                        </select>
               </div>

     
                    <div class="form-group">
                        <label for="dept_division" class="col-sm-3 control-label">Division/Center Name</label>
                        <div class="col-sm-9">
                            <input type="text"  name="dept_division" class="form-control">
                            <?php echo form_error('dept_division'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="request_id" class="col-sm-3 control-label">Purchase Request ID</label>
                        <div class="col-sm-9">
                            <input type="text"  name="request_id" class="form-control" placeholder="Purchase Request ID">
                            <?php echo form_error('request_id'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="location" class="col-sm-3 control-label">Requested By</label>
                        <div class="col-sm-9">
                         <input type="text"  name="location" class="form-control" placeholder="Division/Room number which Fixed Assets to be located">
                        <?php echo form_error('location'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                    <label for="purpose" class="col-sm-3 control-label">Purpose</label>
                    <div class="col-sm-9">
                        <textarea id="purpose" name="purpose" placeholder="Description" class="form-control" placeholder="Purpose" >
                        </textarea>
                        <?php echo form_error('purpose'); ?> 
                    </div>
                </div>

                    <div class="form-group">
                    <div class="row" style="position: relative;left:50%;">
                        <input type="submit" name="addassets" value="Add Asset Details" class="btn btn-info" /> 
                    </div>
        </form>
    </div>

        
        </div>
        <!-- /#page-wrapper -->



