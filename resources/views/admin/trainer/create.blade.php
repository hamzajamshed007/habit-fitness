@extends('layouts.admin_app')

@section('content')

<section class="section">
    <div class="section-body">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-7">
                <div class="card">
                    <form id="faqForm" method="POST" action="{{ route('admin.trainers.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h4>Add New Trainer</h4>
                        </div>
                        <div class="card-body">
                            <div class="trainer-image d-none">
                                <img src="" alt="trainer-img" id="trainer-img-preview">
                            </div>
                            <div class="form-group">
                                <label for="trainer-image-upload">File</label>
                                <input type="file" name="image" class="form-control" id="trainer-image-upload" accept="image/jpeg,image/png,image/jpg">
                            </div>                         
                            <div class="form-group mb-3">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" placeholder="" required>
                            </div>

                            <div class="form-group mb-3">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" placeholder="" required>
                            </div>

                            <div class="form-group mb-3">
                                <label>Experience (in years)</label>
                                <input type="text" class="form-control" name="experience" placeholder="" required>
                            </div>

                        <div class="card-footer">
                            <button class="btn btn-primary w-100" id="faq_submit">Submit</button>
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
    $(document).ready(function() {
        $('#trainer-image-upload').on('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    $('#trainer-img-preview').attr('src', e.target.result);
                    $('.trainer-image').removeClass('d-none');
                };
                reader.readAsDataURL(file);
            }
        });
    });
</script>

@endpush