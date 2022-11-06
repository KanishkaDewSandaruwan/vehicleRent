<?php include 'admin.php';   ?>
<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">

            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle" href="message.php" >
                    <div class="position-relative">
                        <i class="align-middle" data-feather="message-square"></i>
                    </div>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle" href="settings.php" >
                    <div class="position-relative">
                        <i class="align-middle" data-feather="settings"></i>
                    </div>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle" href="change_password.php" >
                    <div class="position-relative">
                        <i class="align-middle" data-feather="lock"></i>
                    </div>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle" href="logout.php" >
                    <div class="position-relative">
                        <i class="align-middle" data-feather="users"></i>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</nav>