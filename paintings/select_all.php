<!doctype html>
<html lang="en">
    <!-- Head. -->
    <head>
        <!-- Bootstrap call. --> 
        <?php
        include_once('../components/bootstrap.php');
        ?>
        <!-- Title. -->
        <title>Select All - AT2 Sprint 2</title>
    </head>
    <body>
        <?php
        include_once('../components/navbar.php');
        ?>
        <div class="container-fluid">
            <!-- Heading. -->
            <h2>All Paintings</h2>
            <?php
            $statement = "SELECT * FROM paintings";
            //Table
            include_once('display.php');
            ?>
            <!-- Footer. -->
            <?php
            include_once('../components/footer.php');
            ?>
        </div>
    </body>
</html>