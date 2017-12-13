<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href=""><i class="fa fa-dashboard fa-fw"></i>Stock Keeper Dashboard</a>
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
                        <a href="">Saved Drafts</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-shopping-cart fa-fw"></i> Procurements<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                <li>
                    <a href="">Ongoing Procurements</a>
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
<form class="form-horizontal" action="<?php echo base_url().'index.php/stock/stockDetail' ?>" method="POST">
<fieldset>

<!-- Form Name -->

<div>
    <h3><center>Goods Receive Notice</center></h3>
</div>
<div class="form-group" " >
  <label class="col-md-4 control-label" for="Purchase order ID">Purchase order ID</label>
  <div class="col-md-4">
    <input id="Purchase order ID" name="order_id" type="search" placeholder="Purchase order ID" class="form-control input-md">
    
  </div>
</div>
<br/>
  
      <div class="form-group">
  <label class="col-md-4 control-label" for="date No">Date</label>
  <div class="col-md-4">
    <input id="date No" name="date" type="date" placeholder="No." class="form-control input-md">

    
  </div>
</div>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="invoice No">invoice No</label>
  <div class="col-md-4">
    <input id="invoice No" name="invoice" type="search" placeholder="No." class="form-control input-md">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Condition</label>
  <div class="col-md-4">
    <select id="selectbasic" name="status" class="form-control">
      <option >Poor</option>
      <option >Fair</option>
      <option >Good</option>
      <option >Excellent</option>
    </select>
  </div>
</div>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Confirmed by">Confirmed by</label>
  <div class="col-md-4">
    <input id="Confirmed by" name="Confirmed_by" type="search" placeholder="name" class="form-control input-md">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Comments">Add comment</label>
  <div class="col-md-4"> 

    <textarea class="form-control" id="Comments" name="Comments"  placeholder="Comment here"  style="width: 400px"></textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>
</div>

     
</div>


