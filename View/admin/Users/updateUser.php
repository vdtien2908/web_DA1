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
                <p>Cập nhật thông tin khách hàng</p>
                <a href="?controller=user" class="btn-wrap-link">
                    <i class='bx bx-arrow-back'></i>
                    Quay lại
                </a>
            </div>
            <form class="form-layout" action="?controller=user&action=update&id=<?php echo $user['id']; ?>" method="POST" id='form-update-user'>
                <p>Cập nhật thông tin</p>
                <div class="form-field-wrap">
                    <div class="add-product form-child-1">
                        <div class='form-field'>
                            <!--  .message_error -->
                            <input id='name' type="text" class="form-input" placeholder=" " name="name" autocomplete="off" value="<?php echo $user['name']; ?>">
                            <label for=" name" class=" form-label">Tên</label>
                        </div>
                        <!-- form-message -->
                        <span class="form-messages"></span>
                    </div>
                    <div class="add-product form-child-2">
                        <div class='form-field'>
                            <input id='date' type="date" class="form-input" placeholder=" " name="birthday" autocomplete="off" value="<?php echo $user['birthday']; ?>">
                            <label for=" name" class=" form-label">Ngày sinh</label>
                        </div>
                        <span class="form-messages"></span>
                    </div>
                </div>
                <div class="form-field-wrap">
                    <div class="add-product form-child-1">
                        <div class='form-field'>
                            <input id='email' type="text" class="form-input" placeholder=" " name="email" autocomplete="off" value="<?php echo $user['email']; ?>">
                            <label for=" name" class=" form-label">Email</label>
                        </div>
                        <span class="form-messages"></span>
                    </div>
                    <div class="add-product form-child-2">
                        <div class='form-field'>
                            <input id='phone' type="text" class="form-input" placeholder=" " name="phone" autocomplete="off" value="<?php echo $user['phone']; ?>">
                            <label for=" name" class=" form-label">Số điện thoại</label>
                        </div>
                        <span class="form-messages"></span>
                    </div>
                </div>

                <div>
                    <div class="form-field" style="height: 80px;">
                        <textarea id='address' class="form-input" placeholder=" " name="address" autocomplete="off"><?php echo $user['address']; ?></textarea>
                        <label for=" name" class=" form-label">Địa chỉ</label>
                    </div>
                    <span class="form-messages"></span>
                </div>
                <div class="form-select">
                    <div>
                        <select id='gender' class="form-select-child " name="gender">
                            <option value=" " selected disabled>-- Giới tính --</option>
                            <option value="1" <?php if ($user['gender'] == 1) echo 'selected' ?>>Nam</option>
                            <option value="0" <?php if ($user['gender'] == 0) echo 'selected' ?>>Nữ</option>
                        </select>
                    </div>
                    <span class="form-messages"></span>
                </div>

                <div class="btn-wrap">
                    <button type="submit" class="btn-wrap-child">Cập nhật</button>
                </div>
            </form>
        </div>
        <!-- Home Content begin -->
    </div>
    <script src="./Public/js/validator.js"></script>
    <script>
        validator({
            form: '#form-update-user',
            errorSelector: '.form-messages',
            rules: [
                // isRequired
                validator.isRequired('#name', 'Vui lòng nhập tên đầy đủ'),
                validator.isRequired('#phone', 'Bạn chưa nhập số điện thoại'),
                validator.isRequired('#address', 'Bạn chưa nhập địa chỉ'),
                validator.isRequired('#date', 'Bạn chưa nhập ngày sinh'),
                validator.isRequired('#gender', 'Bạn chưa chọn giới tính'),
                // isMinLength
                validator.minLength('#phone', 10, 'Số điện thoại ít nhất 10 số'),
                // isCheck
                validator.isPhone('#phone'),
                validator.isEmail('#email'),

            ]
        });
    </script>
</body>

</html>