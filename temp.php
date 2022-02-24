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
    $ToValue =   calculateTemp($FromUnit, $ToUnit, $FromValue);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylesheet.css">
    <title>Temperature</title>
</head>

<body>
    <div class="header">
        <h1>Convert Temperature</h1>
    </div>
    <form method="POST">
        <table class="box">
            <tr>
                <td>From:</td>
                <td><input type="text" name="fromValue" pattern="[0-9]+" placeholder="Enter Numeric Here ..." value="<?php echo $FromValue ?>"> </td>
                <td>
                    <select name="FromUnit">
                        // $FromUnit ;
                        <option <?php if ($FromUnit == "Kelvin") echo "selected";  ?>>Kelvin</option>
                        <option <?php if ($FromUnit == "Celsius") echo "selected";  ?>>Celsius</option>
                        <option <?php if ($FromUnit == "Fahrenheit") echo "selected";  ?>>Fahrenheit</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>To:</td>
                <td><input type="text" name="toValue" value="<?php echo $ToValue ?>"></td>

                <td>
                    <select name="ToUnit">
                        <option <?php if ($ToUnit == "Kelvin") echo "selected";  ?>>Kelvin</option>
                        <option <?php if ($ToUnit == "Celsius") echo "selected";  ?>>Celsius</option>
                        <option <?php if ($ToUnit == "Fahrenheit") echo "selected";  ?>>Fahrenheit</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input class="button" type="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
    <a class="header" href="index.php">Return to menu</a>
</body>

</html>