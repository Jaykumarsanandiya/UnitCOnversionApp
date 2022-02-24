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
    $convertToStandard = $FromValue * $Weight[$FromUnit];
    $ToValue = $convertToStandard  / $Weight[$ToUnit];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylesheet.css">
    <title>Weight</title>
</head>

<body>
    <div class="header">
        <h1>Convert Mass & Weight</h1>
    </div>
    <form method="POST">
        <table class="box">
            <tr>
                <td>From:</td>
                <td><input type="text" name="fromValue" pattern="[0-9]+" placeholder="Enter Numeric Here ..." value="<?php echo $FromValue ?>"> </td>

                <td>
                    <select name="FromUnit">
                        // $FromUnit ;
                        <option <?php if ($FromUnit == "Gram") echo "selected";  ?>>Gram</option>
                        <option <?php if ($FromUnit == "Kilogram") echo "selected";  ?>>Kilogram</option>
                        <option <?php if ($FromUnit == "Milligram") echo "selected";  ?>>Milligram</option>
                        <option <?php if ($FromUnit == "Metric Ton") echo "selected";  ?>>Metric Ton</option>
                        <option <?php if ($FromUnit == "Long Ton") echo "selected";  ?>>Long Ton</option>
                        <option <?php if ($FromUnit == "Short Ton") echo "selected";  ?>>Short Ton</option>
                        <option <?php if ($FromUnit == "Pound") echo "selected";  ?>>Pound</option>
                        <option <?php if ($FromUnit == "Ounce") echo "selected";  ?>>Ounce</option>
                        <option <?php if ($FromUnit == "Carrat") echo "selected";  ?>>Carrat</option>
                        <option <?php if ($FromUnit == "Atomic Mass Unit") echo "selected";  ?>>Atomic Mass Unit</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>To:</td>
                <td><input type="text" name="toValue" value="<?php echo $ToValue ?>"></td>

                <td> <select name="ToUnit">
                        <option <?php if ($ToUnit == "Gram") echo "selected";  ?>>Gram</option>
                        <option <?php if ($ToUnit == "Kilogram") echo "selected";  ?>>Kilogram</option>
                        <option <?php if ($ToUnit == "Milligram") echo "selected";  ?>>Milligram</option>
                        <option <?php if ($ToUnit == "Metric Ton") echo "selected";  ?>>Metric Ton</option>
                        <option <?php if ($ToUnit == "Long Ton") echo "selected";  ?>>Long Ton</option>
                        <option <?php if ($ToUnit == "Short Ton") echo "selected";  ?>>Short Ton</option>
                        <option <?php if ($ToUnit == "Pound") echo "selected";  ?>>Pound</option>
                        <option <?php if ($ToUnit == "Ounce") echo "selected";  ?>>Ounce</option>
                        <option <?php if ($ToUnit == "Carrat") echo "selected";  ?>>Carrat</option>
                        <option <?php if ($ToUnit == "Atomic Mass Unit") echo "selected";  ?>>Atomic Mass Unit</option>
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