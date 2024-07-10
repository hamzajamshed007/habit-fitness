@extends('layouts.admin_app')

@section('content')

<section class="section">
    <div class="section-body">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-7">
                <div class="card">
                    <form id="faqForm" method="POST" action="{{ route('admin.featuredWorkouts.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h4>Add New Featured Workout</h4>
                        </div>
                        <div class="card-body">
                            <div class="trainer-image d-none">
                                <img src="" alt="workout-img" id="workout-img-preview">
                            </div>
                            <div class="form-group">
                                <label for="workout-image-upload">File</label>
                                <input type="file" name="image" class="form-control" id="workout-image-upload" accept="image/jpeg,image/png,image/jpg">
                            </div>
                            <div class="form-group mb-3">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" placeholder="" required>
                            </div>
                            <div class="form-group mb-3">
                                <label>Description</label>
                                <textarea class="form-control" name="description" rows="4" required>{{ old('description') }}</textarea>
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
        $('#workout-image-upload').on('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    $('#workout-img-preview').attr('src', e.target.result);
                    $('.trainer-image').removeClass('d-none');
                };
                reader.readAsDataURL(file);
            }
        });
    });
</script>

@endpush
