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
	<div class="container">
		
			<div class="row" style="height: 30px"></div>
	<div class="container" style="width:700px; border: 1px solid #cecece; padding: 5px 5px 5px 5px">
		<div style="height:40px;background:grey;font-size:16px;text-align: center;"><h4 style="position:relative;top:15%;"><b>University of Colombo School of Computing</b></h4>
		</div>
		<div class="row" style="height:30px;"></div>
		<input type="text" name="currentdate" value="<?=$purchase_details->date;?>" readonly><br>
		<b><label for="invitationno">Ref No:</label></b>
		<b><input type="text" name="invitationno" value="<?=$purchase_details->ref_no;?>" readonly></b><br>
		<b>The Manager</b></br>
		<input type="text" name="suppliername" value="<?=$quotation_details->supplier_name;?>" readonly></br>
		<input style="height:30px;"  type="text" name="supplieraddress" value="<?=$quotation_details->supplier_address;?>" readonly></br>
		<b>Dear Sir</b>
		<div class="row">
			<h4 style="text-align: center;"><u>SUPPLY & DELIVERY OF <input type="text" name="itemname" value="<?=$quotation_details->item_name;?>" readonly></u></h4>
		</div>
		<p style="text-align: justify-all;">
			I am pleased to inform you that your quotation dated <input type="text" name="receieveddate" value="<?=$quotation_details->due_date;?>" readonly> has been accepted for the supply of above items to the University of Colombo School of Computing. I shall be thankful if you could supply the items mentioned below to the University of Colombo School of Computing as soon as possible.
		</p>
		
			<table class="table table-bordered">
				<tr>
				<th>Item</th>
				<th>Quantity</th>
				<th>Unit Price without vat</th>
				<th>Total Amount</th>
				</tr>
				<tr>
					<td><?=$quotation_details->item_name;?></td>
					<td><?=$purchase_details->quantity;?></td>
					<td><?=$purchase_details->unit_price;?></td>
					<td><?=$purchase_details->total_without_vat;?></td>
				</tr>
				<tr>
					<td colspan="3" style="text-align:center;"><b>GRAND TOTAL WITH VAT(Rs)</b></td>
					<td><?=$purchase_details->total_with_vat;?></td>
				</tr>

			</table>
		
		
			<p><b> Terms and Condition</b></p>
			<li>Items should be according to your quotation in good condition</li>
			<li>Should be delivered within 07 days of date of purchase order</li>
			<li>Delivery point:<input type="text" name="location"></li></br>

			<p>Thanking You</p>
			<p>Yours Faithfully You</p></br>
			<div class="row" style="height:30px;"></div>
			<p>R M Weerasiri</p>
			<p>Senior Assistant Bursar</p></br>
		
	</div>
	<div class="row" style="height: 30px"></div>

	<div class="container" style="width:850px;border:1px solid #cecece;" >
         <form action="<?php echo base_url().'index.php/Purchase_order/editPurchaseOrder' ;?>">
         <input type="submit" class="btn btn-info" name="edit" value="Edit" style="position:relative; top:22px;width: 160px;height:30px;font-size:20px;">
         </form>
    </div>

	</div>
</div>