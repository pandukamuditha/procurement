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

<div class="page-wrapper">
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

        <div class="container" style="width:850px;border:1px solid #cecece;" >
   
    <div style="background: grey;height:30px;width:85%;position: relative;left:50px;">
          <h3 style="text-align: center;">University of Colombo School of Computing</h3>
    </div>

    <div class="row" style="height: 30px"></div>

    <div class="row" style="position: relative;left:30px;">
        <input type="text" name="timestamp" value="" readonly><br>
        <label for="invitationno"><b>Invitation No:</b></label>
        <b><input type="text" name="invitationno" value="<?=$quotation_details->invitation_no;?>" readonly></b>
        <p><b>The Manager</b></p>
        <input type="text" name="supplieraddress" value="<?=$quotation_details->supplier_address;?>"  style="height: 50px;" readonly>
        <p><b>Dear Sir</b></p>
    </div>

    <div class="row" style="position: relative;left:30px;">
        <p style="text-align:center;"><b><u>INVITATION OF QUOTATIONS FOR SUPPLY AND DELIVERY OF </p>
        <div class="row" style="text-align:center;">
            <input type="text" name="quantity" value="<?=$quotation_details->quantity;?>" readonly>
            <input type="text" name="itemname" value="<?=$quotation_details->item_name;?>" readonly><br>
        </div></u></b>
        <p style="text-align:center;"> The University of Colombo School of Computing hereby requests sealed quotations for the Supply & Delivery of </p><b><u><input type="text" name="quantity" value="<?=$quotation_details->quantity;?>" readonly><input type="text" name="itemname" value="<?=$quotation_details->item_name;?>" readonly></u>[Requirement form attached herewith]</b>
    </div>

    <div class="row" style="height: 30px"></div>
    
    <div class="row" style="position: relative;left:40px;">
        <p>The duly completed quotation should be sent by under registered post or deposited at Tender Box at the Finance Branch</br> 1st floor of the University of Colombo School of Computing, No 35, Reid Avenue Colombo 00700 and recieve on before 02.00 PM</p>
    </div>
        <div class="row">
            
        </div>
        <input type="text" name="duedate" value="<?=$quotation_details->due_date;?>" readonly> <b><u>"SUPPLY AND DELIVERY OF
        
            <input style="left:40px;" type="text" name="quantity" value="<?=$quotation_details->quantity;?>" readonly=""><p> </p>
            <input type="text" name="itemname" value="<?=$quotation_details->item_name;?>" readonly ></u>
            <input type="text" name="invitationno" value="<?=$quotation_details->invitation_no;?>" readonly> 
        </b>
        should be indicated in the top left hand corner of the envelop.</p>
     
     
     <div class="row" style="height: 40px"></div>
     
     <div class="row" style="position:relative;left:40px;">
         <p><b><u>NOTE:PLEASE QUOTE MOST COMPITITIVE ITEMS AND OPTIONS ARE NOT ALLOWED.</u></b></p>
     </div>
    
     <div class="row" style="position:relative;left:40px;">
        <p>Thank You</p><br>
        <p>Yours Faithfully</p><br><br>
        <p>R M Weerasiri</p>
        <p>Senior Assistant Bursor</p>
     </div>
     
     
   </div>

   <div class="container" style="width:850px;border:1px solid #cecece;" >
         <form action="<?php echo base_url().'index.php/Quotation/editQuotation' ;?>">
         <input type="submit" class="btn btn-info" name="edit" value="Edit" style="position:relative; top:22px;width: 160px;height:30px;font-size:20px;">
         </form>
    </div>


    </div>
</div>