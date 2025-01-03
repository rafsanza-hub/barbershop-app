<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <!-- Brand Logo -->
        <div class="sidebar-brand">
            <a href="<?= base_url() ?>">
                <span>Stisla</span>
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?= base_url() ?>">A3</a> <!-- Inisial logo -->
        </div>

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <!-- Dashboard -->
            <li class="menu-header">Dashboard</li>
            <li>
                <a class="nav-link" href="<?= base_url('dashboard') ?>">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Services -->
            <li class="menu-header">Services</li>
            <li>
                <a class="nav-link" href="<?= base_url('category') ?>">
                    <i class="fas fa-list"></i>
                    <span>Category</span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="<?= base_url('service') ?>">
                    <i class="fas fa-cut"></i>
                    <span>Services</span>
                </a>
            </li>

            <!-- User List -->
            <li class="menu-header">User List</li>
            <li>
                <a class="nav-link" href="<?= base_url('user/admin') ?>">
                    <i class="fas fa-user-tie"></i>
                    <span>Admin</span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="<?= base_url('user/barber') ?>">
                    <i class="fas fa-user-tag"></i>
                    <span>Barber</span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="<?= base_url('user/customer') ?>">
                    <i class="fas fa-user"></i>
                    <span>Customer</span>
                </a>
            </li>

            <!-- Booking -->
            <li class="menu-header">Booking</li>
            <li>
                <a class="nav-link" href="<?= base_url('booking') ?>">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Booking</span>
                </a>
            </li>

            <!-- Logout -->
            <li class="menu-header">Logout</li>
            <li>
                <a class="nav-link text-danger" href="<?= base_url('logout') ?>">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </aside>
</div>