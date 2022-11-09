<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.php">
            <span class="align-middle">Roshan's Geuest House</span>
            <span class="align-middle">Vehicle Rent Service</span>
        </a>

        <ul class="sidebar-nav">
            <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == 'admin'): ?>
            <li class="sidebar-header">
                ADMIN
            </li>



            <li class="sidebar-item active">
                <a class="sidebar-link" href="index.php">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="category.php">
                    <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Category</span>
                </a>
            </li>


            <li class="sidebar-item">
                <a class="sidebar-link" href="vehicle.php">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Vehicle</span>
                </a>
            </li>


            <li class="sidebar-item">
                <a class="sidebar-link" href="package.php">
                    <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Pakcage</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="rent.php">
                    <i class="align-middle" data-feather="file"></i> <span class="align-middle">Rents</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="orders.php">
                    <i class="align-middle" data-feather="file"></i> <span class="align-middle">Package Orders</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="gallery.php">
                    <i class="align-middle" data-feather="image"></i> <span class="align-middle">Gallery</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="settings.php">
                    <i class="align-middle" data-feather="settings"></i> <span class="align-middle">Settings</span>
                </a>
            </li>

            <li class="sidebar-header">
                USERS
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="customer.php">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Customer</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="driver.php">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Driver</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="guide.php">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Guide</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="staff.php">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Staff</span>
                </a>
            </li>
            <?php else: ?>
            <li class="sidebar-header">
                Staff
            </li>



            <li class="sidebar-item active">
                <a class="sidebar-link" href="index.php">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="category.php">
                    <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Category</span>
                </a>
            </li>


            <li class="sidebar-item">
                <a class="sidebar-link" href="vehicle.php">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Vehicle</span>
                </a>
            </li>


            <li class="sidebar-item">
                <a class="sidebar-link" href="package.php">
                    <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Pakcage</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="rent.php">
                    <i class="align-middle" data-feather="file"></i> <span class="align-middle">Rents</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="orders.php">
                    <i class="align-middle" data-feather="file"></i> <span class="align-middle">Orders</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="gallery.php">
                    <i class="align-middle" data-feather="image"></i> <span class="align-middle">Gallery</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="settings.php">
                    <i class="align-middle" data-feather="settings"></i> <span class="align-middle">Settings</span>
                </a>
            </li>

            <li class="sidebar-header">
                USERS
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="customer.php">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Customer</span>
                </a>
            </li>

            <?php endif; ?>

        </ul>

    </div>
</nav>