<div class="container my-4" style="width:100% ; height: 100%;">
    <div class="row">
        <div class="col-md-6">
            <h4>Available Restaurant's</h4>
        </div>
        <div class="col-md-12">
            <table class="table table-striped table-responsive table-hover table-bordered">
                <thead>
                    <tr style="background: skyblue;">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Website</th>
                        <th>Open Hrs</th>
                        <th>Close Hrs</th>
                        <th>Open Days</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <?php if(!empty($stores)) { ?>
                    <?php foreach($stores as $store) { ?>
                    <tr>
                        <td><?php echo $store['r_id']; ?></td>
                        <td><?php echo $store['name']; ?></td>
                        <td><?php echo $store['email']; ?></td>
                        <td><?php echo $store['phone']; ?></td>
                        <td><?php echo $store['url']; ?></td>
                        <td><?php echo $store['o_hr']; ?></td>
                        <td><?php echo $store['c_hr']; ?></td>
                        <td><?php echo $store['o_days']; ?></td>
                        <td><?php echo $store['address']; ?></td>
                        <td>
                            <a href="" class="btn btn-info mb-1"><i class="fas fa-edit mr-1"></i>Edit</a>

                            <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                    <?php } else {?>
                    <tr>
                        <td colspan="10" style="text-align: center;color: red;">Records not found</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
