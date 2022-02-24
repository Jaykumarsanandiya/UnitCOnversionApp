<?php
require 'logic.php';

$FromUnit = "";
$ToUnit = "";
$FromValue = "";
$ToValue = 0;

if (isset($_POST['fromValue'])) {

    $FromUnit = $_POST['FromUnit'];
    $ToUnit = $_POST['ToUnit'];
    $FromValue = $_POST['fromValue'];
    $convertToStandard = $FromValue * $Speed[$FromUnit];
    $ToValue = $convertToStandard  / $Speed[ $ToUnit ];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylesheet.css">
    <title>Speed</title>
</head>

<body>
<div class="header">  <h1>Convert Speed</h1> </div>
    <form method="POST">
        <table  class="box">
            <tr>
                <td>From:</td>
                <td><input type="text" name="fromValue" pattern="[0-9]+"  placeholder="Enter Numeric Here ..." value="<?php echo $FromValue ?>"> </td>

                <td>
                    <select name="FromUnit">
                        // $FromUnit ;
                        <option  <?php if($FromUnit == "meter/second") echo "selected" ;  ?>>meter/second</option>
                        <option <?php if($FromUnit == "kilometer/hour") echo "selected" ;  ?> >kilometer/hour</option>
                        <option <?php if($FromUnit == "mile/hour") echo "selected" ;  ?>>mile/hour</option>
                        <option <?php if($FromUnit == "meter/hour") echo "selected" ;  ?>>meter/hour</option>
                        <option <?php if($FromUnit == "kilometer/second") echo "selected" ;  ?>>kilometer/second</option>
                        <option <?php if($FromUnit == "mile/second") echo "selected" ;  ?>>mile/second</option>
                        <option <?php if($FromUnit == "mile/minute") echo "selected" ;  ?>>mile/minute</option>
                        <option <?php if($FromUnit == "knot") echo "selected" ;  ?>>knot</option>
                        <option <?php if($FromUnit == "Cosmic velocity") echo "selected" ;  ?>>Cosmic velocity</option>
                        <option <?php if($FromUnit == "Light velocity") echo "selected" ;  ?>>Light velocity</option>
                        
                    </select>
                </td>
            </tr>

            <tr>
                <td>To:</td>
                <td><input type="text" name="toValue" value="<?php echo $ToValue ?>"></td>

                <td>
               
                    <select name="ToUnit">
                    <option  <?php if($ToUnit == "meter/second") echo "selected" ;  ?>>meter/second</option>
                        <option <?php if($ToUnit == "kilometer/hour") echo "selected" ;  ?> >kilometer/hour</option>
                        <option <?php if($ToUnit == "mile/hour") echo "selected" ;  ?>>mile/hour</option>
                        <option <?php if($ToUnit == "meter/hour") echo "selected" ;  ?>>meter/hour</option>
                        <option <?php if($ToUnit == "kilometer/second") echo "selected" ;  ?>>kilometer/second</option>
                        <option <?php if($ToUnit == "mile/second") echo "selected" ;  ?>>mile/second</option>
                        <option <?php if($ToUnit == "mile/minute") echo "selected" ;  ?>>mile/minute</option>
                        <option <?php if($ToUnit == "knot") echo "selected" ;  ?>>knot</option>
                        <option <?php if($ToUnit == "Cosmic velocity") echo "selected" ;  ?>>Cosmic velocity</option>
                        <option <?php if($ToUnit == "Light velocity") echo "selected" ;  ?>>Light velocity</option>

                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input  class="button" type="submit" value="Submit" >
                </td>
            </tr>
        </table>
    </form>
       <a class="header" href="index.php">Return to menu</a>
</body>

</html>
