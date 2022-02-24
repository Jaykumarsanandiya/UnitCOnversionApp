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
    $convertToStandard = $FromValue * $Volume[$FromUnit];
    $ToValue = $convertToStandard  / $Volume[$ToUnit];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylesheet.css">
    <title>Volume</title>
</head>

<body>
    <div class="header">
        <h1>Convert Volume</h1>
    </div>
    <form method="POST">
        <table class="box">
            <tr>
                <td>From:</td>
                <td><input type="text" name="fromValue" pattern="[0-9]+" placeholder="Enter Numeric Here ..." value="<?php echo $FromValue ?>"> </td>

                <td>
                    <select name="FromUnit">
                        <option <?php if ($FromUnit == "Liter") echo "selected";  ?>>Liter</option>
                        <option <?php if ($FromUnit == "Cubic Meter") echo "selected";  ?>>Cubic Meter</option>
                        <option <?php if ($FromUnit == "Cubic Kilometer") echo "selected";  ?>>Cubic Kilometer</option>
                        <option <?php if ($FromUnit == "Cubic Centimeter") echo "selected";  ?>>Cubic Centimeter</option>
                        <option <?php if ($FromUnit == "Cubic Millimeter") echo "selected";  ?>>Cubic Millimeter</option>
                        <option <?php if ($FromUnit == "US Gallon") echo "selected";  ?>>US Gallon</option>
                        <option <?php if ($FromUnit == "US Quart") echo "selected";  ?>>US Quart</option>
                        <option <?php if ($FromUnit == "US Pint") echo "selected";  ?>>US Pint</option>
                        <option <?php if ($FromUnit == "US Cup") echo "selected";  ?>>US Cup</option>
                        <option <?php if ($FromUnit == "US Fluid Ounce") echo "selected";  ?>>US Fluid Ounce</option>
                        <option <?php if ($FromUnit == "US Table Spoon") echo "selected";  ?>>US Table Spoon</option>
                        <option <?php if ($FromUnit == "US Tea Spoon") echo "selected";  ?>>US Tea Spoon</option>
                        <option <?php if ($FromUnit == "Imperial Gallon") echo "selected";  ?>>Imperial Gallon</option>
                        <option <?php if ($FromUnit == "Imperial Quart") echo "selected";  ?>>Imperial Quart</option>
                        <option <?php if ($FromUnit == "Imperial Pint") echo "selected";  ?>>Imperial Pint</option>
                        <option <?php if ($FromUnit == "Imperial FLuid Ounce") echo "selected";  ?>>Imperial FLuid Ounce</option>
                        <option <?php if ($FromUnit == "Imperial Table Spoon") echo "selected";  ?>>Imperial Table Spoon</option>
                        <option <?php if ($FromUnit == "Imperial Tea Spoon") echo "selected";  ?>>Imperial Tea Spoon</option>
                        <option <?php if ($FromUnit == "Cubic Mile") echo "selected";  ?>>Cubic Mile</option>
                        <option <?php if ($FromUnit == "Cubic Yard") echo "selected";  ?>>Cubic Yard</option>
                        <option <?php if ($FromUnit == "Cubic Foot") echo "selected";  ?>>Cubic Foot</option>
                        <option <?php if ($FromUnit == "Cubic Inch") echo "selected";  ?>>Cubic Inch</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>To:</td>
                <td><input type="text" name="toValue" value="<?php echo $ToValue ?>"></td>

                <td>
                    <select name="ToUnit">
                        <option <?php if ($ToUnit == "Liter") echo "selected";  ?>>Liter</option>
                        <option <?php if ($ToUnit == "Cubic Meter") echo "selected";  ?>>Cubic Meter</option>
                        <option <?php if ($ToUnit == "Cubic Kilometer") echo "selected";  ?>>Cubic Kilometer</option>
                        <option <?php if ($ToUnit == "Cubic Centimeter") echo "selected";  ?>>Cubic Centimeter</option>
                        <option <?php if ($ToUnit == "Cubic Millimeter") echo "selected";  ?>>Cubic Millimeter</option>
                        <option <?php if ($ToUnit == "Milliliter") echo "selected";  ?>>Milliliter</option>
                        <option <?php if ($ToUnit == "US Gallon") echo "selected";  ?>>US Gallon</option>
                        <option <?php if ($ToUnit == "US Quart") echo "selected";  ?>>US Quart</option>
                        <option <?php if ($ToUnit == "US Pint") echo "selected";  ?>>US Pint</option>
                        <option <?php if ($ToUnit == "US Cup") echo "selected";  ?>>US Cup</option>
                        <option <?php if ($ToUnit == "US Fluid Ounce") echo "selected";  ?>>US Fluid Ounce</option>
                        <option <?php if ($ToUnit == "US Table Spoon") echo "selected";  ?>>US Table Spoon</option>
                        <option <?php if ($ToUnit == "US Tea Spoon") echo "selected";  ?>>US Tea Spoon</option>
                        <option <?php if ($ToUnit == "Imperial Gallon") echo "selected";  ?>>Imperial Gallon</option>
                        <option <?php if ($ToUnit == "Imperial Quart") echo "selected";  ?>>Imperial Quart</option>
                        <option <?php if ($ToUnit == "Imperial Pint") echo "selected";  ?>>Imperial Pint</option>
                        <option <?php if ($ToUnit == "Imperial FLuid Ounce") echo "selected";  ?>>Imperial FLuid Ounce</option>
                        <option <?php if ($ToUnit == "Imperial Table Spoon") echo "selected";  ?>>Imperial Table Spoon</option>
                        <option <?php if ($ToUnit == "Imperial Tea Spoon") echo "selected";  ?>>Imperial Tea Spoon</option>
                        <option <?php if ($ToUnit == "Cubic Mile") echo "selected";  ?>>Cubic Mile</option>
                        <option <?php if ($ToUnit == "Cubic Yard") echo "selected";  ?>>Cubic Yard</option>
                        <option <?php if ($ToUnit == "Cubic Foot") echo "selected";  ?>>Cubic Foot</option>
                        <option <?php if ($ToUnit == "Cubic Inch") echo "selected";  ?>>Cubic Inch</option>
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