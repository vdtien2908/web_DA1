<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./Public/css/admin/sidebar.css">
    <link rel="stylesheet" href="./Public/css/admin/order.css">
    <title>Hóa đơn</title>
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
                    <p>Hóa đơn</p>
                    <form action="?controller=order&action=find" method="post">
                        <input type=" text" placeholder="Tìm kiếm">
                        <button class="btn-search">
                            <i class='bx bx-search'></i>
                        </button>
                    </form>
                    <a href="?controller=order&action=create">
                        <button class="btn-card-add">
                            <i class='bx bxs-file-plus'></i>
                        </button>
                    </a>
                </div>
                <div class="home-content-table_section">
                    <table>
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Thời gian</th>
                                <th>Trạng thái</th>
                                <th>Khách hàng</th>
                                <th>Tổng tiền</th>
                                <th>Duyệt</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>12-3-2022</td>
                                <td>Mới đặt</td>
                                <td>Vũ Đức Tiến</td>
                                <td>12000000 VND</td>
                                <td>
                                    <div class="button-wrap-confirm">
                                        <button class="btn-submit">Xác nhận</button>
                                        <button class="btn-destroy">Hủy</button>
                                    </div>
                                </td>
                                <td>
                                    <div class=" button-wrap">
                                        <a href="?controller=order&action=show">
                                            <button>
                                                <i class='bx bx-show'></i>
                                            </button>
                                        </a>
                                        <a href="?controller=order&action=update">
                                            <button>
                                                <i class='bx bxs-edit'></i>
                                            </button>
                                        </a>
                                        <a href="?controller=order&action=delete">
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