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
                                <a href="/pasien" class="sidebar-link">Pasien</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="/tarif" class="sidebar-link">Tarif</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="/rekam-medik" class="sidebar-link">Rekam Medik</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">List</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="/" class="sidebar-link">Home</a>
                    </li>
                    <li class="sidebar-item" style="padding-top: 350px">
                        <a href="/register" class="sidebar-link">Register</a>
                    </li>
                </ul>
            </div>
            </aside>
