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
<form method="post">
                        
    <div class="form-row">
        <div class="form-group col-md-3">
            <label>Name <span class="text-danger">*</span></label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Enter user name" required>
        </div>
        <div class="form-group col-md-3">
            <label>User Phone <span class="text-danger">*</span></label>
            <input type="tel" name="userphone" id="userphone" class="form-control" placeholder="Enter user phone" required>
        </div>
        <div class="form-group col-md-3">
            <label>Remark <span class="text-danger">*</span></label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Enter remark" required>  
        </div>
        
    </div>
    <div class="form-row">
    <div class="form-group col-md-3">
        <label>Order Type <span class="text-danger">*</span></label>
        <input type="text" name="username" id="username" class="form-control" placeholder="Enter order type" required>
    </div>
    <div class="form-group col-md-3">
        <label>Reference By <span class="text-danger">*</span></label>
        <input type="text" name="username" id="username" class="form-control" placeholder="Enter Reference By" required>
    </div>
    <div class="form-group col-md-3">
        <label>Reference Any <span class="text-danger">*</span></label>
        <input type="text" name="username" id="username" class="form-control" placeholder="Enter Reference Any" required>
    </div>
</div>
    <div class="form-group">
        <button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-plus-circle"></i> Save</button>
    </div>
</form>

</div> <!--/.container-->
    
    <!-- Optional JavaScript --> 
    <!-- jQuery first, then Popper.js, then Bootstrap JS --> 
    
</body>
</html>

<?php
if(isset($_REQUEST['msg']) and $_REQUEST['msg']=="un"){
    echo    '<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> User name is mandatory field!</div>';
}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="ue"){
    echo    '<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> User email is mandatory field!</div>';
}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="up"){
    echo    '<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> User phone is mandatory field!</div>';
}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="ras"){
    echo    '<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> Record added successfully!</div>';
}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="rna"){
    echo    '<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Record not added <strong>Please try again!</strong></div>';
}
?>


<?php
if(isset($_REQUEST['submit']) and $_REQUEST['submit']!=""){
    extract($_REQUEST);
    if($username==""){
        header('location:'.$_SERVER['PHP_SELF'].'?msg=un');
        exit;
    }elseif($useremail==""){
        header('location:'.$_SERVER['PHP_SELF'].'?msg=ue');
        exit;
    }elseif($userphone==""){
        header('location:'.$_SERVER['PHP_SELF'].'?msg=up');
        exit;
    }else{
        $data   =   array(
                        'username'=>$username,
                        'useremail'=>$useremail,
                        'userphone'=>$userphone,
                        );
        $insert =   $db->insert('users',$data);
        if($insert){
            header('location:'.$_SERVER['PHP_SELF'].'?msg=ras');
            exit;
        }else{
            header('location:'.$_SERVER['PHP_SELF'].'?msg=rna');
            exit;
        }
    }
}
?>