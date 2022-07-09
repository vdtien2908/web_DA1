<?php
$page =  strtolower($_REQUEST['controller'])
?>

<div class="sidebar">
    <div class="logo-content">
        <div class="logo">
            <div class="logo-name">VTSTORE</div>
        </div>
    </div>
    <ul class="nav-list">
        <li>
            <a href="?controller=home" class="<?php if ($page == 'home') {
                                                    echo 'active';
                                                } ?>">
                <i class="bx bxs-home"></i>
                <span class="links-name">Tổng Quan</span>
            </a>
        </li>
        <li>
            <a href="?controller=product" class="<?php if ($page == 'product') {
                                                        echo 'active';
                                                    } ?>">
                <i class="bx bxs-shopping-bag"></i>
                <span class="links-name">Sản Phẩm</span>
            </a>
        </li>

        <li>
            <a href="?controller=category" class="<?php if ($page == 'category') {
                                                        echo 'active';
                                                    } ?>">
                <i class="bx bxs-grid-alt"></i>
                <span class="links-name">Danh mục</span>
            </a>
        </li>
        <li>
            <a href="?controller=manufacturer" class="<?php if ($page == 'manufacturer') {
                                                            echo 'active';
                                                        } ?>">
                <i class='bx bxs-buildings'></i>
                <span class="links-name">Nhà sản xuất</span>
            </a>
        </li>
        <li>
            <a href="?controller=user" class="<?php if ($page == 'user') {
                                                    echo 'active';
                                                } ?>">
                <i class='bx bxs-user-detail'></i>
                <span class="links-name">Khách hàng</span>
            </a>
        </li>
        <li>
            <a href="?controller=order" class="<?php if ($page == 'order') {
                                                    echo 'active';
                                                } ?>">
                <i class='bx bx-news'></i>
                <span class="links-name">Hóa đơn</span>
            </a>
        </li>
    </ul>
    <div class="profile-content">
        <div class="profile">
            <div class="profile-details">
                <img src="./Public/img/img_admin.jpg" alt="" />
                <div class="name-job">
                    <div class="name">Administrator</div>
                    <div class="job"></div>
                </div>
            </div>
            <i class="bx bx-log-out" id="log-out"></i>
        </div>
    </div>
</div>