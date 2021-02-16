<?php include('header.php');

$object->add_category();

?>

<div class="col-md-10">
    <h3>Add Category</h3>
    <form action="" method="POST">
        <div class="form-group">
            <label for="">Name Category</label>
            <input type="text" class="form-control" name="categoryname" id="" aria-describedby="helpId" placeholder="Enter New Category Name">
        </div>
        <button class="btn btn-primary" type="submit" name="addcategory_btn">
            Add Category
        </button>
    </form>

</div>

<?php include('footer.php');

?>