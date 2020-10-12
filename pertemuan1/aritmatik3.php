<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method = "GET" action = "aritmatik3.php">

<input type="text" name="bil1"
    <?php
        if (isset($_GET["bil1"]))
            echo 'value="'.$_GET["bil1"].'"';
        else echo 'value="0"';
    ?>
>
<select name="opr">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="x">x</option>
    <option value="/">/</option>
</select>

<input type="text" name = "bil2"
<?php
        if (isset($_GET["bil2"]))
            echo 'value="'.$_GET["bil2"].'"';
        else echo 'value="0"';
?>>

<input type="submit" name="sub" value="=">

<?php
    include "pustaka.php";
    if ($strlen ($str1))
    if (isset ($_GET["bil1"])){
        $hsl = operasikan($_GET["bil1"],$_GET["bil2"],$_GET["opr"]);
        $str1 = $str1.$_GET["bil1"]." ".$_GET["opr"]." ".$_GET["bil2"]." = ".$hsl."<br/>";
        echo $hsl;
    }
    else echo 0;
?>

<h3>HISTORY</h3>

</form>
</body>
</html>