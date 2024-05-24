<?php
   $user=$_SESSION['user'];
?>




<div class="dashboard_sidebar" id="dashboard_sidebar">
        <h3 class="dashboard_logo" id="dashboard_logo">AMS</h3>
        <div class="dashboard_sidebar_user">
            <a href="" ><i class="fa fa-user" id="userimg"></i></a>
            <span style="font-weight: bold;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;text-decoration:capitalize;">Admin</span>
        </div>
        <div class="dashboard_sidebar_menus">
            <ul class="dashboard_menu_lists">
                <!--class="menuActive"-->
                <li class="liMainMenu" >
                    <a href="./dashboard.php"><i class="fa fa-dashboard "></i><span class="menuText">    Dashboard</span></a>
                </li>
                <li class="liMainMenu">
                <a href="javascript:void(0);" class="showHideSubMenu" > 
                       <i class="fa fa-tag showHideSubMenu" ></i>
                       <span class="menuText showHideSubMenu" >   Products </span>
                       <i class="fa fa-angle-left mainMenuIconArrow showHideSubMenu" ></i>
                    </a>
                    <ul class="subMenus" >
                       <li><a class="subMenuLink" href="./product-view.php"><i class="fa fa-circle-o"></i> View Product</a></li>
                       <li><a class="subMenuLink" href="./product-add.php"><i class="fa fa-circle-o"></i> Add Product</a></li>
                    </ul>
                </li>
                <li class="liMainMenu showHideSubMenu" >
                    <a href="javascript:void(0);" class="showHideSubMenu" > 
                       <i class="fa fa-user-plus showHideSubMenu" ></i>
                       <span class="menuText showHideSubMenu" >    User Management</span>
                       <i class="fa fa-angle-left mainMenuIconArrow showHideSubMenu" ></i>
                    </a>
                    <ul class="subMenus" >
                       <li><a class="subMenuLink" href="./users-view.php"><i class="fa fa-circle-o"></i> View Users</a></li>
                       <li><a class="subMenuLink" href="./users-add.php"><i class="fa fa-circle-o"></i> Add Users</a></li>
                    </ul>
                </li>   
            </ul>
        </div>
      </div>