<!-- Connect. -->
<?php
include_once('../components/connect.php');
$result = (connect()->query($statement));
$rows = $result->fetchAll(PDO::FETCH_ASSOC);
?>
<!-- Table. --> 
<table class="table">
    <thead>
        <tr>
            <!-- Headers. --> 
            <th>Artist ID</th>
            <th>Artist Name</th>
            <th>Lifespan</th>
            <th>Period</th>
            <th>Nationality</th>
            <th>Image</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($rows as $row) {
            ?>
            <tr>
                <!-- Content. --> 
                <td><?php echo $row['artist_id']; ?></td>
                <td><?php echo $row['artist_name']; ?></td>
                <td><?php echo $row['lifespan']; ?></td>
                <td><?php echo $row['period']; ?></td>
                <td><?php echo $row['nationality']; ?></td>
                <td><?php echo '<img class="thumb" style="width: 100px;" src="data:image/png;base64,' . base64_encode($row['thumbnail']) . '"/>'; ?></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>