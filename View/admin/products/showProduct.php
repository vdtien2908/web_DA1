<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./Public/css/admin/sidebar.css">
    <link rel="stylesheet" href="./Public/css/admin/Product.css">
    <title>Sản phẩm</title>
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
                    <p>Chi tiết sản phẩm</p>
                    <a href="?controller=product" class="home-content-table_header-link">
                        <i class='bx bx-arrow-back'></i>
                        Quay lại
                    </a>
                </div>
                <div class="home-content-table_section">
                    <table>
                        <thead>
                            <tr>
                                <th>Hình ảnh</th>
                                <th>Tên</th>
                                <th>Giá</th>
                                <th>Mô tả</th>
                                <th>Nhà cung cấp</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="./Public/img/2.jpg" alt=""></td>
                                <td>Nước hoa pháp</td>
                                <td>1400000 VND</td>
                                <td>Thơm lâu bền</td>
                                <td>Việt Nam</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Home Content begin -->
    </div>
    <script src="./js/main.js"></script>
</body>

</html>