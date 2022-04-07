<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('dist/img/oe.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
             <span class="brand-text font-weight-light">Object Expression</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            {{-- <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div> --}}
            <div class="info">
                <a href="#" class="d-block">LARAVEL OE</a>
            </div>
        </div>
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                   
                    <a href="#" class="nav-link">
                        {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
                         <p>
                            Customers & Orders
                        <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> 
                        
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>Top Ten Orders by Sales Amount</p>
                            </a>
                         </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>Customer Details</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href=" " class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>Customer Lists</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>Order Details</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>Order List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                         <p>
                            Inventory & Purchasing
                        <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href=" {{ url('/employee') }} " class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>Inventory List</p>
                            </a>
                         </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>Product Details</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>Purchase Order Details</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>Purchase Order List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                         <p>
                            Suppliers
                        <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>Supplier Details</p>
                            </a>
                         </li>
                        <li class="nav-item">
                            <a href="  " class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>Supplier Lists</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                         <p>
                            Shippers
                        <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>Shipper Details</p>
                            </a>
                         </li>
                        <li class="nav-item">
                            <a href=" " class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>Shipper Lists</p>
                            </a>
                        </li>
                    </ul>
                </li>   
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                         <p>
                            Suppliers
                        <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>Supplier Details</p>
                            </a>
                         </li>
                        <li class="nav-item">
                            <a href="  " class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>Supplier Lists</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                         <p>
                            Reports
                        <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>Sales Reports</p>
                            </a>
                         </li>

                    </ul>
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                         <p>
                           Employees
                        <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href=" " class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                    <p>Employee Details</p>
                            </a>
                         </li>
                    </ul>
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                         <p>
                            Supporting Objects
                        <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>