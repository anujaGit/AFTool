
<?php include_once('config.php');?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    
    <title>AF - Tool</title>
</head>
<body >
    <!-- <div class="overlay"></div> -->
    <div class="container">
        <!-- <div class="mt-2 mb-4">
            <div class="col-xs-12 col-sm-8 col-md-6 col-lg-6 ml-auto mr-auto">
                <div class="col-sm-12 border border-primary shadow rounded bg-white py-2 text-center"> -->
                    <h1>Welcome <?php echo ucfirst($_SESSION['name']); ?></h1>
<?php include 'headerNav.php';?>


<table class="table table-striped table-bordered">
    <thead>
        <tr class="bg-primary text-white">
            <th>Sr#</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Order</th>
            <th>Remark</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $s  =   '';
        foreach($userData as $val){
            $s++;
        ?>
        <tr>
            <td><?php echo $s;?></td>
            <td><?php echo $val['name'];?></td>
            <td><?php echo $val['phone_number'];?></td>
            <td><?php echo $val['remark'];?></td>
            <td><?php echo $val['order_type'];?></td>
            <td align="center">
                <a href="edit-users.php?editId=<?php echo $val['id'];?>" class="text-primary"><i class="fa fa-fw fa-edit"></i> Edit</a> | 
                <a href="delete.php?delId=<?php echo $val['id'];?>" class="text-danger"><i class="fa fa-fw fa-trash"></i> Delete</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

</div> <!--/.container-->
    
    <!-- Optional JavaScript --> 
    <!-- jQuery first, then Popper.js, then Bootstrap JS --> 
    
</body>
</html>