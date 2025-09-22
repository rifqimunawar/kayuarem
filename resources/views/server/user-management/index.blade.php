@extends('server.layouts.app')
@section('content-server')
  <div class="row">
    <div class="col-lg-12">
      <div class="card w-100">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
              <h4 class="card-title mb-2">{{ $title ?? 'Data Management' }}</h4>
              <p class="card-subtitle text-muted mb-0">
                {{ $descriptionTitle ?? 'Kelola data dengan mudah dan efisien' }}
              </p>
            </div>
            <div>
              <a href="{{ route('create.user-management') }}" class="btn btn-primary "> <i class="bi bi-plus-lg"></i>
                Tambah</a>
            </div>
          </div>

          <!-- Table -->
          <div class="table-responsive">
            <table id="dataTable" class="table table-hover table-striped">
              <thead class="table-dark">
                <tr>
                  <th scope="col" class="text-center" style="width: 5%">#</th>
                  <th scope="col" style="width: 25%">Nama</th>
                  <th scope="col" style="width: 15%">Username</th>
                  <th scope="col" style="width: 20%">Email</th>
                  <th scope="col" class="text-center" style="width: 10%">Actions</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($data as $item)
                  <tr>
                    <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                    <td>
                      <strong>{{ $item->name ?? '-' }}</strong>
                    </td>
                    <td>
                      <strong>{{ $item->username ?? '-' }}</strong>
                    </td>
                    <td>
                      <strong>{{ $item->email ?? '-' }}</strong>
                    </td>

                    <td class="text-center">
                      <div class="btn-group" role="group">
                        <!-- Edit Button -->
                        <a href="{{ route('edit.user-management', $item->id) }}" class="btn btn-sm btn-outline-warning"><i
                            class="bi bi-pencil-square" style="font-size: 14px"></i></a>

                        <!-- Delete Button -->
                        <a href="{{ route('delete.user-management', $item->id) }}" title="Hapus Data"
                          class="btn btn-sm btn-outline-danger" data-confirm-delete="true">
                          <i class="bi bi-trash3" style="font-size: 14px"></i></a>
                      </div>
                    </td>
                  </tr>
                @empty
                  <tr>
                    <td colspan="7" class="text-center py-4">
                      <div class="d-flex flex-column align-items-center">
                        <i class="fas fa-database fa-3x text-muted mb-3"></i>
                        <h5 class="text-muted">Tidak ada data</h5>
                        <p class="text-muted mb-0">Belum ada data yang tersedia untuk ditampilkan</p>
                      </div>
                    </td>
                  </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('styles')
  <style>
    .table th {
      font-weight: 600;
      border-bottom: 2px solid #dee2e6;
    }

    .table td {
      vertical-align: middle;
    }

    .img-thumbnail {
      border: 1px solid #dee2e6;
    }

    .btn-group .btn {
      margin-right: 2px;
    }

    .btn-group .btn:last-child {
      margin-right: 0;
    }

    .text-truncate {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
  </style>
@endpush
