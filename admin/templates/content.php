<div class="col-md-9 content">
    <?php
 
    // Phân trang content
    echo
'   
    <p class="form-add-cate">
        <form method="POST" id="formAddCate" onsubmit="return false;">
            <div class="form-group">
                <label>Tên chuyên mục</label>
                <input type="text" class="form-control title" id="label_add_cate">
            </div>
            <div class="form-group">
                <label>URL chuyên mục</label>
                <input type="text" class="form-control slug" placeholder="Nhấp vào để tự tạo" id="url_add_cate">
            </div>
            <div class="form-group">
                <label>Loại chuyên mục</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="type_add_cate" value="1" checked class="type-add-cate-1"> Lớn
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="type_add_cate" value="2" class="type-add-cate-2"> Vừa
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="type_add_cate" value="3" class="type-add-cate-3"> Nhỏ
                    </label>
                </div>
            </div>
            <div class="form-group hidden parent-add-cate">
                <label>Parent chuyên mục</label>
                <select id="parent_add_cate" class="form-control">
                </select>
            </div>
            <div class="form-group">
                <label>Sort chuyên mục</label>
                <input type="text" class="form-control" id="sort_add_cate">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Tạo</button>
            </div>
            <div class="alert alert-danger hidden"></div>
        </form>
    </p>
';
    // Lấy tham số tab
    if (isset($_GET['tab']))
    {
        $tab = trim(addslashes(htmlspecialchars($_GET['tab'])));
    }
    else
    {
        $tab = '';
    }
 
    // Nếu có tham số tab
    if ($tab != '')
    {
        // Hiển thị template chức năng theo tham số tab
        if ($tab == 'profile')
        {
            // Hiển thị template hồ sơ cá nhân
            require_once 'templates/profile.php';
        }
        else if ($tab == 'posts')
        {
            // Hiển thị template bài viết
            require_once 'templates/posts.php';
        }
        else if ($tab == 'photos')
        {
            // Hiển thị template hình ảnh
            require_once 'templates/photos.php';
        }
        else if ($tab == 'categories')
        {
            // Hiển thị template chuyên mục
            require_once 'templates/categories.php';
        }
        else if ($tab == 'setting')
        {
            // Hiển thị template cài đặt chung
            require_once 'templates/setting.php';
        }
    }
    // Ngược lại không có tham số tab
    else
    {
        // Hiển thị template bảng điều khiển
        require_once '../templates/dashboard.php';
    }
 
    ?>
</div><!-- div.content -->