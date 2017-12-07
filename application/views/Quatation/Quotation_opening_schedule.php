<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="<?php echo base_url().'index.php/Dashboard_main' ;?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
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
            <h3><u>Quotation Opening Schedule</u></h3>



            <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title" align="center">BIDS RECIEVED BEFORE CLOSING TIME</h3>
              </div>
              <div class="panel-body">
          <?php echo validation_errors(); ?>
          <?php echo form_open('Quotation_opening_schedule/beginQuotation'); ?>

          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Quotation Name : </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="email" placeholder="Quotation Name" name="quotation_name">
            </div>
          </div>


            <div class="form-group col-sm-6">
              <label for="exampleInputName2">Date</label>
              <input type="date" class="form-control" id="exampleInputName2" placeholder="Date" name="date">
            </div>
            <div class="form-group col-sm-6">
              <label for="exampleInputEmail2">Time</label>
              <input type="time" class="form-control" id="exampleInputEmail2" placeholder="time" name="time">
            </div>


                    <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Name of the Bidder</th>
                        <th>Quantity</th>
                                <th>Unit Price Without VAT(Rs)</th>
                                <th>Total Amount With VAT(Rs)</th>
                                <th>Remark/Brand</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td><input type="text" name="nob1"></td>
                        <td><input type="number" name="quantity1"></td>
                                <td><input type="number" name="upwv1"></td>
                                <td><input type="number" name="tawv1"></td>
                                <td><input type="text" name="brand1"></td>
                      </tr>
                      <tr>
                <td>2</td>
                <td><input type="text" name="nob2"></td>
                        <td><input type="number" name="quantity2"></td>
                                <td><input type="number" name="upwv2"></td>
                                <td><input type="number" name="tawv2"></td>
                                <td><input type="text" name="brand2"></td>
                      </tr>
                      <tr>
                <td>3</td>
                <td><input type="text" name="nob3"></td>
                        <td><input type="number" name="quantity3"></td>
                                <td><input type="number" name="upwv3"></td>
                                <td><input type="number" name="tawv3"></td>
                                <td><input type="text" name="brand3"></td>
                      </tr>
                    </tbody>
                  </table>
          <button type="submit" class="btn btn-success">SUBMIT DATA</button>
          <?php echo form_close(); ?>

              </div>
            </div>
        </div>
</div>


