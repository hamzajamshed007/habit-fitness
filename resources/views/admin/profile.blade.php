@extends('layouts.admin_app')

@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-7">
                    <div class="card">
                        <form id="profileUpdate" method="POST" action="{{ route('admin.profile.update') }}">
                            @csrf
                            <div class="card-header">
                                <h4>Admin Profile</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group mb-3">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ auth()->user()->name }}" autofocus>
                                </div>

                                <div class="form-group mb-3">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" value="{{ auth()->user()->email }}" autofocus disabled>
                                </div>
                                <div class="form-group">
                                    <label>File</label>
                                    <input type="file" class="form-control" name="avatar" accept="image/jpeg,image/png,image/jpg">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" autofocus>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control" name="confirm_password" autofocus>
                                </div>

                            <div class="card-footer">
                                <button class="btn btn-primary w-100" id="profile_submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
<script>
    $(document).ready(function(){
        
        function hideAllErrors() {
            $('.all-input-error').hide();
        }
        hideAllErrors();

        $('#profileUpdate').on('submit', function(e) {
            e.preventDefault();
            hideAllErrors();

            $('#profile_submit').prop('disabled', true).html('Submiting...');
            var formData = new FormData(this);

            $.ajax({
                url: $(this).attr('action'),
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    if (data.message == 'success') {
                        $('#profile_submit').prop('disabled',false).html(`Submited <div class="fas fa-check hz-done"></div>`);
                        $('input[name=avatar]').val('');
                        $('input[name=password]').val('');
                        $('input[name=confirm_password]').val('');
                        
                        iziToast.success({
                        message: 'Admin Updated Successfully',
                        position: 'topRight' 
                    });
                        $('#profile_submit').prop('disabled', false).html('Submit');
                    }else{
                        
                        $('#profile_submit').prop('disabled', false).html('Submit');
                    }
                },
                error: function(error) {
                    $('#profile_submit').prop('disabled', false).html('Submit');
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
