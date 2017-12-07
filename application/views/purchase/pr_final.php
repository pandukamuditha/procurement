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
    <div class="row" style="text-align: center;">
        <h3><b>University of Colombo School of Computing</b></h3>
        <h4><strong>No.35 Reid Avenue Colombo 00700</strong></h4>
        <div class="row" style="background:grey; height:30px">
            <h4 style="color:white">FINANCE DIVISION-PROCUREMENT BRANCH</h4>
        </div>
        <hr style="height:3px; background:black;">
    </div>

    <div class="row" style="text-align: center;">
        <h4><b><u>FIXED ASSETS/CONSUMABLES PURCHASE REQUISITION FORM</u></b></h4>
        <h5>[Items not available in the store]</h5>
    </div>
</div>


<div class="container middle" >
    <div class="row" style="height:10px;"></div>
    <div class="row">
        <table class="table table-bordered">
            <tr>
                <td scope="row"><b>Date</b></td>
                <td><input type="text" name="date" class="tdata"   readonly></td>
            </tr>
            <tr>
                <td scope="row"><b>Department/Division/Center Name</b></td>
                <td><input type="text" name="date" class="tdata" style="width:800px;" value="<?=$dept_details->dept_division;?>" readonly></td>
            </tr>
        </table>
    </div>
</div>

<div class="row" style="height:20px;"></div>
<div class="container middle" style="border:1px solid #cecece;">
    <h5><strong>DESCRIPTION OF THE ASSETS/ITEMS</strong></h5>
    <table class="table table-bordered" >
      <thead>
        <tr class="thead" >
          <th class="col-md-1">Item No</th>
          <th class="col-md-5">Description of the Assets/Items</th>
          <th class="col-md-2">Required Quantity</th>
          <th class="col-md-2">Estimated Cost</th>
          <th class="col-md-2">Date of Required</th>
        </tr>
      </thead>
      <?php
         foreach ($asset_details as $row) {
        ?>
        
         <tr readonly>
            <td ><?php echo $row->item_name;?></td>
            <td ><?php echo $row->description;?></td>
            <td><?php echo $row->quantity;?></td>
            <td><?php echo $row->estimated_cost;?></td>
            <td><?php echo $row->date_of_required;?></td>
         </tr>
     <?php
      }
      ?> 
      
    </table>
    <div class="container middle">
    <label for="purpose"><b>Purpose of Requirement:</b></label>
    <input type="text" name="purpose" value="<?=$dept_details->purpose;?>" style="width:800px;height:50px;position:relative;top:30px;" readonly>
    
    </div>
    <div class="row" style="height:50px;"></div>

    <div class="container middle">
        <div class="row">
        <table class="table">
            <tr>
                <td><b>Division/Room Number which Fixed Assets to be located:</b></td>
                <td><input type="text" name="location" value="<?=$dept_details->location;?>"    class="tdata" style="width:700px;" readonly></td>
            </tr>
        </table>
        </div>
    </div>
     
</div>



<div class="row" style="height:30px;"></div>

<div class="row" style="height:30px;"></div>
<div class="container middle">
    <div class="row">
        <div class="col-md-2">
            <label>HOD</label><div>
             <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"> Approve</button>
           </div>
          <!-- Modal -->
              <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Add Comments</h4>
                    </div>
                    <div class="modal-body">
                        <label for="comments"></label>
                        <textarea name="comments" cols="100" rows="20"></textarea>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default">Approve</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
        </div>

        
        <div class="col-md-2">
            <label>Director/UCSC</label>
             <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"> Add Comments</button>

          <!-- Modal -->
              <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Add Comments</h4>
                    </div>
                    <div class="modal-body">
                        <label for="comments"></label>
                        <textarea name="comments" cols="100" rows="20"></textarea>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default">Accept</button>
                      <button type="button" class="btn btn-default">Decline</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <div class="col-md-2">
            <label>Deputy Bursar</label>
             <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"> Add Comments</button>

          <!-- Modal -->
              <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Add Comments</h4>
                    </div>
                    <div class="modal-body">
                        <label for="comments"></label>
                        <textarea name="comments" cols="100" rows="20"></textarea>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default">Accept</button>
                      <button type="button" class="btn btn-default">Decline</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <div class="col-md-2">
            <label>Senior Assistant Bursar</label>
             <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"> Add Comments</button>

          <!-- Modal -->
              <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Add Comments</h4>
                    </div>
                    <div class="modal-body">
                        <label for="comments"></label>
                        <textarea name="comments" cols="100" rows="20"></textarea>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default">Accept</button>
                      <button type="button" class="btn btn-default">Decline</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
    </div>
    
    
    <div class="row" style="height:50px;"></div>


        
        </div>
        <!-- /#page-wrapper -->



