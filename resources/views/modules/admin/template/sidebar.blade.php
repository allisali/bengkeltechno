<nav class="main-sidebar ps-menu">
    <div class="sidebar-toggle action-toggle">
        <a href="#">
            <i class="fas fa-bars"></i>
        </a>
    </div>
    <div class="sidebar-opener action-toggle">
        <a href="#">
            <i class="ti-angle-right"></i>
        </a>
    </div>
    <div class="sidebar-header">
        <div class="text">BT</div>
        <div class="close-sidebar action-toggle">
            <i class="ti-close"></i>
        </div>
    </div>
    <div class="sidebar-content">
        <ul>
            <li class="{{ Request::path() == 'admin' ? 'active' : '' }}">
                <a href="admin" class="link">
                    <i class="ti-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="{{ Request::path() == 'databarang' ? 'active' : '' }}">
                <a href="databarang" class="link">
                    <i class="ti-bookmark"></i>
                    <span>Data Barang</span>
                </a>
            </li>
            <li class="{{ Request::path() == 'addbarang' ? 'active' : '' }}">
                <a href="addbarang" class="link">
                    <i class="ti-package"></i>
                    <span>Tambah Barang</span>
                </a>
            </li>
            <li class="{{ Request::path() == 'kategori' ? 'active' : '' }}">
                <a href="kategori" class="link">
                    <i class="ti-pencil"></i>
                    <span>kategori</span>
                </a>
            </li>
            <li class="{{ Request::path() == 'addkategori' ? 'active' : '' }}">
                <a href="addkategori" class="link">
                    <i class="ti-pencil-alt"></i>
                    <span>Tambah kategori</span>
                </a>
            </li>
            <li class="{{ Request::path() == 'transaksi' ? 'active' : '' }}">
                <a href="transaksi" class="link">
                    <i class="ti-wallet"></i>
                    <span>Transaksi Jual</span>
                </a>
            </li>
            <li class="{{ Request::path() == 'laporan' ? 'active' : '' }}">
                <a href="laporan" class="link">
                    <i class="ti-folder"></i>
                    <span>Laporan Penjualan</span>
                </a>
            </li>
            <li class="{{ Request::path() == 'user' ? 'active' : '' }}">
                <a href="user" class="link">
                    <i class="ti-user"></i>
                    <span>User</span>
                </a>
            </li>
            <li class="{{ Request::path() == 'setting' ? 'active' : '' }}">
                <a href="setting" class="link">
                    <i class="ti-settings"></i>
                    <span>Setting</span>
                </a>
            </li>
            <li class="{{ Request::path() == 'cms' ? 'active' : '' }}">
                <a href="cms" class="link">
                    <i class="ti-server"></i>
                    <span>CMS</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
