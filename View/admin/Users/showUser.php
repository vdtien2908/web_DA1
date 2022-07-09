<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./Public/css/admin/sidebar.css">
    <link rel="stylesheet" href="./Public/css/admin/user.css">
    <title>Khách hàng</title>
</head>

<body>
    <div class="container">
        <!-- Sidebar begin -->
        <?php include "./View/admin/include/sidebar.php" ?>
        <!-- Sidebar end -->

        <!-- Home Content begin -->
        <div class="home-content">
            <div class="home-content-table">
                <div class="home-content-table_header">
                    <p>Chi tiết thông tin</p>
                    <a href="?controller=user" class="home-content-table_header-link">
                        <i class='bx bx-arrow-back'></i>
                        Quay lại
                    </a>
                </div>
                <div class="info-details">
                    <div class="info-details-heading">
                        <p>Thông tin</p>
                    </div>
                    <div class="info-details-child">
                        <span class=info-details-child-text>
                            Vũ Đức Tiến
                            <span class=info-details-child-text-label>Tên Khách hàng</span>
                        </span>
                        <span class=info-details-child-text>
                            0333669832
                            <span class=info-details-child-text-label>Điện thoại</span>
                        </span>
                        <span class=info-details-child-text>
                            Nam
                            <span class=info-details-child-text-label>Giới tính</span>
                        </span>
                    </div>
                    <div class="info-details-child">
                        <span class=info-details-child-text>
                            vuductien2908@gmail.com
                            <span class=info-details-child-text-label>Email</span>
                        </span>
                        <span class=info-details-child-text>
                            0333669832
                            <span class=info-details-child-text-label>Mật khẩu</span>
                        </span>
                    </div>
                    <div class="info-details-child">
                        <span class=info-details-child-text>
                            Ninh Kiều, Cần Thơ
                            <span class=info-details-child-text-label>Địa chỉ</span>
                        </span>
                    </div>
                    <a href="?controller=user&action=update" class="info-details-link">Cập nhật</a>
                </div>
            </div>
            <!-- Home Content begin -->
        </div>
        <script src="./js/main.js"></script>
</body>

</html>