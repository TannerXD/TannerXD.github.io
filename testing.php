<!DOCTYPE html PUBLIC "-//W3c//DTD XHTML 1.0 Transitonal//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitonal.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>W3.CSS Template</title>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'] ;?>" method="post">

Select Your Color : 
<select name="colorList">
    <option <?php if(isset($_POST['colorList']) && $_POST ['colorList'] == 'Red')  echo "selected='selected'"; ?>>
    Red</option>
    <option <?php if(isset($_POST['colorList']) && $_POST ['colorList'] == 'Green')  echo "selected='selected'"; ?>>
    Green</option>
    <option <?php if(isset($_POST['colorList']) && $_POST ['colorList'] == 'Blue')  echo "selected='selected'"; ?>>
    Blue</option>
    <option <?php if(isset($_POST['colorList']) && $_POST ['colorList'] == 'Black')  echo "selected='selected'"; ?>>
    Black</option>
    <option <?php if(isset($_POST['colorList']) && $_POST ['colorList'] == 'Orange')  echo "selected='selected'"; ?>>
    Orange</option>
</select>

<input type="submit" name="btnSubmit" value="Submit" />
</form>

<?php
    if(isset($_POST['colorList'])) {
        if(isset($_POST['colorList'])) {
            $value = $_POST['colorList'];
            echo "<p style=color:$value>$value</p>";
        }
    }
?>
</body>
</html>