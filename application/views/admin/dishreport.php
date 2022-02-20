<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hunger Points - Print Dish Report</title>
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
                    <h3 style="color:purple"><b>Dishes Report</b></h3>
                </div>
                
                <div class="col-12">
                <hr>
                    <table class="table table-striped table-responsive table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Dish Name</th>
                                <th>Ordered Count</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            <?php if(!empty($dishReport)) {?>
                            <?php foreach($dishReport as $report) { ?>
                            <tr>
                                <td><?php echo $report->d_id; ?></td>
                                <td><?php echo $report->d_name; ?></td>
                                <td><?php echo $report->qty; ?></td>
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