<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fixed Sidebar</title>
    <style>
        /* Sidebar tetap */
        .fixed-sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 250px;
            background-color: #343a40;
            overflow-y: auto;
            color: white;
            z-index: 1000;
        }

        .fixed-sidebar .brand-link {
            padding: 10px;
            display: flex;
            align-items: center;
        }

        .fixed-sidebar .brand-link img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }

        .fixed-sidebar .user-panel {
            text-align: center;
            margin-bottom: 10px;
        }

        .fixed-sidebar .user-panel .info {
            margin-top: 5px;
            border-top: 1px solid #495057;
            padding-top: 10px;
            font-weight: bold;
        }

        .fixed-sidebar .form-inline {
            padding: 10px;
        }

        .fixed-sidebar .form-control-sidebar {
            width: 100%;
            border-radius: 4px;
            padding: 5px;
        }

        .fixed-sidebar .btn-sidebar {
            border: none;
            background-color: #495057;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
        }

        .fixed-sidebar .nav {
            list-style: none;
            padding: 0;
        }

        .fixed-sidebar .nav-item {
            margin-bottom: 5px;
        }

        .fixed-sidebar .nav-link {
            color: white;
            text-decoration: none;
            padding: 10px;
            display: block;
            border-radius: 4px;
        }

        .fixed-sidebar .nav-link:hover {
            background-color: #495057;
        }

        /* Konten utama */
        .content-wrapper {
            margin-left: 250px;
            padding: 20px;
        }

        /* Untuk menyembunyikan menu yang tidak cocok */
        .nav-item.hidden {
            display: none;
        }
    </style>
    <script>
        // Fungsi untuk mencari menu di sidebar
        function filterMenu() {
            const searchInput = document.getElementById('menuSearch');
            const filter = searchInput.value.toLowerCase();
            const navItems = document.querySelectorAll('.nav-item');

            navItems.forEach(item => {
                const text = item.textContent.toLowerCase();
                if (text.includes(filter)) {
                    item.classList.remove('hidden');
                } else {
                    item.classList.add('hidden');
                }
            });
        }
    </script>
</head>

<body>
    <nav class="fixed-sidebar">
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
                <div class="image">
                    <img src="{{ asset('/') }}dist/img/1.jpg" class="img-circle elevation-2" alt="User Image"
                        style="border: none; box-shadow: none;">
                </div>
                <div style="color:white; margin-left: 10px; font-size: 18px;">
                    <span>Welcome, </span>
                    <strong>{{ Auth::user()->name }}</strong>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <input id="menuSearch" class="form-control form-control-sidebar" type="search"
                    placeholder="Search menu" aria-label="Search" onkeyup="filterMenu()">
            </div>

            <!-- Menu -->
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                @auth
                    @if (Auth::user()->userRole->role->name == 'admin')
                        <li class="nav-item">
                            <a href="{{ route('admin.dashboard.post') }}" class="nav-link">
                                <i class="nav-icon fas fa-house-user"></i>
                                <p>List User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.role.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-id-card"></i>
                                <p>List Role</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.userrole.index') }}" class="nav-link">
                                <i class="nav-icon far fa-user-circle"></i>
                                <p>User Role</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.post.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-image"></i>
                                <p>Promo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.productdetail.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-image"></i>
                                <p>Product Detail</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('category.crud') }}" class="nav-link">
                                <i class="nav-icon fas fa-braille"></i>
                                <p>Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('voucher.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-credit-card"></i>
                                <p>Voucher</p>
                            </a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a href="{{ route('admin.product.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-box-open"></i>
                            <p>Product</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('buyer.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Buyer</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('transaction.index') }}" class="nav-link">
                            <i class="nav-icon far fa-credit-card"></i>
                            <p>Transaction</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>Logout</p>
                        </a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endauth
            </ul>
        </div>
    </nav>

</body>

</html>
