<?php include('header.php');


foreach ($object->userlive_info() as $live) {
    $livename = $live['fullname'];
    $liveemail = $live['email'];
    $livephoto = $live['photo'];
    $liveuser = $live['username'];
    $livephone = $live['phone'];
    $livedob = $live['dob'];
    $livegender = $live['gender'];
    $liveaddress = $live['address'];
}

?>

<section class="col-md-6 m-auto">
    <h1 class="text-center">
        User Profile
    </h1>
    <div class="mx-5 px-5 pb-5">
        <img src="uploads/users/<?php echo $livephoto ?>" class="img-fluid rounded-circle" style="width:250px; height:250px;">
    </div>
    <table class="table col-md-12 pt-5">
        <tr>
            <th>Full Name</th>
            <td class="h5"><?php echo $livename ?></td>
        </tr>
        <tr>
            <th>Username</th>
            <td class="h5"><?php echo $liveuser ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td class="h5"><?php echo $liveemail ?></td>
        </tr>
        <tr>
            <th>Phone</th>
            <td class="h5"><?php echo $livephone ?></td>
        </tr>
        <tr>
            <th>Date of Birth</th>
            <td class="h5"><?php echo $livedob ?></td>
        </tr>
        <tr>
            <th>Gender</th>
            <td class="h5"><?php echo $livegender ?></td>
        </tr>
        <tr>
            <th>Address</th>
            <td class="h5"><?php echo $liveaddress ?></td>
        </tr>
    </table>
</section>



<?php
include('footer.php');
?>