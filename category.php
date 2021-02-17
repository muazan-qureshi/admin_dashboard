<?php include('header.php');

?>

<section>
    <table class="table table-striped table-hover">

        <thead>
            <tr>
                <th>SR No</th>
                <th>Category ID</th>
                <th>Category Name</th>
                <th>Status</th>
                <th>Date & Time</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $srno = 1;
            foreach ($object->getcategory() as $cat) {
            ?>
                <tr>
                    <td><?php echo $srno; ?></td>
                    <td><?php echo $cat['id']; ?></td>
                    <td><?php echo $cat['name']; ?></td>
                    <td><?php echo $cat['status']; ?></td>
                    <td><?php echo $cat['createdate']; ?></td>
                </tr>
            <?php
                $srno++;
            }
            ?>
        </tbody>

    </table>
</section>


<?php include('footer.php');

?>