<html>
    <body>
        <p>Conversion from Celcius to Fahrenheit</p>
        <form action="temp2.php" method="post">
            <p>Celcius: </p><input type="text" name="celcius"><br><br>
            <input type="submit" name="convert">
        </form>
        <?php
            if(isset($_POST['convert'])){
                $celcius = $_POST['celcius'];
                $fahrenheit = $celcius * 1.8 + 32;
                echo "<p>$celcius degrees Celcius is $fahrenheit degrees Fahrenheit</p>";
                switch ($fahrenheit) {
                    case $fahrenheit < 32:
                        echo "<p>It's freezing.</p>";
                        break;
                    case 32 <= $fahrenheit && $fahrenheit <= 50:
                        echo "<p>It's chilly.</p>";
                        break;
                    case 50 <= $fahrenheit && $fahrenheit <= 90:
                        echo "<p>It's OK.</p>";
                        break;
                    case $fahrenheit > 90:
                        echo "<p>It's hot!</p>";
                        break;
                }
                // if ($fahrenheit < 32){
                //     echo "<p>It's freezing.</p>";
                // } else if (32 <= $fahrenheit && $fahrenheit <= 50){
                //     echo "<p>It's chilly.</p>";
                // } else if (50 <= $fahrenheit && $fahrenheit <= 90){
                //     echo "<p>It's OK.</p>";
                // } else if ($fahrenheit > 90){
                //     echo "<p>It's hot!</p>";
                // }
            }
        ?>
    </body>
</html>