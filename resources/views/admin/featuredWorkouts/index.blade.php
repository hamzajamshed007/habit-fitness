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
                            <h4>All Trainers</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($featuredWorkouts as $item)
                                            <tr>
                                                <td>
                                                    <img alt="image" src="{{ $item->image?asset('assets/images/featuredWorkout'. '/' . $item->image) : asset('assets/images/default.png') }}" class="rounded-circle" width="70" data-toggle="tooltip" title="" data-original-title="Featured Workout">
                                                </td>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->description }}</td>
                                                <td>
                                                    <a href="{{ route('admin.featuredWorkouts.detail', ['featuredWorkout' => $item->id]) }}"
                                                        class="btn btn-primary mx-1">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    {{-- <button type="button" class="btn btn-primary SendNotification" data-user-id="{{$item->id}}" data-name="{{$item->name}}">Send Notification</button> --}}
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

@endpush
