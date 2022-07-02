<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>calculator</title>
    <?php include 'calculator.php'; ?>
</head>
<body>
<br><br><br>
<form method="post">
    <div >
        <input name="input"  
               type="text" placeholder="enter a math " style="border: 1px solid black"  width="100%">
        <button  style  name="calc" >calculate the math
        </button>
          <?php echo calc($_POST['input'], $_POST['calc'], $_POST['clear']); ?> 
        <br>
        <button   name="clear"      > clear the math
        </button>
    </div>
</form>
<br><br>

</body>
</html>