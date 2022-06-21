<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Dashboard</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Inter" rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="./javascriptFiles/support.js"></script>
    <script src="./javascriptFiles/addProduct.js"></script>
  </head>
  <?php
require ("database_con.php");
$sql = 'select * from newsletter';
$result = mysqli_query($conn, $sql);
$emailNewsletter = mysqli_fetch_all($result, MYSQLI_ASSOC);

$sql1 = 'select * from users';
$result1 = mysqli_query($conn, $sql1);
$users = mysqli_fetch_all($result1, MYSQLI_ASSOC);

$sql2 = 'select * from products';
$result2 = mysqli_query($conn, $sql2);
$products = mysqli_fetch_all($result2, MYSQLI_ASSOC);

?>
  
  <body>
    <?php include "./header-footer/header.php" ?>
    <div class="middle-container">
      <div class = "newsletter">
      <!-- NEWSLETTER -->
      <form action="./includes/unsubcribe.inc.php" method="POST">
      <h1>Newsletter</h1>
        <table>
          <tr>
            <th>Id</td>
            <th>Email</th>
          </tr>
        <?php foreach ($emailNewsletter as $item): ?>
              <?php

    echo "<tbody data-link='row' class='rowlink'>";
    echo "<tr>";
    echo "<td>" . $item["id"] . "</td>";
    echo "<td>" . $item["email"] . "</td>";
    echo "</tr>";
    echo "</tbody>";
?>
        <?php
endforeach; ?>
        </table>
          <div class="messageUnderNewsletter" style="display:none"></div>
          <div class="lower">
         <label  for="emailNewsletter">Email to unsubscribe:</label><br>
         <input type="text" id="emailNewsletter" name="emailNewsletter" placeholder="Insert here the email"><br>
        <button  name="unsubscribe">Delete</button>
          </div>
        </form>
     </div>
      <!-- USERS -->
      <div class="users">
      <form action="./includes/deleteUser.inc.php" method="POST">
      <h1>Users</h1>
        <table>
          <tr>
            <th>Id</td>
            <th>Username</th>
            <th>Email</th>
            <th>Description</th>
            <th>Fullname</th>
          </tr>
        <?php foreach ($users as $user): ?>
              <?php
    echo "<tbody data-link='row' class='rowlink'>";
    echo "<tr>";
    echo "<td>" . $user["id"] . "</td>";
    echo "<td>" . $user["username"] . "</td>";
    echo "<td>" . $user["email"] . "</td>";
    echo "<td>" . $user["description"] . "</td>";
    echo "<td>" . $user["fullname"] . "</td>";
    echo "</tr>";
    echo "</tbody>";
?>
        <?php
endforeach; ?>
        </table>
        <div class="messageAfterDeleteUsers" style="display:none"> </div>
        <div class="lower">
         <label  for="userId">User id account for deleting:</label><br>
         <input type="text" id="userId" name="userId" placeholder="Insert here the user id!"><br>
         <button  name="deleteAcc">Delete</button>
        </div>
      </form>
      </div>
        
      <!-- Product -->
      <div class = "Products">
        <form action="./includes/deleteProduct.inc.php" method="POST">
        <h1>Products</h1>
          <h3>All Products</h3>
          <table>
          <tr>
            <th>Id</td>
            <th>Name</th>
            <th>Size</th>
            <th>Category</th>
            
          </tr>
          <?php foreach ($products as $product): ?>
              <?php
    echo "<tbody data-link='row' class='rowlink'>";
    echo "<tr>";
    echo "<td>" . $product["id"] . "</td>";
    echo "<td>" . $product["name"] . "</td>";
    echo "<td>" . $product["size"] . "</td>";
    echo "<td>" . $product["category"] . "</td>";
    
    echo "</tr>";
    echo "</tbody>";
?>
        <?php
endforeach; ?>
        </table>
        <div class="messageAfterDeleteProduct" style="display:none"> </div>
        <div class="lower" id ="deleteProduct">
         <label  for="productId">Product id for deleting:</label><br>
         <input type="text" id="productId" name="productId" placeholder="Insert here the product id!"><br>
         <button  name="deleteProduct">Delete</button>
        </div>
        </form>
        <form>
          <div class="messageAfterInsertProduct" style="display:none"> </div>
  
          <h3>Add new product </h3> 
          <div class="form-item" >
            <input type="text" name="productName" id="name" placeholder="Enter the product name">
          </div>
          <div class="form-item">
             <input type="text" name="productCategory" id="category" placeholder="Enter the product category">
          </div>
          <div class="form-item">
             <input type="text" name="productSize" id="size" placeholder="Enter the product size">
           </div>
           <div class="form-item">
             <input type="text" name="productCalories" id="calories" placeholder="Enter the number of calories">
          </div>
         <button type="submit" name="addProduct" id="addProduct">Add Product</button > 
        </form>
      </div>
   </div>
  </body>
  <?php
if (isset($_GET["result"]))
{
    if ($_GET["result"] == "unsubscribedSuccesfully")
    {
        echo '<script>', 'putMessageAfterNewsletter("Unsubscribed succesfully!");', '</script>';
    }
    if ($_GET["result"] == "deleteAccSuccesfully")
    {
        echo '<script>', 'putMessageAfterUsers("Account deleted succesfully!!");', '</script>';
    }
    if ($_GET["result"] == "deleteProductSuccesfully")
    {
        echo '<script>', 'putMessageAfterProduct("Product deleted succesfully!!");', '</script>';
    }
    if ($_GET["result"] == "addedProductSuccesfully")
    {
        echo '<script>', 'putMessageAfterProduct("Product added succesfully!!");', '</script>';
    }

}
?>
</html>
