<?php

// Author: Shayde Nofziger
// Description: Create a RESTful API to be used by another page or site.

function get_sum($num1, $num2)
{
  return $num1 + $num2;
}

// Define the possible URLs which the page can be accessed from
$possible_url = array("get_sum");

// Create a default error string
$value = "An error has occurred";


// Determine which information should be returned by the API
if (isset($_GET["action"]) && in_array($_GET["action"], $possible_url))
{
  switch ($_GET["action"])
    {
      case "get_sum":
        if (isset($_GET["num1"]) && isset($_GET["num2"]))
        {
          $value = get_sum($_GET["num1"], $_GET["num2"]);
        } else
        {
          $value = "Missing argument";
        }
    }
}

//return JSON array
exit(json_encode($value));
?>