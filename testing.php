<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
 <html>
 <head>
 <title>Dropdown Test</title>
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