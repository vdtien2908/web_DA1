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
        <div class="form-layout-wrap">
            <div class="form-layout-header">
                <p>Thêm Khách hàng mới</p>
                <a href="?controller=user" class="btn-wrap-link">
                    <i class='bx bx-arrow-back'></i>
                    Quay lại
                </a>
            </div>
            <form class="form-layout">
                <p>Nhập Thông tin</p>
                <div class="form-field-wrap">
                    <div class="form-field add-product form-child-1">
                        <input type="text" class="form-input" placeholder=" ">
                        <label for=" name" class=" form-label">Tên</label>
                    </div>
                    <div class="form-field add-product form-child-2">
                        <input type="password" class="form-input" placeholder=" ">
                        <label for=" name" class=" form-label">Ngày sinh</label>
                    </div>
                </div>
                <div class="form-field-wrap">
                    <div class="form-field add-product form-child-1">
                        <input type="text" class="form-input" placeholder=" ">
                        <label for=" name" class=" form-label">Email</label>
                    </div>

                    <div class="form-field add-product form-child-2">
                        <input type=" text" class="form-input" placeholder=" ">
                        <label for=" name" class=" form-label">Điện thoại</label>
                    </div>
                </div>
                <div class="form-field-wrap">
                    <div class="form-field add-product form-child-1">
                        <input type="password" class="form-input" placeholder=" ">
                        <label for=" name" class=" form-label">Mật khẩu</label>
                    </div>
                    <div class="form-field add-product form-child-2">
                        <input type="password" class="form-input" placeholder=" ">
                        <label for=" name" class=" form-label">Nhập lại mật khẩu</label>
                    </div>
                </div>
                <div class="form-field add-product">
                    <textarea cols="9" type="text" class="form-input" placeholder=" "></textarea>
                    <label for=" name" class=" form-label">Địa chỉ</label>
                </div>
                <div class="form-select">
                    <select name="manufacturer" class="form-select-child">
                        <option selected disabled>-- Giới tính --</option>
                        <option value="0">Nam</option>
                        <option value="1">Nữ</option>
                    </select>
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