<?php include('header.php');
$object->add_product();

?>

<section class="col-lg-10 px-3">

    <h3 class="">
        Add Product
    </h3>
    <form action="" method="POST" enctype="multipart/form-data" class="row">
        <div class="form-group col-md-6">
            <label for="">Product Name</label>
            <input type="text" class="form-control" name="pname" id="" aria-describedby="helpId" placeholder="Enter Product Name">
        </div>
        <div class="form-group col-md-6">
            <label for="">Stock</label>
            <input type="text" class="form-control" name="pstock" id="" aria-describedby="helpId" placeholder="Product Stock (Quantity left)">
        </div>
        <div class="form-group col-md-6">
            <label for="">Sale Price</label>
            <input type="text" class="form-control" name="saleprice" id="" aria-describedby="helpId" placeholder="Sale Price">
        </div>
        <div class="form-group col-md-6">
            <label for="">Buy Price</label>
            <input type="text" class="form-control" name="buyprice" id="" aria-describedby="helpId" placeholder="Buy Price">
        </div>
        <div class="form-group col-md-6">
            <label for="">Catalog</label>
            <select class="form-control" name="catalog" id="">
                <option selected>Please Select a Category</option>
                <?php
                foreach ($object->getcategory() as $catname) {
                    // echo ('<option value="'.$catname['id']."'>'.$catname['name'].'</option>');
                    echo ('<option value="' . $catname['id'] . '">' . $catname['name'] . '</option>');
                }
                ?>

            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="">User</label>
            <input type="text" class="form-control" name="user" id="" aria-describedby="helpId" placeholder="Entry By">
        </div>
        <div class="form-group col-md-12">
            <label for="">Photo</label>
            <input type="file" name="photo[]" multiple="true" class="form-control"  id="" aria-describedby="helpId" placeholder="">
        </div>
        <div class="form-group col-md-12">
            <label for="">Product Description</label>
            <textarea type="text" class="form-control" name="pdesc" id="" aria-describedby="helpId" placeholder="Enter Product Full Description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-block mx-3" name="addproduct_btn">
            Add Product
        </button>
    </form>
</section>




<?php include('footer.php');


?>