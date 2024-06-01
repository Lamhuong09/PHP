<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container">
        <h3 class="text-center text-uppercase text-success mt-3 mb-3">Quản lí tài liệu</h3>

        <a href="<?= DOMAIN . 'app/views/patient/add.php?id='; ?>" class="btn btn-success">Thêm mới tài liệu</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Nsx</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xoá</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($patients as $patient) {
                ?>
                    <tr>
                        <th scope="row"><?= $patient->getId(); ?></th>
                        <td><?= $patient->getFullName(); ?></td>
                        <!-- Sửa phần hiển thị ngày tháng -->
                        <td><?= date('d/m/Y', strtotime($patient->getDate())); ?></td>
                        <!-- Kết thúc phần sửa đổi -->
                        <td><?= $patient->getNsx(); ?></td>

                        <td>
                            <a href="<?= DOMAIN . 'app/views/patient/edit.php?id=' . $patient->getId() ?>">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                        </td>

                        <td>
                            <a href="<?= DOMAIN . 'app/views/patient/delete.php?id=' . $patient->getId() ?>">
                                <i class="bi bi-trash3"></i>
                            </a>
                        </td>

                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
