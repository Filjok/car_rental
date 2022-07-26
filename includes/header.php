
<header>
  <div class="default-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2">
          
        </div>
        <div class="col-sm-8 col-md-10">
          <div class="header_info">
            <div class="header_widgets">
   <?php   if(strlen($_SESSION['login'])==0)
	{
?>
 
<?php }
else{


 } ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">
        <div class="user_login">
          <ul>
            
<?php
$email=$_SESSION['login'];
$sql ="SELECT FullName FROM tblusers WHERE EmailId=:email ";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
	{

	}}?>
           <?php if($_SESSION['login']){?>
            
             
            
            <?php } else { ?>
            
              
           
            <?php } ?>
          </ul>
            </li>
          </ul>
        </div>
        
      </div>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a>    </li>

         
          <li><a href="#recentcar">Car Listing</a></li>
          <li><a href="my-booking.php">My Booking</a></li>
         
         
         <?php   if(strlen($_SESSION['login'])==0)
	{
?>
 <li><a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">login</a></li>
<?php }
else{
  
  
 } ?>
  <li><a href="logout.php">Sign Out</a></li>
  

        </ul>
      </div>
    </div>
    
  </nav>
  

</header>
