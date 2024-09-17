<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Math</title>
</head>
<body>
    <h1>Take Input from user...<br>Division</h1>
    <div class="main">
        <form action="Third.php" method="POST">
            <div class="input">
                <label for="num1">Enter First Number : </label>
                <input type="number" name="num1" id="num1"><br>
            </div>
            <div class="input">
                <label for="num2">Enter Second Number : </label>
                <input type="number" name="num2" id="num2"><br>
            </div>
            <button type="submit" name="submit">SUBMIT</button>
        </form>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $ans=$num1/$num2;
        echo "Division of $num1 / $num2 = $ans";
    }
    ?>

</body>
</html>