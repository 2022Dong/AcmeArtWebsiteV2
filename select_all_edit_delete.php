<!doctype html>
<html lang="en">
    <!-- Head. -->
    <head>
        <!-- Bootstrap call. --> 
        <?php
        include_once('components/bootstrap.php');
        ?>
        <!-- Title. -->
        <title>Edit/Delete - AT2 Sprint 1</title>
    </head>
    <body>
        <?php
        include_once('components/navbar.php');
        ?>
        <div class="container-fluid">
            <!-- Heading. -->
            <h2>Edit or Delete a Painting</h2>
            <?php
            $statement = "SELECT * FROM paintings";
            $origin = "select_all_edit_delete.php";
            //Calling Table
            include_once('components/display_paintings.php');
            ?>
        </div>
    </body>
</html>