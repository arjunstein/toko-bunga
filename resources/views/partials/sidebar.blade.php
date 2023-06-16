<div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
        <ul class="nav nav-primary">
            <li class="nav-item">
                <a href="/dashboard">
                    <i class="fas fa-home"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-section">
                <span class="sidebar-mini-icon">
                    <i class="fa fa-ellipsis-h"></i>
                </span>
                <h4 class="text-section">Master Data</h4>
            </li>
            <li class="nav-item">
                <a data-toggle="collapse" href="#users">
                    <i class="fas fa-user"></i>
                    <p>Users</p>
                    <span class="caret"></span>
                </a>
                <div class="collapse" id="users">
                    <ul class="nav nav-collapse">
                        <li>
                            <a href="{{ url('admin/users') }}">
                                <span class="sub-item">List user</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a data-toggle="collapse" href="#categories">
                    <i class="far fa-list-alt"></i>
                    <p>Categories</p>
                    <span class="caret"></span>
                </a>
                <div class="collapse" id="categories">
                    <ul class="nav nav-collapse">
                        <li>
                            <a href="{{ url('admin/categories') }}">
                                <span class="sub-item">List categories</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a data-toggle="collapse" href="#product">
                    <i class="fab fa-product-hunt"></i>
                    <p>Products</p>
                    <span class="caret"></span>
                </a>
                <div class="collapse" id="product">
                    <ul class="nav nav-collapse">
                        <li>
                            <a href="{{ url('admin/products') }}">
                                <span class="sub-item">List products</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
