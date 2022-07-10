<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./Public/css/admin/sidebar.css">
    <link rel="stylesheet" href="./Public/css/admin/manufacturer.css">
    <title>Nhà sản xuất</title>
</head>

<body>
    <div class="container">
        <!-- Sidebar begin -->
        <?php include "./View/admin/include/sidebar.php" ?>
        <!-- Sidebar end -->

        <!-- Home Content begin -->
        <div class="form-layout-wrap">
            <div class="form-layout-header">
                <p>Thêm nhà sản suất</p>
                <a href="?controller=manufacturer" class="btn-wrap-link">
                    <i class='bx bx-arrow-back'></i>
                    Quay lại
                </a>
            </div>
            <form action="?controller=manufacturer&action=create" class="form-layout" method="POST">
                <p>Nhập thông tin nhà sản xuất</p>
                <div class="form-field">
                    <input type="text" class="form-input" placeholder=" " name="name">
                    <label for=" name" class=" form-label">Tên</label>
                </div>
                <div class="form-field">
                    <input type="text" class="form-input" placeholder=" " name="phone">
                    <label for=" name" class=" form-label">Số điện thoại</label>
                </div>
                <div class="form-field">
                    <input type="text" class="form-input" placeholder=" " name="address">
                    <label for=" name" class=" form-label">Địa chỉ</label>
                </div>

                <div class="btn-wrap">
                    <button type="submit" class="btn-wrap-child">Nhập</button>
                </div>
            </form>
        </div>
        <!-- Home Content begin -->
    </div>

</body>

</html>