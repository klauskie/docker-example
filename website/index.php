<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Website</title>
    </head>
    <body>
        <h1>Welcome to my shop</h1>
        <ul>
            <?php
                $json = file_get_contents('http://product-service');
                $obj = json_decode($json);

                $products = $obj->products;
                foreach($products as $product) {
                    echo "<li>$product</li>";
                }
            ?>
        </ul>
    </body>
</html>