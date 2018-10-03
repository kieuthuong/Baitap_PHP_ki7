<html>
<body>

    <form action="" method="post">
        <input type="radio" name ="kieu" value="1">Radians to degrees
        <input type="radio" name ="kieu" value="2">Degrees to radians
        <br>
        Input: <input type="text" name="nhap"><br>


        <input type="submit" name="submit">
    </form>
    <?php

        if(isset($_POST["submit"])){
            if (isset($_POST["nhap"])&&isset($_POST["kieu"])) {
                $type = $_POST["kieu"];
                if ($type == 1) {
                    echo "<p>Degrees</p>";
                    echo($_POST["nhap"] * 180 / 3.14);
                }
                if ($type == 2) {
                    echo "<p>Radians</p>";
                    echo($_POST["nhap"] * 3.14 / 180);
                }

            }
        }
    ?>



</body>
</html>