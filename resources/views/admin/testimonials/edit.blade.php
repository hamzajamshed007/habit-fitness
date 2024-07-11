@extends('layouts.admin_app')
@push('stylesheet')
    <style>
        .user-image img{
            width: 200px;
            height: 200px;
        }
        .testimonial-image img{
            width: 200px;
            height: 200px;
        }
    </style>
@endpush
@section('content')

<section class="section">
    <div class="section-body">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-7">
                <div class="card">
                    <form id="faqForm" method="POST" action="{{ route('admin.testimonials.update', $testimonial->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h4>Edit Testimonial</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $testimonial->name }}" placeholder="" required>
                            </div>
                            <div class="form-group mb-3">
                                <label>Designation</label>
                                <input type="text" class="form-control" name="designation" value="{{ $testimonial->designation }}" placeholder="" required>
                            </div>
                            <div class="form-group mb-3">
                                <label>Description</label>
                                <textarea class="form-control" name="description" rows="4" required>{{ $testimonial->description }}</textarea>
                            </div>
                            <div class="user-image">
                                <img src="{{ asset('assets/images/testimonial'. '/' . $testimonial->user_image) }}" alt="user-img" id="user-img-preview">
                            </div>
                            <div class="form-group">
                                <label for="user-image-upload">File</label>
                                <input type="file" name="user_image" class="form-control" id="user-image-upload" accept="image/jpeg,image/png,image/jpg">
                            </div>
                             <div class="testimonial-image">
                                <img src="{{ asset('assets/images/testimonial'. '/' . $testimonial->testimonial_image) }}" alt="testimonial-img" id="testimonial-img-preview">
                            </div>
                            <div class="form-group">
                                <label for="testimonial-image-upload">File</label>
                                <input type="file" name="testimonial_image" class="form-control" id="testimonial-image-upload" accept="image/jpeg,image/png,image/jpg">
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
        $('#user-image-upload').on('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    $('#user-img-preview').attr('src', e.target.result);
                    $('.user-image').removeClass('d-none');
                };
                reader.readAsDataURL(file);
            }
        });

        $('#testimonial-image-upload').on('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    $('#testimonial-img-preview').attr('src', e.target.result);
                    $('.testimonial-image').removeClass('d-none');
                };
                reader.readAsDataURL(file);
            }
        });
    });
</script>

@endpush
