<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm tài liệu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <?php 
        $id = $_GET['id'];
        $conn = mysqli_connect('localhost','root','','qltl');
        $sql = "SELECT * FROM `qltl`.`tailieuql` WHERE  `id`= $id;";
        // $conn->query($sql);
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        if(!$conn) {
            echo "Fail";
        }
    ?>
    <div class="container">
        <h1 class="text-center">Sửa</h1>
        <form method="post">
            <input type="hidden" class="form-control" id="id" name="id" placeholder="Enter Name" value="<?php echo $row['id']?>">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="<?php echo $row['name']?>">
                <small id="nameHelp" class="form-text text-muted">Nhập đúng email </small>
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <!-- Sử dụng input type="date" cho ngày tháng -->
                <input type="date" class="form-control" name="date" id="date" value="<?php echo $row['date']?>">
                <small id="dateHelp" class="form-text text-muted">Nhập ngày xuất bản</small>
            </div>
            <div class="form-group">
                <label for="nsx">NSX</label>
                <input type="text" class="form-control" name="nsx" id="nsx" placeholder="NSX" value="<?php echo $row['nsx']?>">
                <small id="nsxHelp" class="form-text text-muted">Nhập nhà sản xuất</small>
            </div>
            <input type="submit" name="btn-submit" class="btn btn-primary" onclick="updatePatient()">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../../../public/js/patient.js"></script>
    <script src="../../../public/js/jquery-3.7.1.min.js"></script>
</body>
</html>
