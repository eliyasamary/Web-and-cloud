<!DOCTYPE html>
<html>
    <head>
        <title>T-shirt Order</title>
    </head>
    <body>
        <h2>Hey <?php echo $_GET["name"]; ?>, thank you for your order!</h2>
        <?php $color = $_GET["color"]; ?>
        You ordered a <?php echo $_GET["size"]; ?>
        T-shirt in 
        <span <?php echo "style = 'color: $color;'"; ?>>this color</span>
    </body>
</html>