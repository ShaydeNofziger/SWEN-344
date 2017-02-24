<html>
 <body>

<?php

// Author: Shayde Nofziger
// Description: Create a RESTful client to read the API from another site

if (isset($_GET["action"]) && isset($_GET["num1"]) && isset($_GET["num2"]) && $_GET["action"] == "get_sum")
{
  $sum = file_get_contents('http://www.se.rit.edu/~sln7755/SWEN-344/Examples/REST/RESTAPI.php?action=get_sum&num1=' . $_GET["num1"] . '&num2=' . $_GET["num2"]);
  $sum = json_decode($sum, true);
  ?>

  <span>Sum of <?php echo $_GET["num1"] ?> and <?php echo $_GET["num2"] ?> is <?php echo $sum ?>.</span>

  <?php
}

?>
 </body>
</html>