<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href=""><i class="fa fa-dashboard fa-fw"></i> Dashboard </a>
            </li>
            <li>
                <a href="#"><i class="fa fa-envelope fa-fw"></i> Purchase Requests<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    
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
                        <a href="">Review Quatations</a>
                    </li>
                     <li>
                        <a href="<?php echo base_url().'index.php/TEC/tec_review' ;?>">Quatation Calling document</a>
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
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Technical Evaluation Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           
            
            <div class="row">  <!-- main rowwww -->
              
                
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Req ID</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="For Req_id : 12<?php //echo $pr_id['pr_id']; ?>" value ="" class="form-control input-md" disabled>
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="buttondropdown">Evaluated by</label>
  <div class="col-md-4">
    <div class="input-group">
      <input id="buttondropdown" name="buttondropdown" class="form-control" placeholder="Authorized by" type="text">
      <div class="input-group-btn">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
          Select
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu pull-right" name= "auth_by">
          <li><a href="#">Mr. R.L. Kapupahana</a></li>
          <li><a href="#">Mr. D. Samarasekara</a></li>
          <li><a href="#">Mr. Perera</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="textarea" name="comments">Comments</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="textarea">Your comments</textarea>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Opinion">Opinion</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="Opinion-0">
      <input type="radio" name="decision" id="Opinion-0" value="1" checked="checked">
      Satisfactory
    </label>
    </div>
  <div class="radio">
    <label for="Opinion-1">
      <input type="radio" name="decision" id="Opinion-1" value="2">
      Need reviews
    </label>
    </div>
  <div class="radio">
    <label for="Opinion-2">
      <input type="radio" name="decision" id="Opinion-2" value="">
      Rejected
    </label>
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <script>
  function clickAlert() {
    alert("Your comments successfully submited!");
}
</script>
    <button id="" name="Submit" class="btn btn-success" onclick="clickAlert()">Submit</button>
  </div>
</div>



</fieldset>
</form>


            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->



