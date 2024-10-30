<table width="100%" cellpadding="3">
   <?php
   if (!isset($_SESSION['login'])) {
   ?>
       <tr>
           <td>
              <!-- <hr /> -->
            </td>
       </tr>
   <?php
   } else {
       echo "<td><h3>Welcome, {$_SESSION['login']}</h3></td>\n";
   ?>
       <tr>
           <td><img src="images/home.png" alt="Home Icon" width="12" height="12">&nbsp;<a href="index.php"><strong>Home</strong></a></td>
       </tr>
       <tr>
           <td><img src="images/categories.png" alt="Categories Icon" width="12" height="12">&nbsp;
           <strong>Categories</strong></td>
       </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=listcategories">
                   <strong>List Categories</strong></a></td>
       </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=newcategory">
                   <strong>Add New Category</strong></a></td>
       </tr>
       <tr>
           <td><img src="images/items.png" alt="Items Icon" width="12" height="12">&nbsp;<strong>Items</strong></td>
       </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=listitems">
                   <strong>List Items</strong></a></td>
       </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=newitem">
                   <strong>Add New Item</strong></a></td>
       </tr>
       <tr>
           <td>
               <hr />
           </td>
       </tr>
       <tr>
           <td><a href="index.php?content=logout">
           <img src="images/logout.png" alt="Logout Icon" width="12" height="12"></a>&nbsp;<strong>Logout</strong></a></td>
       </tr>
       <tr>
           <td>&nbsp;</td>
       </tr>
       <tr>
           <td>
               <form action="index.php" method="post">
                   <label>Search for Item:</label><br>
                   <input type="text" name="itemID" size="14" />
                   <input type="submit" value="find" />
                   <input type="hidden" name="content" value="updateitem">
                   </form>
           </td>
       </tr>
       <tr>
           <td>
               <form action="index.php" method="post">
                   <label>Search for Category:</label><br>
                   <input type="text" name="categoryID" size="14" />
                   <input type="submit" value="find" />
                   <input type="hidden" name="content" value="displaycategory">
               </form>
           </td>
       </tr>
   <?php
   }
   ?>
</table>
