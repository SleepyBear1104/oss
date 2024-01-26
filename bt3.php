<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Câu 3</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="do_f">Nhập vào độ F:</label>
    <input type="number" name="do_f" id="do_f">
    <br>
    <button type="submit">gửi</button>
</form>
<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dof = $_POST["do_f"]; 
    $doc = 5/9*($dof-32);
    echo"kết quả là: $doc ";
 }   
?>
</body>
</html>
