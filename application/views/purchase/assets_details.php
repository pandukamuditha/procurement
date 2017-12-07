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
            <form class="form-horizontal" role="form"  method="post" action="<?php echo base_url() ?>index.php/Purchase/addAssets">
        

<div class="row" style="height:40px"></div>

 
                <h2 id="pr"><u>Purchase Request-Assets Details</u></h2>
                <div class="row" style="height:20px"></div>
                <div class="form-group">
                    <label for="item_name" class="col-sm-3 control-label">Item Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="item_name" name="item_name" placeholder="Item Name" class="form-control" autofocus>
                        <?php echo form_error('item_name'); ?>
                    </div>
                </div>

                

                <div class="form-group">
                    <label for="description" class="col-sm-3 control-label">Description</label>
                    <div class="col-sm-9">
                        <textarea id="description" name="description" placeholder="Description" class="form-control" placeholder="Description" >
                        </textarea> 
                        <?php echo form_error('description'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Upload Image</label>
                    <div class="col-sm-9">
                        <input type="file" name="userfile" size="50">
                        <?php echo form_error('dept_division'); ?>
                    </div>
                    
                </div>

                

                <div class="form-group">
                    <label for="quantity" class="col-sm-3 control-label">Required Quantity</label>
                    <div class="col-sm-9">
                        <input type="text" id="quantity" name="quantity" placeholder="Quantity" class="form-control" autofocus>
                        <?php echo form_error('quantity'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="estimated_cost" class="col-sm-3 control-label">Estimated Cost</label>
                    <div class="col-sm-9">
                        <input type="text" id="estimated_cost" name="estimated_cost" placeholder="Estimated Cost" class="form-control" autofocus>
                        <?php echo form_error('estimated_cost'); ?>
                    </div>
                </div>

                <div class="form-group">
                        <label for="date_of_required" class="col-sm-3 control-label">Date of Required</label>
                        <div class="col-sm-9">
                            <input type="date"  name="date_of_required" class="form-control" placeholder="Date of Required">
                            <?php echo form_error('date_of_required'); ?>
                        </div>
                    </div>
               
   
                <div class="form-group">
                    <div class="row" style="position: relative;left:50%;">
                        <input type="submit" name="add_another" value="Add Another" class="btn btn-info" /> 
                        <input type="submit" name="send" value="Send" class="btn btn-info" /> 
                        <input type="submit" name="save_as_draft" value="Save As Draft" class="btn btn-info" /> 
                    </div>
            </form> <!-- /form -->

        </div>
<div>
    <?php echo validation_errors(); ?>
</div>
        
        </div>
        <!-- /#page-wrapper -->



