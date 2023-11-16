<div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
           <img src="{{ asset('../public/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
           <a href="#" class="d-block">Huy</a>
        </div>
     </div>
     <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
           data-accordion="false">
           <li class="nav-item">
              <a href="#" class="nav-link">
                 <i class="nav-icon fas fa-tachometer-alt"></i>
                 <p>
                    Sản phẩm
                    <i class="right fas fa-angle-left"></i>
                 </p>
              </a>
              <ul class="nav nav-treeview">
                 <li class="nav-item">
                    <a href="{{ route('product.index') }}" class="nav-link">
                       <i class="far fa-circle nav-icon"></i>
                       <p>Tất cả sản phẩm</p>
                    </a>
                 </li>
                 <li class="nav-item">
                    <a href="{{ route('category.index') }}" class="nav-link">
                       <i class="far fa-circle nav-icon"></i>
                       <p>Danh mục</p>
                    </a>
                 </li>
                 <li class="nav-item">
                    <a href="{{ route('brand.index') }}" class="nav-link">
                       <i class="far fa-circle nav-icon"></i>
                       <p>Thương hiệu</p>
                    </a>
                 </li>
              </ul>
           </li>
           <li class="nav-item">
              <a href="#" class="nav-link">
                 <i class="nav-icon fas fa-tachometer-alt"></i>
                 <p>
                    Bài viết
                    <i class="right fas fa-angle-left"></i>
                 </p>
              </a>
              <ul class="nav nav-treeview">
                 <li class="nav-item">
                    <a href="{{ route('post.index') }}" class="nav-link">
                       <i class="far fa-circle nav-icon"></i>
                       <p>Tất cả bài viết</p>
                    </a>
                 </li>
                 <li class="nav-item">
                    <a href="{{ route('topic.index') }}" class="nav-link">
                       <i class="far fa-circle nav-icon"></i>
                       <p>Chủ đề</p>
                    </a>
                 </li>
                 <li class="nav-item">
                    <a href="{{ route('page.index') }}" class="nav-link">
                       <i class="far fa-circle nav-icon"></i>
                       <p>Trang đơn</p>
                    </a>
                 </li>
              </ul>
           </li>
           <li class="nav-item">
              <a href="#" class="nav-link">
                 <i class="nav-icon fas fa-tachometer-alt"></i>
                 <p>
                    Quản lý bán hàng
                    <i class="right fas fa-angle-left"></i>
                 </p>
              </a>
              <ul class="nav nav-treeview">
                 <li class="nav-item">
                    <a href="{{ route('order.index') }}" class="nav-link">
                       <i class="far fa-circle nav-icon"></i>
                       <p>Tất cả đơn hàng</p>
                    </a>
                 </li>
                 <li class="nav-item">
                    <a href="import_index.html" class="nav-link">
                       <i class="far fa-circle nav-icon"></i>
                       <p>Nhập hàng</p>
                    </a>
                 </li>
                 <li class="nav-item">
                    <a href="export_index.html" class="nav-link">
                       <i class="far fa-circle nav-icon"></i>
                       <p>Xuất hàng</p>
                    </a>
                 </li>
              </ul>
           </li>
           <li class="nav-item">
              <a href="{{ route('customer.index') }}" class="nav-link">
               <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p class="text">Khách hàng</p>
              </a>
           </li>
           <li class="nav-item">
              <a href="{{ route('contact.index') }}" class="nav-link">
               <i class="nav-icon fas fa-tachometer-alt"></i>                 
               <p class="text">Liên hệ</p>
              </a>
           </li>
           <li class="nav-item">
              <a href="#" class="nav-link">
                 <i class="nav-icon fas fa-tachometer-alt"></i>
                 <p>
                    Giao diện
                    <i class="right fas fa-angle-left"></i>
                 </p>
              </a>
              <ul class="nav nav-treeview">
                 <li class="nav-item">
                    <a href="{{ route('menu.index') }}" class="nav-link">
                       <i class="far fa-circle nav-icon"></i>
                       <p>Menu</p>
                    </a>
                 </li>
                 <li class="nav-item">
                    <a href="{{ route('slider.index') }}" class="nav-link">
                       <i class="far fa-circle nav-icon"></i>
                       <p>Banner</p>
                    </a>
                 </li>
              </ul>
           </li>
           <li class="nav-item">
              <a href="#" class="nav-link">
                 <i class="nav-icon fas fa-tachometer-alt"></i>
                 <p>
                    Hệ thống
                    <i class="right fas fa-angle-left"></i>
                 </p>
              </a>
              <ul class="nav nav-treeview">
                 <li class="nav-item">
                    <a href="{{ route('user.index') }}" class="nav-link">
                       <i class="far fa-circle nav-icon"></i>
                       <p>Thành viên</p>
                    </a>
                 </li>
                 <li class="nav-item">
                    <a href="config_index.html" class="nav-link">
                       <i class="far fa-circle nav-icon"></i>
                       <p>Cấu hình</p>
                    </a>
                 </li>
              </ul>
           </li>
      </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>