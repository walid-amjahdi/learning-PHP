<?php

$price = $_GET["price"];
$tip = $_GET["tip"];
$people = $_GET["people"];

$price = $price - ($price * $tip / 100);

if ($people != 0)
    $price /= $people ;

?>

<html>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bill</title>
    </head>
    <body>
        <h3>Welcome To Our Restaurant</h3>
        <form method="GET">
            <label for="price">Enter the Bill :</label>
            <input type="number" name="price" required>
            <br><br>
            <label for="tip">Enter the tip percentage :</label>
            <select name="tip" id="tip" required>
                <option value="" selected disabled>Select an tip</option>
                <option value="10">10%</option>
                <option value="15">15%</option>
                <option value="20">20%</option>
            </select>
            <br><br>
            <label for="people">Enter how much people will pay :</label>
            <input type="number" name="people" value="1" required>
            <br><br>
            <button type="submit">Calculate:</button>
        </form>

        <h3>You will pay : <?php echo $price ; ?></h3>
        
    </body>
    </html>
</html>