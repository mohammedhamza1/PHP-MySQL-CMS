<?php session_start(); ?>
<?php
include_once("../includes/layout/header.php");
include_once("../includes/session.php");
include_once("../includes/layout/function.php");
include_once("../includes/layout/connectdb.php");

if (isset($_GET['menu'])) {
  $menu_id = $_GET['menu'];
  $page_id = null;

}elseif (isset($_GET['page'])) {
  $page_id = $_GET['page'];
  $menu_id = null;

}else{
  $page_id = null;
  $menu_id = null;
}


?>
  <head>
       <title>management page</title>
  </head>
  <body>
   <div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
 
<ul>
                <li  >
                    <a href="">
                        CMS
                    </a>
                </li>
                 
                    <?php 
$query = "SELECT * FROM `website_navbar` ";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {

          while($row = mysqli_fetch_assoc($result)) {
           ?>

<li class="active"><a href="manage_content.php?menu=<?php echo $row["id"];?> "><?php echo $row["item_name"];?> </a>

             <?php 
$query1 = "SELECT * FROM `pages`  WHERE `pages`.`item_name_id`= ".$row["id"];
$result1 = mysqli_query($conn, $query1);
if (mysqli_num_rows($result1) > 0) {

          while($row1 = mysqli_fetch_assoc($result1)) {
           ?>
 <ul  >
               
            <li><a href="manage_content.php?menu=<?php echo $row["id"];?>/page=<?php echo $row1["id"];?> "><h3><?php echo $row1["page_name"]; ?>  </h3></a></li>
           
             
              </ul>
<?php
          }
          }
 
          
          ?>


</li>

<?php
          }
          }
  mysqli_free_result($result);
          
          ?>

               
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
  
  </div>
</div>

 
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; NAVBAR</span>

<script>
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}
</script>






<div class="container">
  <div class="row">
    <div class="col-sm-2">
      
    </div>
    <div class="col-sm-10">

     <div class="panel panel-default">
      <div class="panel-heading">Menu and Page tools</div>
         <div class="panel-body">
            <a href="create_menu.php" type="button" class="btn btn-danger btn-lg">
            <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Create new menu
            </a>
        </div>
      </div>
    </div>
  </div>
</div>





               
           





<div class="container">
  <div class="row">
    <div class="col-sm-2">
      
   <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">


  <?php 
$query = "SELECT * FROM `website_navbar` ";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
  ?>


  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $row["id"];?>" aria-expanded="true" aria-controls="collapseOne">
          <?php echo $row["item_name"];?>
        </a>
      </h4>
    </div>
    <div id="<?php echo $row["id"];?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">

        <a href="manage_content.php?menu=<?php echo $row["id"];?>"><h4><?php echo $row["item_name"];?></h4></a>

   <?php 
      $query1 = "SELECT * FROM `pages`  WHERE `pages`.`item_name_id`= ".$row["id"];
      $result1 = mysqli_query($conn, $query1);
      if (mysqli_num_rows($result1) > 0) {
        while($row1 = mysqli_fetch_assoc($result1)) {
      ?>

       <ul>      
            <li><a href="manage_content.php?page=<?php echo $row1["id"];?> "><h5><?php echo $row1["page_name"]; ?>  </h5></a></li>      
      </ul>

<?php
    }  }
   ?>


</li>

      </div>
    </div>
  </div>
  
<?php
          }
          }
  mysqli_free_result($result);
          
          ?>

</div>

    </div>

    <?php if ($menu_id || $page_id) { ?>
    <div class="col-sm-10">
        <div class="panel panel-info">
          <div class="panel-heading">
          <?php } ?>
              <?php
              if ($menu_id) {
                 $query = "SELECT * FROM `website_navbar` WHERE id =".$menu_id;
                  $result = mysqli_query($conn, $query);
                  if (mysqli_num_rows($result) > 0) {

                    while($row = mysqli_fetch_assoc($result)) {
                      echo $row["item_name"];
                         } 
                       }
                     }elseif ($page_id) {
                       $query1 = "SELECT * FROM `pages`  WHERE id =".$page_id;
                      $result1 = mysqli_query($conn, $query1);
                      if (mysqli_num_rows($result1) > 0) {

                    while($row1 = mysqli_fetch_assoc($result1)) {
                      echo $row1["page_name"];
               ?>
              
         </div>
            <div class="panel-body">
               <?php echo $row1["content"]; ?>
            </div>
            <?php }}} ?>
     
</div>
    </div>
  </div>
</div>












<?php 
include("../includes/layout/footer.php");
 ?>