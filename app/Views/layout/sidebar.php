

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <?php
            // 'Produk', 'Artikel', 'Konten Generator', 'Home Page', 'Pengaturan'
            $menuSidebar = [
                array(
                    'href' => 'products',
                    'icon' => 'fas fa-fw fa-shopping-cart',
                    'title' => 'Produk',
                    'show_menu' => true,
                    'submenu' => []
                ),
                array(
                    'href' => 'artikel',
                    'icon' => 'fas fa-fw fa-newspaper',
                    'title' => 'Artikel',
                    'show_menu' => true,
                    'submenu' => []
                ),
                array(
                    'href' => 'konten-generator',
                    'icon' => 'fas fa-fw fa-code',
                    'title' => 'Konten Generator',
                    'show_menu' => true,
                    'submenu' => []
                ),
                array(
                    'href' => 'home-page',
                    'icon' => 'fas fa-fw fa-home',
                    'title' => 'Home Page',
                    'show_menu' => true,
                    'submenu' => []
                ),
                array(
                    'href' => 'pengaturan',
                    'icon' => 'fas fa-fw fa-cogs',
                    'title' => 'Pengaturan',
                    'show_menu' => true,
                    'submenu' => []
                ),
            ];
            ?>
            <!-- Nav Item - Pages Collapse Menu -->
            <?php foreach ($menuSidebar as $key => $value) : ?>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= (!$value['show_menu']) ? '#' : $value['href'] ?>" <?= (!$value['show_menu']) ? 'data-toggle="collapse" data-target="#collapse'. $key .'"' : '' ?> 
                    aria-expanded="true" aria-controls="collapse<?= $key ?>">
                    <i class="<?= $value['icon'] ?>"></i>
                    <span><?= $value['title'] ?></span>
                </a>
                <?php if ($value['show_menu']) : ?>
                <div id="collapse<?= $key ?>" class="collapse" aria-labelledby="heading<?= $key ?>" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
                <?php endif; ?>
            </li>

            <?php endforeach; ?>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-xinline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->