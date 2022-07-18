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
                    <p>Chi tiết hóa đơn</p>
                    <a href="?controller=order" class="home-content-table_header-link">
                        <i class='bx bx-arrow-back'></i>
                        Quay lại
                    </a>
                </div>
                <div class="info-detail">
                    <div class="order-id-wrap">
                        <h4 class="order-id">Đơn hàng #<?php echo $order['id'] ?> <span>Chờ duyệt</span></h4>
                        <h4 class="order-id">Thời gian đặt: <?php echo $order['time'] ?> </h4>
                    </div>
                    <div class="home-content-table_section home-content-table-order_details">
                        <table>
                            <thead>
                                <tr>
                                    <th class="order-item-product">STT</th>
                                    <th class="order-item-product">Hình ảnh</th>
                                    <th class="order-item-product">Tên sản phẩm</th>
                                    <th class="order-item-product">Số lượng</th>
                                    <th class="order-item-product">Giá</th>
                                    <th class="order-item-product">Thành tiền</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($table as $value) : ?>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="./Public/img/product/<?php echo $value['img'] ?>" alt=""></td>
                                        <td><?php echo $value['name'] ?></td>
                                        <td><?php echo $value['quantity'] ?></td>
                                        <td><?php echo $value['price'] ?></td>
                                        <td><?php echo $value['total'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="order-info-receive-wrap">
                        <div class="order-info-receive">
                            <span class="order-info-receive-text"><span>Tên người nhận:</span> <?php echo $order['name_receive'] ?> </span>
                            <span class="order-info-receive-text"><span>Số điện thoại người nhận:</span><?php echo $order['phone_receive'] ?></span>
                            <span class="order-info-receive-text"><span>Địa chỉ người nhận:</span> <?php echo $order['address_receive'] ?></span>
                        </div>
                        <div class="order-info-receive-total">Tổng tiền: <?php echo $order['total_price'] ?></div>
                    </div>
                    <div class="btn-status-wrap">
                        <a href="" class="btn-status-link">Xác nhận</a>
                        <a href="" class="btn-status-link">Hủy</a>
                    </div>
                </div>
            </div>
            <!-- Home Content begin -->
        </div>
</body>

</html>