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
    $convertToStandard = $FromValue * $LENGTH[$FromUnit];
    $ToValue = $convertToStandard  / $LENGTH[$ToUnit];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylesheet.css">
    <title>Length </title>
</head>

<body>
    <div class="header">
        <h1>Convert Length</h1>
    </div>
    <form method="POST">
        <table class="box">
            <tr>
                <td>From:</td>
                <td><input type="text" name="fromValue" pattern="[0-9]+" placeholder="Enter Numeric Here ..." value="<?php echo $FromValue ?>"> </td>

                <td>
                    <select name="FromUnit">
                        // $FromUnit ;
                        <option <?php if ($FromUnit == "kilometer") echo "selected";  ?>>kilometer</option>
                        <option <?php if ($FromUnit == "meter") echo "selected";  ?>>meter</option>
                        <option <?php if ($FromUnit == "centimeter") echo "selected";  ?>>centimeter</option>
                        <option <?php if ($FromUnit == "millimeter") echo "selected";  ?>>millimeter</option>
                        <option <?php if ($FromUnit == "micrometer") echo "selected";  ?>>micrometer</option>
                        <option <?php if ($FromUnit == "nanometer") echo "selected";  ?>>nanometer</option>
                        <option <?php if ($FromUnit == "mile") echo "selected";  ?>>mile</option>
                        <option <?php if ($FromUnit == "yard") echo "selected";  ?>>yard</option>
                        <option <?php if ($FromUnit == "foot") echo "selected";  ?>>foot</option>
                        <option <?php if ($FromUnit == "inch") echo "selected";  ?>>inch</option>
                        <option <?php if ($FromUnit == "light_year") echo "light_year";  ?>>light_year</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>To:</td>
                <td><input type="text" name="toValue" value="<?php echo $ToValue ?>"></td>

                <td>

                    <select name="ToUnit">
                        <option <?php if ($ToUnit == "kilometer") echo "selected";  ?>>kilometer</option>
                        <option <?php if ($ToUnit == "meter") echo "selected";  ?>>meter</option>
                        <option <?php if ($ToUnit == "centimeter") echo "selected";  ?>>centimeter</option>
                        <option <?php if ($ToUnit == "millimeter") echo "selected";  ?>>millimeter</option>
                        <option <?php if ($ToUnit == "micrometer") echo "selected";  ?>>micrometer</option>
                        <option <?php if ($ToUnit == "nanometer") echo "selected";  ?>>nanometer</option>
                        <option <?php if ($ToUnit == "mile") echo "selected";  ?>>mile</option>
                        <option <?php if ($ToUnit == "yard") echo "selected";  ?>>yard</option>
                        <option <?php if ($ToUnit == "foot") echo "selected";  ?>>foot</option>
                        <option <?php if ($ToUnit == "inch") echo "selected";  ?>>inch</option>
                        <option <?php if ($ToUnit == "light_year") echo "light_year";  ?>>light_year</option>
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