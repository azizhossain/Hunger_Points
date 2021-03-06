<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hunger Points - Print Restaurant Report</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
    <script src="<?php echo base_url().'assets/js/jquery-3.6.0.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js';?>"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>public/front/css/style.css">
</head>

<body onload="window.print();">
    <div class="container my-3" style="border: 2px outset green; width: 50%;">
        <header class="mt-1 text-right">
        </header>
        <div class="report mb-3">
            <div class="row mb-3 p-3">
                <div class="col-6">
                    <h3 style="color:purple;padding-top: 20px;"><b>Restaurant Report</b></h3>
                </div>
                <div class="col-6" style="padding-left: 100px;">
                    <img src="<?= base_url('public/uploads/logo/55.png'); ?>" class="responsive-img" style="width: 200px;height: 70px;border: 0px  solid silver;">
                </div>
                
                <div class="col-12">
                <hr>
                    <table class="table table-striped table-responsive table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Restaurant Name</th>
                                <th>Total Sales</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            <?php if(!empty($resReport)) {?>
                            <?php foreach($resReport as $report) { ?>
                            <tr>
                                <td><?php echo $report->r_id; ?></td>
                                <td><?php echo $report->name; ?></td>
                                <td><?php echo'??? '.$report->price; ?></td>
                            </tr>
                            <?php } ?>
                            <?php } else {?>
                            <tr>
                                <td colspan="4">Records not found</td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>