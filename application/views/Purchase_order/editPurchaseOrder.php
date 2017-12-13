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


<div id="page-wrapper">
       <div class="container-fluid" style="border: 1px solid black">   
       
            <div class="row">
            <div class="col-md-6">
            <div class="row" style="height: 40px"></div>
            <h2>Purchase Order Details</h2>
            <form action="<?php echo base_url()?>index.php/Purchase_order/updatePurchaseOrder" method="post">
                <div class="form-group">
                    <label for="refno">Reference No</label>
                    <input type="text" class="form-control" name="refno" value="<?=$purchase_details->ref_no;?>" style="height: 30px">
                    <?php echo form_error('refno');?>
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="text" class="form-control" name="quantity" value="<?=$purchase_details->quantity;?>" style="height: 30px">
                    <?php echo form_error('quantity');?>
                </div>
                <div class="form-group">
                    <label for="unitprice">Unit Price</label>
                    <input type="text" class="form-control" name="unitprice" value="<?=$purchase_details->unit_price;?>" style="height: 30px">
                    <?php echo form_error('unitprice');?>
                </div>
                <div class="form-group">
                    <label for="vatrate">Vat Rate</label>
                    <input type="text area" class="form-control" name="vatrate" value="<?=$purchase_details->vat_rate;?>" style="height: 30px">
                    <?php echo form_error('vatrate');?>
                </div>
                <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" id="date" name="date" value="<?=$purchase_details->date;?>" style="height: 30px">
                        <?php echo form_error('date');?>
                </div> 
                <div class="row">
                <div class="col-xs-12">
                    <hr style="border:1px dashed #dddddd;">
                    <input type="submit" name="insert" value="Update">
                </div>                
                </div>               
            
            </form>
        </div>
        </div>
    </div>
</div>