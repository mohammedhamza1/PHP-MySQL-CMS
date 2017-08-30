<?php
include("../includes/layout/header.php");
include_once("../includes/layout/function.php");
include_once("../includes/layout/connectdb.php");

?>

  <head>
      <title>Admin page</title>
  </head>
  <body>
    <div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
 
<ul  >
                <li  >
                    <a href="#">
                        CMS
                    </a>
                </li>
                 
                    <?php 
$query = "SELECT * FROM `website_navbar` WHERE visible=1";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {

          while($row = mysqli_fetch_assoc($result)) {
           ?>

<li class="active"><a href="admins.php"><?php echo   $row["item_name"];  ?> </a>

             <?php 
$query1 = "SELECT * FROM `pages`  WHERE visible=1 AND `pages`.`item_name_id`= ".$row["id"];
$result1 = mysqli_query($conn, $query1);
if (mysqli_num_rows($result1) > 0) {

          while($row1 = mysqli_fetch_assoc($result1)) {
           ?>
 <ul  >
               
            <li><a href="admins.php"> <?php echo   $row1["page_name"];  ?>  </a></li>
           
             
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

 <div class="container-fluid space1">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="row">
        <div class="col-lg-12">
      
      <div class="container">
        <h1>Admin Area</h1>
        <p>Welcome to your Control Panel.</p>
         <p>
        <a type="button" class="btn btn-lg btn-danger" href="manage_content.php">Management content</a>
        <a type="button" class="btn btn-lg btn-primary" href="admin.php">Admins</a>
        <a type="button" class="btn btn-lg btn-success" href="logout.php">Logout</a>
        </p>

      </div>
      </div>
    </div>

</div>





<?php 
include("../includes/layout/footer.php");
 ?>








