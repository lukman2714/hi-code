@section('contents')
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('dashboards')}}" class="nav-link">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>
                            Dashboard
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    
                </li>
              
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>
                            Manajemen Pengguna
                            <i class="right bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.index') }}" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p>Pengguna</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('cabang.index') }}" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p>Cabang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./widgets/info-box.html" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p>Hak Akses</p>
                            </a>
                        </li>
                    </ul>
                </li>
                
                
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-clipboard-fill"></i>
                        <p>
                            Kontak
                            <span class="nav-badge badge text-bg-secondary me-3">6</span>
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('supplier.index')}}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Supplier</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('customer.index')}}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Pelanggan</p>
                            </a>
                        </li>
                        
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-tree-fill"></i>
                        <p>
                            Produk
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./UI/general.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Paket</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./UI/general.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Item</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./UI/icons.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Varian</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./UI/timeline.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Kategori</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('satuan.index')}}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Satuan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./UI/timeline.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Merk</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-pencil-square"></i>
                        <p>
                            Produksi
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./forms/general.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Resep</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('bahanbaku.index')}}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Bahan Baku</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./forms/general.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Kebutuhan Bahan Baku</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./forms/general.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Line Produksi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./forms/general.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Rencana Produksi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./forms/general.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Produk Jadi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./forms/general.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Produk Rusak</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-table"></i>
                        <p>
                            Packing
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./tables/simple.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Stok Item</p>
                            </a>
                            <a href="./tables/simple.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Stok Paket Siap</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-table"></i>
                        <p>
                            Pengiriman
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./tables/simple.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Data Pengirim</p>
                            </a>
                            <a href="./tables/simple.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Data Produk Siap Kirim</p>
                            </a>
                            <a href="./tables/simple.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Data Produk Terkirim</p>
                            </a>
                            <a href="./tables/simple.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Data Produk Ditolak</p>
                            </a>
                            <a href="./tables/simple.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Pelunasan di Terima</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!--end::Sidebar Menu-->
        </nav>
    </div>
@endsection
