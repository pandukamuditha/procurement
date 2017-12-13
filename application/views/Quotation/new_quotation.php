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
       <div class="container">
    
            <div class="row">
        <div class="col-md-6">
            <h2>New Quotation</h2>
            <form action="<?php echo base_url()?>index.php/Quotation/insertQuotation" method="post">
                <div class="form-group">
                    <label for="request id">Request ID</label>
                    <input type="text" class="form-control" name="requestid" style="height: 30px" >
                    <?php echo form_error('requestid')?>
                </div>
                <div class="form-group">
                    <label for="invitationno">Invitation No</label>
                    <input type="text" class="form-control" name="invitationno" style="height: 30px">
                    <?php echo form_error('invitationno')?>
                </div>
                <div class="form-group">
                    <label for="supplier name">Supplier Name</label>
                    <input type="text" class="form-control" name="suppliername" style="height: 30px">
                    <?php echo form_error('suppliername')?>
                </div>
                <div class="form-group">
                    <label for="supplieraddress">Supplier Address</label>
                    <input type="text area" class="form-control" name="supplieraddress" style="height: 30px"/>
                    <?php echo form_error('supplieraddress')?>
                </div>
                <div class="form-group">
                    <label for="itemname">Item Name</label>
                    <input type="text" class="form-control" name="itemname" style="height: 30px">
                    <?php echo form_error('itemname')?>
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="text" class="form-control" name="quantity" style="height: 30px">
                    <?php echo form_error('quantity')?>
                </div>
                <div class="form-group">
                        <label for="date">Due Date</label>
                        <input type="date" class="form-control" id="date" name="date" style="height: 30px">
                        <?php echo form_error('date')?>
                </div> 
                <div class="row">
                <div class="col-xs-12">
                    <hr style="border:1px dashed #dddddd;">
                    <input type="submit" name="insert" value="submit">
                </div>                
            </div>               
            
            </form>
        </div>
    </div>

    
        </div>
     
</div>


