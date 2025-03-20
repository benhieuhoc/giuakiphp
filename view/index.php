<?php
include '../models/config.php'; 
$sql = "SELECT * FROM SinhVien";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lê Nguyễn Nhật Nam - 2180609081</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .student-img {
            width: 80px; height: 80px; object-fit: cover; border-radius: 50%;
        }
    </style>
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg " style="background-color:rgb(1, 124, 53);">
    <div class="container">
        <a class="navbar-brand" href="index.php">Lê Nguyễn Nhật Nam - 2180609081</a>
    </div>
</nav>


<div class="container mt-4">
    <h2 class="text-center">TRANG SINH VIÊN</h2>
    <a href="add.php" class="btn btn-primary mb-3">Thêm Sinh Viên</a>

    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>MaSV</th>
                <th>Họ Tên</th>
                <th>Giới Tính</th>
                <th>Ngày Sinh</th>
                <th>Hình</th>
                <th>Mã Ngành</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?= $row['MaSV'] ?></td>
                <td><?= $row['HoTen'] ?></td>
                <td><?= $row['GioiTinh'] ?></td>
                <td><?= date('d/m/Y', strtotime($row['NgaySinh'])) ?></td>
                <td><img src="<?= $row['Hinh'] ?>" class="student-img"></td>
                <td><?= $row['MaNganh'] ?></td>
                <td>
     <a href="edit.php?id=<?= $row['MaSV'] ?>" class="btn btn-warning btn-sm">Sửa</a>

                    <a href="delete.php?id=<?= $row['MaSV'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Xóa sinh viên Nguyễn Phi Vũ?')">Xóa</a>
                    <a href="details.php?id=<?= $row['MaSV'] ?>" class="btn btn-info btn-sm">Chi Tiết</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
