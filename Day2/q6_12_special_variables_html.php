<html>
    <body>
        <form action="mysql.php" method="GET">
            <input type ="text" name = "side1"/><br/>
            <input type = "text" name = "side2"/><br/>
            <input type = "text" name = "side3"/><br/>
            <input type = "submit" name = "submit" value = "Click here">
            <input type = "reset" value = "Clear form">
        </form>    
    </body>
</html>



<?php
@$a = $_GET['side1'];
@$b = $_GET['side2'];
@$c - $_GET['side3'];

if((@$a == @$b) && (@$b == @$c)){
    echo "equilateral triangle";
}
else if((@$a == @$b) || (@$b == @$c) || (@$a == @$c)){
    echo "Isoceles triangle";
}
else {
    echo "Scalene triangle";
}

?>
