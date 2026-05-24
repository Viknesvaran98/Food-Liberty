<?php
include 'dbConfigg.php';
session_start();
$connect = mysqli_connect("localhost", "root", "", "mainproject");
 
if(isset($_POST["add_to_cart"]))
{
 if(isset($_SESSION["shopping_cart"]))
 {
 $item_array_id = array_column($_SESSION["shopping_cart"], "excessfood_ID");
 if(!in_array($_GET["id"], $item_array_id))
 {
 $count = count($_SESSION["shopping_cart"]);
 $item_array = array(
 'item_excessfood_ID' => $_GET["id"],
 'item_excessfoodname' => $_POST["hidden_name"],
 'item_outletname' => $_POST["hidden_outletname"],
 'item_quantity' => $_POST["quantity"]
 );
 $_SESSION["shopping_cart"][$count] = $item_array;
 }
 else
 {
 echo '<script>alert("Item Already Added")</script>';
 }
 }
 else
 {
 $item_array = array(
 'item_excessfood_ID' => $_GET["id"],
 'item_excessfoodname' => $_POST["hidden_name"],
 'item_outletname' => $_POST["hidden_outletname"],
 'item_quantity' => $_POST["quantity"]
 );
 $_SESSION["shopping_cart"][0] = $item_array;
 }
}
 
if(isset($_GET["action"]))
{
 if($_GET["action"] == "delete")
 {
 foreach($_SESSION["shopping_cart"] as $keys => $values)
 {
 if($values["item_excessfood_ID"] == $_GET["id"])
 {
 unset($_SESSION["shopping_cart"][$keys]);
 echo '<script>alert("Item Removed")</script>';
 echo '<script>window.location="doneemainpage.php"</script>';
 }
 }
 }
}
 
?>
<!DOCTYPE html>
<html>
 <head>
 <title>Shopping Cart In PHP and MySql | Webdevtrick.com</title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
 <br />
 <div class="container">
 <br />
 <br />
 <br />
 <h3 align="center">Shoping Cart With PHP And MySql | Source Code By <a href="https://webdevtrick.com">Webdevtrick.com</a></h3><br />
 <br /><br />
 
   <?php
        $query = $db->query("SELECT c.* , p.* FROM donors c,excessfood p WHERE c.donor_ID=p.donor_ID");
        if($query !== false && $query->num_rows > 0)
        { 
            while($row = $query->fetch_assoc()){
        ?>
		<tr>
			
			<div class="food-menu-box">
                <div class="food-menu-img">
                    <img width="auto" src="images/<?php echo $row['excessfoodimage']?>" class="img-responsive img-curve">
                </div>
                <div class="food-menu-desc">
			<p class="food-detail"><label>Food Name: <?php echo $row['excessfoodname']; ?></label></p>
			<p class="food-detail"><label>Quantity Available: <?php echo $row['quantity']; ?></label></p>
			<p class="food-detail"><label>Posted By: <?php echo $row['donorfullname']; ?></label></p>
			<p class="food-detail"><label>Outlet's Name: <?php echo $row['outletname']; ?></label></p>
			<p class="food-detail"><label>Outlet's Address: <?php echo $row['donoraddress']; ?></label></p>
			<p class="food-detail"><label>State: <?php echo $row['dstate']; ?></label></p>
			<p class="food-detail"><label>Postcode: <?php echo $row['dpostcode']; ?></label></p>
			<p class="food-detail"><label>Contact No.: <?php echo $row['donorcontact_num']; ?></label></p>
			<p class="food-detail"><label>Posted On: <?php echo $row['postedtime']; ?></label></p>
			<p class="food-detail"><label>Food Expired by: <?php echo $row['timelimitation']; ?></label></p>
 
 <input type="text" name="quantity" value="1" class="form-control" />
 
 <input type="hidden" name="hidden_name" value="<?php echo $row["excessfoodname"]; ?>" />
 
 <input type="hidden" name="hidden_outletname" value="<?php echo $row["outletname"]; ?>" />
 
 <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
 
 </div>
 </form>
 </div>
 <?php
 }
 }
 ?>
 <div style="clear:both"></div>
 <br />
 <h3>Order Details</h3>
 <div class="table-responsive">
 <table class="table table-bordered">
 <tr>
 <th width="40%">Item Name</th>
 <th width="10%">Quantity</th>
 <th width="20%">Outlet Name</th>
 
  
 
 <th width="5%">Action</th>
 </tr>

 foreach($_SESSION["shopping_cart"] as $keys => $values)
 {
 ?>
 <tr>
 <td><?php echo $values["item_excessfoodname"]; ?></td>
 <td><?php echo $values["item_quantity"]; ?></td>
 <td>$ <?php echo $values["item_outletname"]; ?></td>
 
 <td><a href="index.php?action=delete&id=<?php echo $values["item_excessfood_ID"]; ?>"><span class="text-danger">Remove</span></a></td>
 </tr>
 
 <tr>
 
 <td></td>
 </tr>

 
 </table>
 </div>
 </div>
 </div>
 <br />
 </body>
</html>