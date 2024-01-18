<html>

    <body>
        <h1>Número items del carrito: </h1>
            <?php
            if (isset($_COOKIE['ecommerce-cookie-cart-items'])) {
                echo $_COOKIE['ecommerce-cookie-cart-items'];
            } else {
                echo 'No especificada';
            }
            ?>
        
        <script>
            console.log(document.cookie);
        </script>
    </body>

</html>