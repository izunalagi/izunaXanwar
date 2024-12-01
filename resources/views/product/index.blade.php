@extends('dashboard.admin')

@section('judul')
    Produk
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('alert'))
        <script>
            Swal.fire({
                icon: '{{ session('alert')['type'] }}',
                title: '{{ session('alert')['message'] }}',
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif
@endsection

@section('isi')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- Card Header -->
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>{{ __('Data Produk') }}</span>
                        <a href="{{ route('admin.product.create') }}">
                            <button type="button" class="btn btn-primary">
                                <i class="bi bi-plus-square"></i> Tambah
                            </button>
                        </a>
                    </div>



                    <!-- Card Body -->
                    <div class="card-body">
                        <!-- Search Form -->
                        <form method="GET" action="{{ route('admin.product.index') }}" class="mb-3">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" name="search" class="form-control" placeholder="Cari produk..."
                                        value="{{ request('search') }}">
                                </div>
                                <div class="col-md-2">
                                    <select name="per_page" class="form-control" onchange="this.form.submit()">
                                        <option value="5" {{ request('per_page') == 5 ? 'selected' : '' }}>5</option>
                                        <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10</option>
                                        <option value="25" {{ request('per_page') == 25 ? 'selected' : '' }}>25</option>
                                        <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary">Cari</button>
                                </div>
                            </div>
                        </form>

                        <!-- Table -->
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Kategori</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($products as $item)
                                    <tr>
                                        <td>{{ $loop->iteration + ($products->currentPage() - 1) * $products->perPage() }}
                                        </td>
                                        <td>{{ $item->name }}</td>
                                        <td>Rp.{{ number_format($item->price) }}</td>
                                        <td>{{ $item->stocks }}</td>
                                        <td>{{ $item->fkCategory->name }}</td>
                                        <td>
                                            @if ($item->photo)
                                                <img src="{{ asset('storage/' . $item->photo) }}" class="img-fluid"
                                                    alt="Foto" style="width: 100px;">
                                            @else
                                                <p class="text-info">Tidak ada foto</p>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.product.edit', $item->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('admin.product.destroy', $item->id) }}" method="POST"
                                                style="display:inline;">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">Tidak ada data ditemukan.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        <!-- Pagination -->
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div>
                                Menampilkan {{ $products->firstItem() }} - {{ $products->lastItem() }} dari
                                {{ $products->total() }} data
                            </div>
                            <div>
                                <nav>
                                    <ul class="pagination pagination-sm">
                                        {{ $products->appends(request()->except('page'))->links('pagination::bootstrap-4') }}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
