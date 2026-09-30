<?php include 'Common/Header.php';
  include 'Common/connection.php';
   
   if($_SERVER["REQUEST_METHOD"]=="POST"){
      $title=$_POST ["title"];
      $name=$_POST ["name"];
      $number=$_POST ["number"];
      $email=$_POST ["email"];
      $address=$_POST ["address"];
         $sql="INSERT INTO text (title,name,number,email,address) VALUES('$title','$name','$number','$email','$address')";  
         
         if(mysqli_query( $connection,$sql)){
            echo "new record submit successfully";
         }
         else
         {
            echo "Error";
         }
         mysqli_close($connection);
   } 
?>
<body class="hold-transition skin-blue sidebar-mini">
  <!-- Left side column. contains the logo and sidebar -->

  <?php include 'Common/aside_bar.php' ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        General Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->


    <!-- contact start -->
 
    <div class="box box-primary" style="width:86%;">
      <div class="box-header with-border">
        <h3 class="box-title">Contacts</h3>
      </div>

      <form action="" method="POST">
        <div class="row g-4" style="width: 90%; margin-left: 5%;"> 
          <!-- Title -->
         <div class="col-md-6">
  <label class="form-label fw-bold" style="font-size:18px; color:#333;">
    <i class="fas fa-user-tag me-2 text-primary"></i> Title
  </label>
  <div class="input-group shadow-sm rounded-3" style="width:80%;">
    <span class="input-group-text bg-primary text-white">
     
    </span>
    <select class="form-select form-control-lg border-0" name="title">
      <option selected disabled>-- Select Title --</option>
      <option value="Mr.">Mr.</option>
      <option value="Mrs.">Mrs.</option>
      <option value="Miss">Miss</option>
      <option value="Dr">Dr.</option>
    </select>
  </div>
</div>


            <!-- Name -->
          <div class="col-md-6"> <label class="form-label"> <i class="fas fa-user me-2"></i>Name </label> 
          <input  type="text" class="form-control form-control-lg custom-input" name="name" placeholder="Enter your name"> </div>
          <!-- Number -->
          <div class="col-md-6"> <label class="form-label"> <i class="fas fa-phone me-2"></i>Number </label> <input
              type="tel" class="form-control form-control-lg custom-input" name="number" placeholder="Enter your number"> </div>
          <!-- Email -->
          <div class="col-md-6"> <label class="form-label"> <i class="fas fa-envelope me-2"></i>Email </label> <input
              type="email" class="form-control form-control-lg custom-input" name="email" placeholder="Enter your email"> </div>
          <!-- Address -->
          <div class="col-12"> <label class="form-label"> <i class="fas fa-map-marker-alt me-2"></i>Address </label>
            <textarea class="form-control form-control-lg custom-input" rows="4" name="address"
              placeholder="Enter your address">
            </textarea>
             </div> 
            </div>
              
              <!-- Submit Button -->
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>

      <!-- contact end -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p><span class="__cf_email__"
                    data-cfemail="b2dcddc0d3f2d7cad3dfc2ded79cd1dddf">[email&#160;protected]</span></p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

  <!-- ./wrapper -->

  <?php include 'Common/Footer.php' ?>