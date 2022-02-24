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
    $convertToStandard = $FromValue * $Area[$FromUnit];
    $ToValue = $convertToStandard  / $Area[$ToUnit];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylesheet.css">
    <title>Area</title>
</head>

<body>
    <div class="header">
        <h1>Convert Area</h1>
    </div>
    <form method="POST">
        <table class="box">
            <tr>
                <td>From:</td>
                <td><input type="text" name="fromValue" pattern="[0-9]+" placeholder="Enter Numeric Here ..." value="<?php echo $FromValue ?>"> </td>

                <td>
                    <select name="FromUnit">
                        // $FromUnit ;
                        <option <?php if ($FromUnit == "Square Meter") echo "selected";  ?>>Square Meter</option>
                        <option <?php if ($FromUnit == "Square Kilometer") echo "selected";  ?>>Square Kilometer</option>
                        <option <?php if ($FromUnit == "Square Centimetter") echo "selected";  ?>>Square Centimetter</option>
                        <option <?php if ($FromUnit == "Square Millimetter") echo "selected";  ?>>Square Millimetter</option>
                        <option <?php if ($FromUnit == "Square Micrometter") echo "selected";  ?>>Square Micrometter</option>
                        <option <?php if ($FromUnit == "Hectare") echo "selected";  ?>>Hectare</option>
                        <option <?php if ($FromUnit == "Square Mile") echo "selected";  ?>>Square Mile</option>
                        <option <?php if ($FromUnit == "Square Yard") echo "selected";  ?>>Square Yard</option>
                        <option <?php if ($FromUnit == "Square Foot") echo "selected";  ?>>Square Foot</option>
                        <option <?php if ($FromUnit == "Square Inch") echo "selected";  ?>>Square Inch</option>
                        <option <?php if ($FromUnit == "Acre") echo "light_year";  ?>>Acre</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>To:</td>
                <td><input type="text" name="toValue" value="<?php echo $ToValue ?>"></td>

                <td>

                    <select name="ToUnit">
                        <option <?php if ($ToUnit == "Square Meter") echo "selected";  ?>>Square Meter</option>
                        <option <?php if ($ToUnit == "Square Kilometer") echo "selected";  ?>>Square Kilometer</option>
                        <option <?php if ($ToUnit == "Square Centimetter") echo "selected";  ?>>Square Centimetter</option>
                        <option <?php if ($ToUnit == "Square Millimetter") echo "selected";  ?>>Square Millimetter</option>
                        <option <?php if ($ToUnit == "Square Micrometter") echo "selected";  ?>>Square Micrometter</option>
                        <option <?php if ($ToUnit == "Hectare") echo "selected";  ?>>Hectare</option>
                        <option <?php if ($ToUnit == "Square Mile") echo "selected";  ?>>Square Mile</option>
                        <option <?php if ($ToUnit == "Square Yard") echo "selected";  ?>>Square Yard</option>
                        <option <?php if ($ToUnit == "Square Foot") echo "selected";  ?>>Square Foot</option>
                        <option <?php if ($ToUnit == "Square Inch") echo "selected";  ?>>Square Inch</option>
                        <option <?php if ($ToUnit == "Acre") echo "light_year";  ?>>Acre</option>
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