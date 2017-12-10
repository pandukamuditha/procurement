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

<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header">Pending Requests</h3>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<!-- /.panel-heading -->
				<div class="panel-body">
					<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th>Request ID</th>
								<th>Department</th>
								<th>Division</th>
								<th>Request Date(s)</th>
							</tr>
						</thead>
						<tbody>
							<?php
								foreach ($pending_requests as $request) {
									echo "<tr class='clickable-row' href=\"".base_url()."view/".$request->pr_id."\">";
									echo "<td>".$request->pr_id."</td>";
									echo "<td>".$request->dept_id."</td>";
									echo "<td>".$request->dept_division."</td>";
									echo "<td>".date('Y/m/d',strtotime($request->timestamp))."</td>";
									echo "</tr>";
								}
							?>
						</tbody>
					</table>
					<!-- /.table-responsive -->
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel -->
		</div>
		<!-- /.col-lg-12 -->
	</div>

<script type="text/javascript">
	jQuery(document).ready(function($) {
	$(".clickable-row").click(function() {
		window.location = $(this).data("href");
	});
});
</script>
