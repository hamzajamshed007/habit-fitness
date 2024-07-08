@extends('layouts.admin_app')

@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card author-box">
                        <div class="card-body">
                            <div class="author-box-center pb-4">
                                <img alt="image" src="{{ $user->avatar }}" class="rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                                <div class="clearfix"></div>
                                <div class="author-box-name pt-3">
                                    <a href="javascript:void()">{{ $user->full_name }}</a>
                                </div>
                            </div>
                            <div class="card-header">
                                <h4>Personal Details</h4>
                            </div>
                            <div class="card-body">
                                <div class="py-2">
                                    <p class="clearfix">
                                        <span class="float-left">Email</span>
                                        <span class="float-right text-muted">{{ $user->email }}</span>
                                    </p>
                                    <p class="clearfix">
                                        <span class="float-left">Account Status</span>
                                        <span class="float-right text-muted text-capitalize">
                                            @if ($user->is_blocked == '0')
                                                <span class="badge badge-success badge-shadow text-capitalize">
                                                    {{ __('Active') }}
                                                </span>
                                            @else
                                                <span class="badge badge-danger badge-shadow text-capitalize">
                                                    {{ __('Blocked') }}
                                                </span>
                                            @endif
                                        </span>
                                    </p>
                                    <p class="clearfix">
                                        @if ($user->is_blocked == '0')
                                            <a href="" class="btn btn-primary mx-1 BlockUser" data-id="1">
                                                Block User
                                            </a>
                                        @else
                                            <a href="" class="btn btn-primary mx-1 BlockUser" data-id="0">
                                                UnBlock User
                                            </a>
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>Events</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-2" border="1px solid #808080">
                                    <thead style="border-bottom: 1px solid #808080">
                                        <tr>
                                            <th>S No.</th>
                                            <th>Title</th>
                                            <th>Type</th>
                                            <th>Event Date</th>
                                            <th>Location</th>
                                            <th>Payment Type</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center" colspan="7">
                                                <h4> No Events Found </h4>
                                            </td>
                                        </tr>
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
<script>
    $(document).ready(function(){

        $('.BlockUser').on('click', function(e) {
            e.preventDefault();
            var isActive = $(this).data('id');
            $.ajax({
                url: `{{ url('admin/users/status') }}`,
                method: 'POST',
                data: {
                    'is_blocked': isActive,
                    'user_id': `{{ $user->id }}`,
                },
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    console.log(data);
                    if (data.message == 'success') {
                        if(isActive == '0'){
                            iziToast.success({
                                message: 'User Blocked Successfully',
                                position: 'topRight'
                            });
                        }else{
                            iziToast.success({
                                message: 'User UnBlocked Successfully',
                                position: 'topRight'
                            });
                        }
                        location.reload();
                    }else{
                    }
                },
                error: function(error) {
                    $('#faq_submit').prop('disabled', false).html('Submit');
                    console.log(error);
                    $.each(error.responseJSON.error, function(key, value) {
                        $("[name='" + key + "'],[name='" + key + "[]']").after(
                            ' <span class="all-input-error" style="color:red; font-family: Poppins, sans-serif; font-weight: bold; font-size:12px; position: relative; top: 8px; left: 10px;">' +
                            value + '</span>');
                    });
                }
            });
        });
    });
</script>
@endpush
