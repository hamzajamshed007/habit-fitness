@extends('layouts.admin_app')
@push('stylesheet')
    <link rel="stylesheet" href="{{ asset('assets/admin/bundles/datatables/datatables.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/admin/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
    <style>
        .trainer-img { width: 80px; height: 80px; background-repeat: no-repeat; background-position: center; background-size: cover; }
    </style>
@endpush
@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Featured Workouts</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($featuredWorkouts as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <img alt="image" src="{{ $item->image?asset('assets/images/featuredWorkout'. '/' . $item->image) : asset('assets/images/default.png') }}" class="trainer-img rounded-circle" width="70" data-toggle="tooltip" title="" data-original-title="Featured Workout">
                                                </td>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ \Illuminate\Support\Str::limit($item->description, 140) }}</td>
                                                <td>
                                                    <a href="{{ route('admin.featuredWorkouts.edit', ['featuredWorkout' => $item->id]) }}" class="btn btn-success mx-1">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    {{-- <a href="{{ route('admin.featuredWorkouts.detail', ['featuredWorkout' => $item->id]) }}"
                                                        class="btn btn-primary mx-1">
                                                        <i class="fas fa-eye"></i>
                                                    </a> --}}
                                                    <button class="btn btn-danger mx-1 fw-delete" data-id="{{ $item->id }}">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr class="text-center">
                                                <td colspan="5">No Record Found</td>
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
    <script>
        // DELETE REQUEST
        $(document).on('click', '.fw-delete', function(e) {
            var id = $(this).data('id');

            $.ajax({
                url: "{{ route('admin.featuredWorkouts.delete') }}",
                type: 'DELETE',
                data: { id: id },
                success: function(data) {
                    location.reload();
                    notify('success','Featured workout deleted successfully.');
                },
                error: function(error) {
                    notify('error','Oops! Something went wrong.');
                }
            });
        });
    </script>
@endpush
