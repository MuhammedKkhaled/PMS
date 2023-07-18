<?php

include("../app/config.php");
include("../inc/header.php");


?>
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-body">
                        <form action="<?= APP_URL . 'app/categories/addCategory.php' ?>" method="post">
                            <div class="mb-3">
                                <label for="name">Category Name :</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="text-end">
                                <input type="submit" value="Submit" class="btn btn-dark">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content -->


<?php include_once("../inc/footer.php") ?>