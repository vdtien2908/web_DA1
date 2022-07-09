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
                    <p>Kết quả tìm kiếm</p>
                    <a href="?controller=user" class="home-content-table_header-link">
                        <i class='bx bx-arrow-back'></i>
                        Quay lại
                    </a>
                </div>
                <div class="home-content-table_section">
                    <table>
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên</th>
                                <th>Ngày sinh</th>
                                <th>Gmail</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Vũ Đức Tiến</td>
                                <td>29-08-2002</td>
                                <td>vuductien@gmail.com</td>
                                <td>
                                    <div class="button-wrap">
                                        <a href="?controller=user&action=show" class="">
                                            <button>
                                                <i class='bx bx-show'></i>
                                            </button>
                                        </a>
                                        <a href="?controller=user&action=update">
                                            <button>
                                                <i class='bx bxs-edit'></i>
                                            </button>
                                        </a>
                                        <a href="?controller=user&action=delete">
                                            <button>
                                                <i class='bx bx-trash'></i>
                                            </button>
                                        </a>
                                    </div>
                                </td>
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