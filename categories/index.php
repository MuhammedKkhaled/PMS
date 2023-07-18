<?php
include("../app/categories/viewCategories.php");
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

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($category = mysqli_fetch_array($result)) :
                                ?>
                                    <tr>
                                        <th><?= $category['_id'] ?></th>
                                        <td><?= $category['name'] ?></td>
                                        <td class="d-flex">
                                            <a href="<?= APP_URL . 'categories/edit.php?id=' . $category['_id'] ?>" class="btn btn-primary">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <a href="<?= APP_URL . "app/categories/deleteCategory.php?id=" . $category['_id'] ?>" class="btn btn-danger ms-2">
                                                <i class="fa-solid fa-trash">
                                                </i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
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