<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="index.html">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Management</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#district" aria-expanded="false" aria-controls="ui-basic">
                <i class="fa-solid fa-city"></i>
                <span class="menu-title">Districts</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse rounded-none" id="district">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">All</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Add District</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Restore</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#thanas" aria-expanded="false" aria-controls="ui-basic">
                <i class="fa-solid fa-tree-city"></i>
                <span class="menu-title">Thanas</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse rounded-none" id="thanas">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">All</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Add Thana</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Restore</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#users" aria-expanded="false" aria-controls="ui-basic">
                <i class="fa-solid fa-user-group"></i>
                <span class="menu-title">Users</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse rounded-none" id="users">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">All</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Add User</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Restore</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#areas" aria-expanded="false" aria-controls="ui-basic">
                <i class="fa-solid fa-tower-broadcast"></i>
                <span class="menu-title">Areas</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse rounded-none" id="areas">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">All</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Add Area</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Restore</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#parcels" aria-expanded="false" aria-controls="ui-basic">
                <i class="fa-solid fa-box"></i>
                <span class="menu-title">Parcels</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse rounded-none" id="parcels">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">All</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#transactions" aria-expanded="false" aria-controls="ui-basic">
                <i class="fa-solid fa-money-bill-transfer"></i>
                <span class="menu-title">Transactions</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse rounded-none" id="transactions">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">All</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#shops" aria-expanded="false" aria-controls="ui-basic">
                <i class="fa-solid fa-shop"></i>
                <span class="menu-title">Shops</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse rounded-none" id="shops">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin.all-shops') }}">All</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
<!-- partial -->
