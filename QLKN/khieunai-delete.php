<?php
    include("../db/connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=khieunai.css?v=<?php echo time();?>">
    <title>Xóa khiếu nại </title>
    <script src="load.js"></script>
</head>
<body>
<?php
        $MaVD = $_GET['MaVD'];
        $query = "DELETE FROM tbl_vande WHERE MaVD = '".$MaVD."'";
        $result = mysqli_query($conn, $query);
        if($result){
            echo '<script>
                alert("Xóa dữ liệu thành công");
                window.location.href="khieunai.php";
            </script>';
        }
        else{
            echo 'Xóa dữ liệu thất bại';
        }
?>
</body>
</html>