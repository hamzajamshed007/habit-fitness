@extends('layouts.admin_app')
@push('stylesheet')
    <link rel="stylesheet" href="{{ asset('assets/admin/bundles/datatables/datatables.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/admin/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
@endpush
@section('content')
    <section class="section">
        <div class="section-body">
             <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Users</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Avatar</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($users as $key=>$item)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $item->full_name }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td><img alt="image" src="{{ $item->avatar }}" class="rounded-circle" width="35" data-toggle="tooltip" title="{{ $item->full_name }}">
                                                </td>
                                                <td>
                                                    @if ($item->is_blocked == '0')
                                                        <div class="badge badge-success badge-shadow text-capitalize">
                                                            {{ __('Active') }}
                                                        </div>
                                                    @else
                                                        <div class="badge badge-danger badge-shadow text-capitalize">
                                                            {{ __('Blocked') }}
                                                        </div>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.users.show', ['user' => $item->id]) }}"
                                                        class="btn btn-primary mx-1">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4">No Record Found</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('script')
    <script src="{{ asset('assets/admin/bundles/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/admin/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}">
    </script>
    <script src="{{ asset('assets/admin/bundles/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('assets/admin/js/page/datatables.js') }}"></script>

@endpush
