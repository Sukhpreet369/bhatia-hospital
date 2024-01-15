<?php 
  @session_start();
  if($_SESSION['username'] == ''):
    header('location:../login.php');
  endif;
?>

<?php include_once "header.php"; ?>
<?php include_once "config.php"; ?>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
    <?php include_once "sidebar.php";?>
      <!-- partial -->
      
        <!-- partial:partials/_settings-panel.html -->
        <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
		
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-default-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div>Default
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles default primary"></div>
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles light"></div>
          </div>
        </div>
		
       
<div class="main-panel">
			<div class="content-wrapper pb-0">
				<div class="page-header flex-wrap">
				  <div class="header-left">
				
				  </div>
				  <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
					<div class="d-flex align-items-center">
					  <a href="index.php">
						<p class="m-0 pr-3">Dashboard</p>
					  </a>
					  <a class="pl-3 mr-4" href="department.php">
						<p class="m-0">Department</p>
					  </a>
					</div>
					<a  class="btn btn-primary mt-2 mt-sm-0 btn-icon-text" href="adddepartment.php">
					  <i class="mdi mdi-plus-circle"></i> Add Department </a>
				  </div>
				</div>
			<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Department  Img</th>
                            <th>Department Title</th>							
							              <th>Department dess</th>
                            <th>Treatments</th>											
                            <th colspan="2">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                            $sql="select * from department";
                            $rs=$conn->query($sql);
                           while($row = $rs->fetch_assoc())
                            {
                          ?>
                          <tr>
                            <td class="dep"><img src="files/<?php echo $row['dep_feat_img']; ?>" width="100px"></div></td>
              							<td><?php echo $row['dep_title']; ?></td>
              							<td><div class="dess"><?php echo htmlspecialchars_decode($row['dep_des']); ?></div></td>
                            <td><div class="dess"><?php echo htmlspecialchars_decode($row['treatments']); ?></div></td>
              							<td><a href="departmentedit.php?dp=<?php echo $row['dep_id'];?>">Edit</a></td>
              							<td><a href="deletedepartment.php?dp=<?php echo $row['dep_id'];?>">Delete</a></td>
                          </tr>
                          <?php 
                            }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <?php include_once "footer.php";?>