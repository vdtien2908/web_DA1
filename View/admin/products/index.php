<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./Public/css/admin/Sidebar.css">
    <link rel="stylesheet" href="./Public/css/admin/Product.css">
    <title>Sản Phẩm</title>
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
                    <p>Sản phẩm</p>
                    <form action="?controller=product&action=find" method="post">
                        <input type="text" placeholder="Tìm kiếm">
                        <button class="btn-search" type="submit">
                            <i class='bx bx-search'></i>
                        </button>
                    </form>
                    <a href="?controller=product&action=add">
                        <button class="btn-card-add">
                            <i class='bx bx-cart-add'></i>
                        </button>
                    </a>
                </div>
                <div class="home-content-table_section">
                    <table>
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Hình ảnh</th>
                                <th>Tên</th>
                                <th>Giá</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><img src="./Public/img/2.jpg" alt=""></td>
                                <td>Nước hoa pháp</td>
                                <td>1400000 VND</td>
                                <td>
                                    <div class="button-wrap">
                                        <a href="?controller=product&action=show">
                                            <button>
                                                <i class='bx bx-show'></i>
                                            </button>
                                        </a>
                                        <a href="?controller=product&action=update">
                                            <button>
                                                <i class='bx bxs-edit'></i>
                                            </button>
                                        </a>

                                        <a href="?controller=product&action=delete">
                                            <button>
                                                <i class='bx bx-trash'></i>
                                            </button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><img src="./Public/img/2.jpg" alt=""></td>
                                <td>Nước hoa pháp</td>
                                <td>1400000 VND</td>
                                <td>
                                    <div class="button-wrap">
                                        <a href="?controller=product&action=show">
                                            <button>
                                                <i class='bx bx-show'></i>
                                            </button>
                                        </a>
                                        <a href="?controller=product&action=update">
                                            <button>
                                                <i class='bx bxs-edit'></i>
                                            </button>
                                        </a>

                                        <a href="?controller=product&action=delete">
                                            <button>
                                                <i class='bx bx-trash'></i>
                                            </button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><img src="./Public/img/2.jpg" alt=""></td>
                                <td>Nước hoa pháp</td>
                                <td>1400000 VND</td>
                                <td>
                                    <div class="button-wrap">
                                        <a href="?controller=product&action=show">
                                            <button>
                                                <i class='bx bx-show'></i>
                                            </button>
                                        </a>
                                        <a href="?controller=product&action=update">
                                            <button>
                                                <i class='bx bxs-edit'></i>
                                            </button>
                                        </a>

                                        <a href="?controller=product&action=delete">
                                            <button>
                                                <i class='bx bx-trash'></i>
                                            </button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><img src="./Public/img/2.jpg" alt=""></td>
                                <td>Nước hoa pháp</td>
                                <td>1400000 VND</td>
                                <td>
                                    <div class="button-wrap">
                                        <a href="?controller=product&action=show">
                                            <button>
                                                <i class='bx bx-show'></i>
                                            </button>
                                        </a>
                                        <a href="?controller=product&action=update">
                                            <button>
                                                <i class='bx bxs-edit'></i>
                                            </button>
                                        </a>

                                        <a href="?controller=product&action=delete">
                                            <button>
                                                <i class='bx bx-trash'></i>
                                            </button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><img src="./Public/img/2.jpg" alt=""></td>
                                <td>Nước hoa pháp</td>
                                <td>1400000 VND</td>
                                <td>
                                    <div class="button-wrap">
                                        <a href="?controller=product&action=show">
                                            <button>
                                                <i class='bx bx-show'></i>
                                            </button>
                                        </a>
                                        <a href="?controller=product&action=update">
                                            <button>
                                                <i class='bx bxs-edit'></i>
                                            </button>
                                        </a>

                                        <a href="?controller=product&action=delete">
                                            <button>
                                                <i class='bx bx-trash'></i>
                                            </button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><img src="./Public/img/2.jpg" alt=""></td>
                                <td>Nước hoa pháp</td>
                                <td>1400000 VND</td>
                                <td>
                                    <div class="button-wrap">
                                        <a href="?controller=product&action=show">
                                            <button>
                                                <i class='bx bx-show'></i>
                                            </button>
                                        </a>
                                        <a href="?controller=product&action=update">
                                            <button>
                                                <i class='bx bxs-edit'></i>
                                            </button>
                                        </a>

                                        <a href="?controller=product&action=delete">
                                            <button>
                                                <i class='bx bx-trash'></i>
                                            </button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><img src="./Public/img/2.jpg" alt=""></td>
                                <td>Nước hoa pháp</td>
                                <td>1400000 VND</td>
                                <td>
                                    <div class="button-wrap">
                                        <a href="?controller=product&action=show">
                                            <button>
                                                <i class='bx bx-show'></i>
                                            </button>
                                        </a>
                                        <a href="?controller=product&action=update">
                                            <button>
                                                <i class='bx bxs-edit'></i>
                                            </button>
                                        </a>

                                        <a href="?controller=product&action=delete">
                                            <button>
                                                <i class='bx bx-trash'></i>
                                            </button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><img src="./Public/img/2.jpg" alt=""></td>
                                <td>Nước hoa pháp</td>
                                <td>1400000 VND</td>
                                <td>
                                    <div class="button-wrap">
                                        <a href="?controller=product&action=show">
                                            <button>
                                                <i class='bx bx-show'></i>
                                            </button>
                                        </a>
                                        <a href="?controller=product&action=update">
                                            <button>
                                                <i class='bx bxs-edit'></i>
                                            </button>
                                        </a>

                                        <a href="?controller=product&action=delete">
                                            <button>
                                                <i class='bx bx-trash'></i>
                                            </button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><img src="./Public/img/2.jpg" alt=""></td>
                                <td>Nước hoa pháp</td>
                                <td>1400000 VND</td>
                                <td>
                                    <div class="button-wrap">
                                        <a href="?controller=product&action=show">
                                            <button>
                                                <i class='bx bx-show'></i>
                                            </button>
                                        </a>
                                        <a href="?controller=product&action=update">
                                            <button>
                                                <i class='bx bxs-edit'></i>
                                            </button>
                                        </a>

                                        <a href="?controller=product&action=delete">
                                            <button>
                                                <i class='bx bx-trash'></i>
                                            </button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><img src="./Public/img/2.jpg" alt=""></td>
                                <td>Nước hoa pháp</td>
                                <td>1400000 VND</td>
                                <td>
                                    <div class="button-wrap">
                                        <a href="?controller=product&action=show">
                                            <button>
                                                <i class='bx bx-show'></i>
                                            </button>
                                        </a>
                                        <a href="?controller=product&action=update">
                                            <button>
                                                <i class='bx bxs-edit'></i>
                                            </button>
                                        </a>

                                        <a href="?controller=product&action=delete">
                                            <button>
                                                <i class='bx bx-trash'></i>
                                            </button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><img src="./Public/img/2.jpg" alt=""></td>
                                <td>Nước hoa pháp</td>
                                <td>1400000 VND</td>
                                <td>
                                    <div class="button-wrap">
                                        <a href="?controller=product&action=show">
                                            <button>
                                                <i class='bx bx-show'></i>
                                            </button>
                                        </a>
                                        <a href="?controller=product&action=update">
                                            <button>
                                                <i class='bx bxs-edit'></i>
                                            </button>
                                        </a>

                                        <a href="?controller=product&action=delete">
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