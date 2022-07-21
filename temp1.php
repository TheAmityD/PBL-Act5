<html>
    <body>
        <p>Conversion from Celcius to Fahrenheit</p>
        <form action="temp1.php" method="post">
            <p>Celcius: </p><input type="text" name="celcius"><br><br>
            <input type="submit" name="convert">
        </form>
        <?php
            if(isset($_POST['convert'])){
                $celcius = $_POST['celcius'];
                $fahrenheit = $celcius * 1.8 + 32;
                echo "<p>$celcius degrees Celcius is $fahrenheit degrees Fahrenheit</p>";
                if ($fahrenheit > 90) {
                    echo "<p>It's hot!</p>";
                } else {
                    echo "<p>It's cool.</p>";
                }
            }
        ?>
    </body>
</html>