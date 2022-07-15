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
                    <p>Khách hàng</p>
                    <form action="?controller=user&action=find" method="POST">
                        <input type="text" placeholder="Tìm kiếm" name='name' autocomplete="off">
                        <button class="btn-search" type="submit">
                            <i class='bx bx-search'></i>
                        </button>
                    </form>
                    <a href="?controller=user&action=formCreate">
                        <button class="btn-card-add">
                            <i class='bx bxs-user-plus'></i>
                        </button>
                    </a>
                </div>
                <div class="home-content-table_section">
                    <table>
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên</th>
                                <th>Ngày sinh</th>
                                <th>Điện thoại</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $number = 1;
                            foreach ($user as $value) : ?>
                            <tr>
                                <td><?php echo $number;
                                        $number++ ?></td>
                                <td><?php echo $value['name'] ?></td>
                                <td>
                                    <?php $date = strtotime($value['birthday']);
                                        $date = date('d/m/Y', $date);
                                        echo $date;
                                        ?>
                                </td>
                                <td><?php echo $value['phone'] ?></td>
                                <td>
                                    <div class="button-wrap">
                                        <a href="?controller=user&action=show&id=<?php echo $value['id'] ?>" class="">
                                            <button>
                                                <i class='bx bx-show'></i>
                                            </button>
                                        </a>
                                        <a href="?controller=user&action=update&<?php echo $value['id'] ?>">
                                            <button>
                                                <i class='bx bxs-edit'></i>
                                            </button>
                                        </a>
                                        <a href="?controller=user&action=delete&id=<?php echo $value['id'] ?>">
                                            <button>
                                                <i class='bx bx-trash'></i>
                                            </button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Home Content begin -->
    </div>
</body>

</html>