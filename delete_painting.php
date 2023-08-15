<!doctype html>
<html lang="en">
    <!-- Head. -->
    <head>
        <!-- Bootstrap call. --> 
        <?php
        include_once('components/bootstrap.php');
        ?>
        <!-- Title. -->
        <title>Delete - AT2 Sprint 1</title>
    </head>
    <body>
        <?php
        include_once('components/navbar.php');
        ?>
        <div class="container-fluid">
            <!-- Heading. -->
            <h2>Delete Painting</h2>
            <?php
            $selection = $_GET['id'];
            $statement = "SELECT * FROM paintings WHERE id = '$selection'";
            $origin = "delete_painting.php";
            //Table
            include_once('components/display_paintings.php');
            ?>
        </div>
    </body>
</html>
