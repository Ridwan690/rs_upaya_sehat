<aside id="sidebar" class="js-sidebar">
    <!-- Content For Sidebar -->
    <div class="h-100">
        <div class="sidebar-logo">
            <a href="/admin/home">RS Upaya Sehat</a>
        </div>
        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Admin Elements
            </li>
            <li class="sidebar-item">
                <a href="/admin/dashboard" class="sidebar-link">
                    <i class="fa-solid fa-list pe-2"></i>
                    Dashboard
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse"
                    aria-expanded="false"><i class="fa-solid fa-file-lines pe-2"></i>
                    Kelola Data
                </a>
                <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    {{-- @php
                    $user = Auth::user();
                    $allowedRoles = ['superadmin', 'manajemen', 'perawat_pendaftaran'];
                    @endphp
                    @if(Auth::check() && in_array($user->role, $allowedRoles))
                    <li class="sidebar-item">
                        <a href="/pasien" class="sidebar-link">Pasien</a>
                    </li>
                    @endif --}}
                    <li class="sidebar-item">
                        <a href="/pasien" class="sidebar-link"><i class="fa-solid fa-hospital-user pe-2"></i>Pasien</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="/rekam-medik" class="sidebar-link"><i class="fa-solid fa-book-medical pe-2"></i>Rekam Medik</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="/kunjungan" class="sidebar-link"><i class="fa-solid fa-clipboard pe-2"></i>Kunjungan</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="/antrian" class="sidebar-link"><i class="fa-solid fa-users-between-lines pe-2"></i>Antrian</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="/rawat-jalan" class="sidebar-link"><i class="fa-solid fa-person-walking pe-2"></i>Rawat Jalan</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="/rawat-inap" class="sidebar-link"><i class="fa-solid fa-bed-pulse pe-2"></i>Rawat Inap</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="/dokter" class="sidebar-link"><i class="fa-solid fa-user-doctor pe-2"></i>Dokter</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="/perawat" class="sidebar-link"><i class="fa-solid fa-user-nurse pe-2"></i>Perawat</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="/tarif" class="sidebar-link"><i class="fa-solid fa-coins pe-2"></i>Tarif</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a href="/" class="sidebar-link">
                    <i class="fa-solid fa-house pe-2"></i>
                    Home</a>
            </li>
            <li class="sidebar-item">
                <a href="/register" class="sidebar-link">
                    <i class="fa-solid fa-plus pe-2"></i>
                    Buat User</a>
            </li>
        </ul>
    </div>
</aside>
