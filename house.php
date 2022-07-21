<html>
    <body>
        <form action="house.php" method="post">
            <p>Length: </p><input type="text" name="length"><br>
            <p>Width: </p><input type="text" name="width"><br><br>
            <input type="submit" name="calculate">
        </form>
        <?php
            if(isset($_POST['calculate'])){
                $length = $_POST['length'];
                $width = $_POST['width'];
                $area = $length * $width;
                echo "<p>The area of the house is $area</p>";
                if($area > 40){
                    echo "<p>It's a big house!</p>";
                }
            }
        ?>
    </body>
</html>