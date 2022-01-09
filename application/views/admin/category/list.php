  <div class="container mt-3" style="width:70% ; height: 100%;">
    <div class="container shadow-container mt-3">
        <?php if($this->session->flashdata('cat_success') != ""):?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('cat_success');?>
        </div>
        <?php endif ?>
        <?php if($this->session->flashdata('error') != ""):?>
        <div class="alert alert-danger">
            <?php echo $this->session->flashdata('error');?>
        </div>
        <?php endif ?>
  <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <h2>All Categories</h2>
                </div>
            </div>
            <div class="table-responsive-sm">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr style="background: skyblue;">
                            <th>ID</th>
                            <th>Category Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <?php if(!empty($cats)) { ?>
                        <?php foreach($cats as $cat) {?>
                        <tr>
                            <td><?php echo $cat['c_id']; ?></td>
                            <td><?php echo $cat['c_name']; ?></td>
                            <td>
                                <a href="<?php echo base_url().'admin/category/edit/'.$cat['c_id']?>"
                                    class="btn btn-info mb-1"><i
                                        class="fas fa-edit mr-1"></i>Edit</a>
                                <a href=""
                                    class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</a>

                            </td>
                        </tr>
                        <?php } ?>
                        <?php } else { ?>
                        <tr>
                            <td colspan="4" style="text-align: center;color: red;">Records Not found</td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>    
</div>
