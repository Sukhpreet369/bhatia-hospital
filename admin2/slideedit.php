<?php 
  @session_start();
  if($_SESSION['username'] == ''):
    header('location:../login.php');
  endif;
?>

<?php include_once "header.php";?>
<?php include_once "config.php";?>
<body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
    <?php include_once "sidebar.php";?>
      <!-- partial -->
      
        <!-- partial:partials/_settings-panel.html -->
        <?php include_once "top_navbar.php";?>>
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
                  <a class="pl-3 mr-4" href="#">
                    <p class="m-0">Edit Slide</p>
                  </a>
                </div>
                <a  class="btn btn-primary mt-2 mt-sm-0 btn-icon-text" href="addslide.php">
                  <i class="mdi mdi-plus-circle"></i> Add slide </a>
              </div>
            </div>
			<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <!-- <h4 class="card-title">Striped Table</h4>
					<p class="card-description"> Add class <code>.table-striped</code>
                    </p>-->
                  
                    <?php 
                         
						$sql="select * from bh_home_slider where sid=".$_GET['sid'];
                            $rs=$conn->query($sql);
                           //echo $rs->num_rows;
                           while($row = $rs->fetch_assoc())
                            {
					?>
                      <form class="forms-sample" method="post" action="uploadslide.php" enctype="multipart/form-data">
                     <!-- <div class="form-group">
                        <label for="exampleInputName1">Slide Title</label>
                        <input type="text" class="form-control" name="stitle" placeholder="Title" value="<?php echo $row['slide_title'];?>" />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Slide Text</label>
                        <input type="text" class="form-control" name="scontent" placeholder="Slide Content" value=" <?php echo $row['slide_content'];?>"/>
                      </div>-->
                      <div class="form-group">
                      <img src="<?php echo "files/".$row['imageUrl'];?>" alt="image"  width="150px" border="5"/>
                      <input type="text" name="oldimg" value="<?php echo $row['imageUrl']; ?>">  
                    </div> 
                    <div class="form-group">
                    <label>File upload</label>
                        <input type="file" name="slideimage" class="file-upload-default" />
                        <div class="input-group col-xs-12">
                          <input type="hidden" class="form-control file-upload-info" placeholder="Upload Image" />
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button"> Upload </button>
                          </span>
                        </div>
                      </div>
                      <div class="form-group">
                      <input type="text"  class="form-control" name="link" value="<?php echo $row['link']; ?>">  
                    </div>
                      <!--<div class="form-group">
                        <label for="exampleInputPassword4">Slide Button Text</label>
                        <input type="text" class="form-control" name="btntxt" placeholder="Button Text"  value="<?php echo $row['ButtonText'];?>"/>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Slide Button Url</label>
                        <input type="text" class="form-control" name="btnurl" placeholder="Button Url"  value="<?php echo $row['ButtonUrl'];?>"/>
                      </div> -->
                      <input type="hidden" value="<?php echo $row['sid'];?>" name="sid">
                                    
                      <button type="submit" class="btn btn-primary mr-2" name="submit"> Save </button>
                      
                    </form>
                    <?php }
                   
                    ?>
                    </div>
                  </div>
            </div>
        </div>
              <?php include_once "footer.php";?>

<
