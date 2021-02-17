<?php include('header.php');
$object->add_user();
?>


<section class="col-lg-10 px-3">

    <h3 class="">
        Add User
    </h3>
    <form action="" method="POST" enctype="multipart/form-data" class="row">
        <div class="form-group col-md-6">
            <label for="">Full Name</label>
            <input type="text" class="form-control" name="fullname" id="" aria-describedby="helpId" placeholder="Enter Your Full Name">
        </div>
        <div class="form-group col-md-6">
            <label for="">Username</label>
            <input type="text" class="form-control" name="username" id="" aria-describedby="helpId" placeholder="Username">
        </div>
        <div class="form-group col-md-6">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="Email Address">
        </div>
        <div class="form-group col-md-6">
            <label for="">Phone</label>
            <input type="text" class="form-control" name="phone" id="" aria-describedby="helpId" placeholder="Phone Number">
        </div>
        <div class="form-group col-md-6">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password" id="" aria-describedby="helpId" placeholder="Enter a Strong Password">
        </div>
        <div class="form-group col-md-6">
            <label for="">Confirm Password</label>
            <input type="password" class="form-control" name="cpassword" id="" aria-describedby="helpId" placeholder="Confirm Your Password">
        </div>
        <div class="form-group col-md-6">
            <label for="">Date of Birth</label>
            <input type="date" class="form-control" name="dob" id="" aria-describedby="helpId" placeholder="">
        </div>
        <div class="form-group col-md-6">
            <label for="">Gender</label>
            <select class="form-control" name="gender" id="">
                <option selected>Select Gender</option>
                <option>Male</option>
                <option>Female</option>
                <option>Custom</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="">Role</label>
            <select class="form-control" name="role" id="">
                <option selected>Select Role Type</option>
                <?php
                // foreach ($object->role() as $roleii) {
                //     echo ('<option value="' . $roleii['id'] . '">' . $roleii['roletype'] . '</option>');
                // }
                ?>
                <option value="1">Administrator</option>
                <option value="2">Manager</option>
                <!-- <option value="1">Administrator</option> -->
            </select>
        </div>

        <div class="form-group col-md-6">
            <label for="">Photo</label>
            <input type="file" class="form-control" name="photo" id="" aria-describedby="helpId" placeholder="">
        </div>
        <div class="form-group col-md-12">
            <label for="">Address</label>
            <textarea type="text" class="form-control" name="address" id="" aria-describedby="helpId" placeholder="Enter Full Address"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-block mx-3" name="adduser_btn">
            Add User
        </button>
    </form>
</section>





<?php include('footer.php');

?>