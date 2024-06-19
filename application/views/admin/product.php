<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header bg-transparent border-bottom">
                Add product
            </div>
            <div class="card-body">

                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label text-uppercase"> product name </label>
                                <input type="text" class="form-control" name="title" value="<?= @$product_row['title'] ?>" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label text-uppercase"> product Image </label>
                                <input type="file" class="form-control" name="picture[]" value="" multiple >
                                <?php 
                                if(isset($product_row['picture'])){
                                    ?>
                                    <img src="<?= checkImageFile($product_row['picture'],'uploads/product/') ?>" class="img-responsive avatar-lg"/>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label text-uppercase"> Category </label>
                               <select>
                               <?php
                        $i = 1;
                        if (!empty($category)) {
                            foreach ($category as $row) {
                        ?>
                                <option value=""><?= $row['name']; ?></option>
                                <?php
                            }
                        }
                        ?>
                               </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label text-uppercase"> product Image </label>
                                <textarea  name="description"><?= @$product_row['description'] ?></textarea>
                            </div>
                        </div>
                        
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary w-md">Submit</button>
                    </div>
                </form>
            </div>
            <!-- end card body -->
        </div>

        <div class="card">
            <div class="card-header bg-transparent border-bottom">
                product list
            </div>
            <div class="card-body">

                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>S.no.</th>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Picture</th>
                            <th></th>
                             
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        if (!empty($product)) {
                            foreach ($product as $row) {
                                $gallery = getSIngh
                        ?>

                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= convertDatedmy($row['create_date']); ?></td>
                                    <td><?= $row['title']; ?></td>
                                    <td><img src="<?= checkImageFile($row['picture'],'uploads/product/') ?>" class="img-responsive avatar-sm" /></td>
                                    <td><a href="<?= base_url('manage_product/' . $row['id']) ?>" class="btn btn-primary"> <i class="fas fa-edit"></i> </a> <a href="<?= base_url('manage_product?did=' . $row['id']) ?>" onclick="return confirm('Are you sure to delete this data?')" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                                </tr>
                        <?php
                            }
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>