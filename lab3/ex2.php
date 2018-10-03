<html>
<body>

    <form action="" method="post">
        <p>User 1</p>
        <input type="text" name ="name1" value="">
        <input type="date" name ="birthday1" value="">
        <br>
        <p>User 2</p>
        <input type="text" name ="name2" value="">
        <input type="date" name ="birthday2" value="">
        <br>


        <input type="submit" name="submit" value="Enter">
    </form>
    <?php
        if(isset($_POST["submit"])){
            $user1 = $_POST["birthday1"];
            $user2 =  $_POST["birthday2"];
            $new_date1 = date('l, F d Y', strtotime($user1));
            $new_date2 = date('l, F d Y', strtotime($user2));
            echo "<p>User1's birthday:</p>";
            echo $new_date1;
            echo "<p>User1's birthday:</p>";
            echo $new_date2;
            echo "<br>";
            
            $date1=date_create($user1);
            $date2=date_create($user2);
            echo $diff=date_diff($date1,$date2)->format('%R%a days');
            echo "<br>";
            echo $diff=date_diff($date1,$date2)->format('%y years');
            echo "<br>";
            $now = date("Y/m/d");
            echo $diff=date_diff($date1,$now)->format('%y years');
            echo $diff=date_diff($date2,$now)->format('%y years');
            
        }
        
    ?>



</body>
</html>