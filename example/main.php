<?php session_start();

class egan
{
    function connection()
    {
        $connect = mysqli_connect('localhost', 'root', '', 'egan');
        return $connect;
    } //COnnection End HERe

    function userlogin()
    {
        if (isset($_POST['login_btn'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $sql = "SELECT `id`, `name`, `email`, `password` FROM `admin` WHERE email = '$email' AND password ='$password'";
            $query = mysqli_query($this->connection(), $sql);
            // return $query;

            $count = mysqli_num_rows($query);

            if ($count == 1) {
                $_SESSION['log'] = $_POST['email'];
                header("location:index.php");
            } else {
                echo ('<script>alert("Sorry Login Creditential are Incorrect!")</script>');
            }
        }
    } // admin user login end here

    function userlive_info()
    {
        $a = $_SESSION['log'];
        $query = mysqli_query($this->connection(), "SELECT * FROM `admin` where email = '$a' ");
        return $query;
    } //for user live info || logged in user info display into dashboard

    function add_user()
    {
        if (isset($_POST['adduser_btn'])) {
            $fname = $_POST['fullname'];
            $uname = $_POST['username'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $cpassword = $_POST['cpassword'];
            $dob = $_POST['dob'];
            $photo = $_FILES['photo']['name'];
            $address = $_POST['address'];
            $role = $_POST['role'];
            $gender = $_POST['gender'];

            if ($password == $cpassword) {
                // for File upload
                move_uploaded_file($_FILES['photo']['tmp_name'], "uploads/users/" . $photo);
                // file upload end here
                // $sql = "INSERT INTO `users`(`fullname`, `username`, `email`, `phone`, `password`, `dob`, `gender`, `photo`, `address`, `role`) VALUES ('$fname','$uname','$email','$password','$dob','$gender','$photo','$address','$role')";
                $query = mysqli_query($this->connection(), "INSERT INTO `users`(`fullname`, `username`, `email`, `phone`, `password`, `dob`, `gender`, `photo`, `address`, `role`) VALUES ('$fname','$uname','$email','$phone','$password','$dob','$gender','$photo','$address','$role')");
                return $query;
                // $error = '<div style="font-size:1.5rem;" class="alert alert-success text-center" role="alert">Successfully Created Your Account</div>';
            } else {
                // echo "<script>alert('Sorry Some Thing is Wrong')</script>";
                // $error = '<div style="font-size:1.5rem;" class="alert alert-danger text-center" role="alert">Sorry! Some thing is wrong Please Try Again</div>';
            }
        }
    } //Add user data

    // To find total numbers of users
    function total_users()
    {
        $sql = "SELECT count(id) as u FROM users";
        $query = mysqli_query($this->connection(), $sql);
        $q = mysqli_fetch_array($query, MYSQLI_ASSOC)['u'];

        return $q;
    }




    //Get user data
    function getusersdata()
    {
        $sql = "SELECT * FROM `users`";
        $query = mysqli_query($this->connection(), $sql);
        return $query;
    } // data for users table


    // add category
    function add_category()
    {
        if (isset($_POST['addcategory_btn'])) {
            $catname = $_POST['categoryname'];
            // $catbtn = $_POST['addcategory_btn'];

            $sql = "INSERT INTO `category`(`name`) VALUES('$catname')";
            $query = mysqli_query($this->connection(), $sql);
            if (!$query) {
                echo "<script>alert('Something is Wrong')</script>";
            } else {
                return $query;
            }
        }
    } //add category end here

    //Get Category data for prducts form
    function getcategory()
    {
        $sql = "SELECT * FROM `category`";
        $query = mysqli_query($this->connection(), $sql);
        return $query;
    }

    // Get Roletype for Adding users type
    // function role()
    // {
    //     $sql = "SELECT `id`, `roletype` FROM `role`";
    //     $query = mysqli_connect($this->connection(), $sql);
    //     return $query;
    // } //end role type

    // 
    // 



    // Adding a product
    function add_product()
    {
        if (isset($_POST['addproduct_btn'])) {
            $pname = $_POST['pname'];
            $pstock = $_POST['pstock'];
            $psale = $_POST['saleprice'];
            $pbuy = $_POST['buyprice'];
            $pcatalog = $_POST['catalog'];
            $puser = $_POST['user'];
            // $pphoto = $_FILES['photos']['name'];
            $pdesc = $_POST['pdesc'];

            $img = $_FILES['photo']['name'];
            $tmp_img = $_FILES['photo']['tmp_name'];

            $json  = json_encode($_FILES['photo']['name']);

            // move_uploaded_file($_FILES['photos']['tmp_name'], "uploads/products/" . $_FILES['photos']['name']);

            $sql = "INSERT INTO `products`(`name`, `description`, `buyprice`, `saleprice`, `stock`, `catalog`, `photos`, `userid`) VALUES ('$pname','$pdesc','$pbuy','$psale','$pstock','$pcatalog','$json','$puser')";
            $query = mysqli_query($this->connection(), $sql);
            move_uploaded_file($tmp_img, 'uploads/products/' . $img);

            // return $query;

            if (!$query) {
                echo "<script>alert('Some thing is Wrong')</script>";
            } else {
                echo "<script>alert('Done')</script>";
            }
        }
    }


    //end of adding product
} //class egan end here




$object = new egan;
