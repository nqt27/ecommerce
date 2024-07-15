<div class="wrapper">
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <a href="{{route('admin')}}" class="brand-link">
                    <span class="brand-text font-weight-light">Admin</span>
                </a>
                <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item p-2">
                        <a href="{{route('admin.cate')}}" class="nav-link">
                        <p>
                            Category
                        </p>
                        </a>
                    </li>
                    <li class="nav-item p-2">
                        <a href="{{route('admin.product')}}" class="nav-link">
                        <p>
                            Sản phẩm
                        </p>
                        </a>
                    </li>
                </ul>
            </aside>