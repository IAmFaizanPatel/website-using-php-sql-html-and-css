<?php

    function pdo_connect_mysql(){
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "website_trial";
        
        try {
            return new PDO("mysql:host=$servername;dbname=" . $database . ';charset=utf8', $username, $password);
            
        } catch(PDOException $e) {
            exit ("Connection failed: " . $e->getMessage());
        }

    }

    function template_header($title) {

        // Get the amount of items in the shopping cart, this will be displayed in the header.
        $num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;

        echo <<<EOT
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8">
                <title>$title</title>
                <link href="style.css" rel="stylesheet" type="text/css">
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
            </head>
            <body>
                <header>
                    <div class="content-wrapper">
                        <h1>Online shopping system</h1>
                        <nav>
                            <a href="index.php">Home</a>
                            <a href="index.php?page=products">Products</a>
                            <a href="index.php?page=logout" class="logout">Logout</a>
                        </nav>
                        <div class="link-icons">
                            <a href="index.php?page=cart">
                                <i class="fas fa-shopping-cart"></i>
                                <span>$num_items_in_cart</span> 
                            </a>
                        </div>
                    </div>
                </header>
            <main>
        EOT;
        }


    function header_login($title) {

        echo <<<EOT
        <!DOCTYPE html>
            <html>
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                <link href="./login.css" rel="stylesheet" type="text/css">
            
                <title>$title</title>
            </head>
            <body>
                
        EOT;
        }

        function template_footer() {
            $year = date('Y');
            echo <<<EOT
                    </main>
                    <footer>
                        <div class="content-wrapper" style="display: flex;">
                            <p style="color: white;">&copy; $year, Faizans Website trial</p>
                            <a href="index.php?page=about" style="color:#05f4b7; padding:15px 0 0 700px; text-decoration:none;">Learn more...</a>
                        </div>
                    </footer>
                    <script src="script.js"></script>
                </body>
            </html>
            EOT;
        }
?>
