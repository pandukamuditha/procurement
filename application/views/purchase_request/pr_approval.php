<div class="navbar-default sidebar" role="navigation">
	<div class="sidebar-nav navbar-collapse">
		<ul class="nav" id="side-menu">
			<li>
				<a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
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
						<a href="flot.html">Past Procurements</a>
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

<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header">Purchase Request Approval</h3>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
		<div class="row">
			<div class="col-lg-12">
				<div class="container-fluid">
					<div class="row" style="text-align: center;">
						<h3><b>University of Colombo School of Computing</b></h3>
						<h4><strong>No.35 Reid Avenue Colombo 00700</strong></h4>
						<div class="row" style="background:grey; height:30px">
							<h5 style="color:white">FINANCE DIVISION - PROCUREMENT BRANCH</h5>
						</div>
						<hr style="height:3px; background:black;">
					</div>

					<div class="row" style="text-align: center;">
						<h4><b><u>FIXED ASSETS/CONSUMABLES PURCHASE REQUISITION FORM</u></b></h4>
						<h5>[Items not available in the store]</h5>
					</div>
				</div>


				<div class="container-fluid middle">
					<div class="row" style="height:10px;"></div>
					<div class="row">
						<table class="table table-bordered">
							<tr>
								<td scope="row" style="width:10%"><b>Date</b></td>
								<td style="width:90%"><input type="text" name="date" class="tdata" readonly></td>
							</tr>
							<tr>
								<td scope="row"><b>Department/Division/Center Name</b></td>
								<td><input type="text" name="date" class="tdata" style="width:100%;" readonly></td>
							</tr>
						</table>
					</div>
				</div>

				<div class="row" style="height:20px;"></div>

				<div class="container-fluid middle" style="border:1px solid #cecece;">
					<h5><strong>DESCRIPTION OF THE ASSETS/ITEMS</strong></h5>
					<div class="table-responsive">
						<table class="table table-bordered table-stripped">
							<thead>
								<tr class="thead">
									<th class="col-md-1">Item No</th>
									<th class="col-md-5">Description of the Assets/Items</th>
									<th class="col-md-2">Required Quantity</th>
									<th class="col-md-2">Estimated Cost</th>
									<th class="col-md-2">Date of Required</th>
								</tr>
							</thead>
						</table>
					</div>
				</div>

				<div class="row" style="height:30px;"></div>

				<div class="container-fluid middle">
					<label for="purpose"><b>Purpose of Requirement:</b></label>
					<input type="text" name="purpose" style="width:100%;height:100%;position:relative;" readonly>
				</div>

				<div class="row" style="height:30px;"></div>

				<div class="container-fluid middle">
					<div class="row">
						<table class="table">
							<tr>
								<td style="width:30%"><b>Division/Room Number which Fixed Assets to be located:</b></td>
								<td style="width:70%"><input type="text" name="location" class="tdata" style="width:100%;height:100" readonly></td>
							</tr>
						</table>
					</div>
				</div>

				<div class="row" style="height:30px;"></div>
			</div>

		</div>
	</div>
	<div class="row ">
		<div class="col-lg-5 col-lg-offset-1"><div class="well">
			<h4>Head of Department</h4>
		</div></div>
		<div class="col-lg-5 "><div class="well">
			<h4>Director</h4>
		</div></div>
	</div>
	<div class="row ">
		<div class="col-lg-5 col-lg-offset-1"><div class="well">
			<h4>Deputy Bursar</h4>
		</div></div>
		<div class="col-lg-5 "><div class="well">
			<h4>Senior Assistant Bursar</h4>
		</div></div>
	</div>


	<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
