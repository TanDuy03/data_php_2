
<?php 
   session_start();
   if(isset($_SESSION['role'])&&($_SESSION['role'])==1){
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin</title>
   <link rel="shortcut icon" type="image/icon" href="<?php echo base_url?>/public/images/logo/favicon.png" />
   <!-- bootstrap css -->
   <link rel="stylesheet" href="<?php echo base_url?>/public/Admin/css/bootstrap.min.css" />
   <!-- site css -->
   <link rel="stylesheet" href="<?php echo base_url?>/public/Admin/style.css" />
   <!-- responsive css -->
   <link rel="stylesheet" href="<?php echo base_url?>/public/Admin/css/responsive.css" />
   <!-- color css -->
   <link rel="stylesheet" href="<?php echo base_url?>/public/Admin/css/colors.css" />
   <!-- select bootstrap -->
   <link rel="stylesheet" href="<?php echo base_url?>/public/Admin/css/bootstrap-select.css" />
   <!-- scrollbar css -->
   <link rel="stylesheet" href="<?php echo base_url?>/public/Admin/css/perfect-scrollbar.css" />
   <!-- custom css -->
   <link rel="stylesheet" href="<?php echo base_url?>/public/Admin/css/custom.css" />
   <!-- calendar file css -->
   <link rel="stylesheet" href="<?php echo base_url?>/public/Admin/js/semantic.min.css" />
   <!-- angular js file   -->
   <script src="<?php echo base_url?>/public/Admin/js/angular.min.js"></script>
</head>
<body>
   <!--  -->
   <div class="full_container">
      <div class="inner_container">
         <!-- Sidebar  -->
         <nav id="sidebar">
            <div class="sidebar_blog_1">
               <div class="sidebar-header">
                  <div class="logo_section">
                     <a href="index.html"><img class="logo_icon img-responsive" src="<?php echo base_url?>/public/Admin/images/logo/logo_icon.png" alt="#" /></a>
                  </div>
               </div>
               <div class="sidebar_user_info">
                  <div class="icon_setting"></div>
                  <div class="user_profle_side">
                     <div class="user_img"><img class="img-responsive" src="<?php echo base_url?>/public/Admin/images/logo2.jpg" alt="#" /></div>
                     <div class="user_info">
                        <h6>Tan Duy</h6>
                        <p><span class="online_animation"></span> Online</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="sidebar_blog_2">
               <h4>General</h4>
               <ul class="list-unstyled components">
                  <li><a href="<?php echo base_url;?>/admin"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a></li>
                  <li><a href="<?php echo base_url;?>/product"><i class="fa fa-gift orange_color"></i> <span>Product</span></a></li>
                  <li>
                     <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-diamond purple_color"></i> <span>Elements</span></a>
                     <ul class="collapse list-unstyled" id="element">
                        <li><a href="#">> <span>General Elements</span></a></li>
                        <li><a href="#">> <span>Media Gallery</span></a></li>
                        <li><a href="#">> <span>Icons</span></a></li>
                        <li><a href="#">> <span>Invoice</span></a></li>
                     </ul>
                  </li>
                  <li><a href="#"><i class="fa fa-table purple_color2"></i> <span>Tables</span></a></li>
                  <li>
                     <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-object-group blue2_color"></i> <span>Apps</span></a>
                     <ul class="collapse list-unstyled" id="apps">
                        <li><a href="#">> <span>Email</span></a></li>
                        <li><a href="#">> <span>Calendar</span></a></li>
                        <li><a href="#">> <span>Media Gallery</span></a></li>
                     </ul>
                  </li>
                  <li><a href="#"><i class="fa fa-briefcase blue1_color"></i> <span>Pricing Tables</span></a></li>
                  <li>
                     <a href="#">
                     <i class="fa fa-paper-plane red_color"></i> <span>Contact</span></a>
                  </li>
                  <li class="active">
                     <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Additional Pages</span></a>
                     <ul class="collapse list-unstyled" id="additional_page">
                        <li>
                           <a href="#">> <span>Profile</span></a>
                        </li>
                        <li>
                           <a href="#">> <span>Projects</span></a>
                        </li>
                        <li>
                           <a href="#">> <span>Login</span></a>
                        </li>
                        <li>
                           <a href="#">> <span>404 Error</span></a>
                        </li>
                     </ul>
                  </li>
                  <li><a href="#"><i class="fa fa-map purple_color2"></i> <span>Map</span></a></li>
                  <li><a href="#"><i class="fa fa-bar-chart-o green_color"></i> <span>Charts</span></a></li>
                  <li><a href="#"><i class="fa fa-cog yellow_color"></i> <span>Settings</span></a></li>
               </ul>
            </div>
         </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           <a href="#"></a>
                        </div>
                        <div class="right_topbar">
                            <div class="icon_info">
                                <ul>
                                    <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                    <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                    <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                                </ul>
                                <ul class="user_profile_dd">
                                    <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="<?php echo base_url?>/public/Admin/images/logo2.jpg" alt="#" /><span class="name_user"><?php echo $_SESSION['user']?></span></a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">My Profile</a>
                                        <a class="dropdown-item" href="#">Settings</a>
                                        <a class="dropdown-item" href="#">Help</a>
                                        <a class="dropdown-item" href="<?php echo base_url?>/logout"><span>Log Out </span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                           <div class="col-md-12">
                              <div class="page_title">
                                 <h2>Dashboard</h2>
                              </div>
                           </div>
                     </div>
                     <div class="row column1">
                           <div class="col-md-12">
                              <div class="white_shd full margin_bottom_30">
                                 <div class="full graph_head">
                                       <div class="heading1 margin_0">
                                          <h2>Dashboard <small>(Default)</small></h2>
                                       </div>
                                 </div>
                                 <div class="map_section padding_infor_info">
                                       <div class="map m_style1">
                                          <div id="">{{content}}</div>
                                       </div>
                                 </div>
                              </div>
                           </div>
                     </div>
                  </div>
                  <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                     <p>Copyright © 2023 - Designed by Tan Duy. All rights reserved.</p>
                  </div>
               </div>
            </div>
            <!-- end dashboard inner -->
        </div>
      </div>
   </div>

   <!--  -->
   <script src="<?php echo base_url?>/public/Admin/js/jquery.min.js"></script>
   <script src="<?php echo base_url?>/public/Admin/js/popper.min.js"></script>
   <script src="<?php echo base_url?>/public/Admin/js/bootstrap.min.js"></script>
   <!-- wow animation -->
   <script src="<?php echo base_url?>/public/Admin/js/animate.js"></script>
   <!-- select country -->
   <script src="<?php echo base_url?>/public/Admin/js/bootstrap-select.js"></script>
   <!-- owl carousel -->
   <script src="<?php echo base_url?>/public/Admin/js/owl.carousel.js"></script> 
   <!-- nice scrollbar -->
   <script src="<?php echo base_url?>/public/Admin/js/perfect-scrollbar.min.js"></script>
   <!-- custom js -->
   <script src="<?php echo base_url?>/public/Admin/js/custom.js"></script>
   <!-- google map js -->
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
   <!-- end google map js -->
</body>
</html>
<?php }else{
   // echo "<script> alert('bạn không có quyền truy cập vào đây') </script>";
   header("Location: /larava/error.php");
}?>