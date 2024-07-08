@extends('layouts.admin_app')

@section('content')

<section class="section">
    <div class="section-body">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-7">
                <div class="card">
                    <form id="faqForm" method="POST" action="{{ route('admin.courses.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h4>Add New Course</h4>
                        </div>
                        <div class="card-body">
                            <div class="trainer-image d-none">
                                <img src="" alt="trainer-img" id="trainer-img-preview">
                            </div>
                            <div class="form-group">
                                <label for="trainer-image-upload">Image</label>
                                <input type="file" name="image" class="form-control" id="trainer-image-upload" accept="image/jpeg,image/png,image/jpg">
                            </div>                         
                            
                            <div class="form-group mb-3">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="" required>
                            </div>

                            <div class="form-group mb-3">
                                <div class="form-group">
                                    <label>Choose Course Category</label>
                                    <select class="custom-select" name="category_id" required>
                                        <option selected="" disabled>Please Select</option>
                                        @foreach($categories as $item)
                                            <option value="{{ $item->id }}">{{$item->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label>Description</label>
                                <textarea class="form-control" name="description" rows="4" required>{{ old('description') }}</textarea>
                            </div>
                            {{-- <div class="course_slots">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="form-group mb-3">
                                            <div class="form-group">
                                                <label>Choose Day</label>
                                                <select class="custom-select" name="day" required>
                                                    <option selected="" disabled>Please Select</option>
                                                    <option value="monday">Monday</option>
                                                    <option value="tuesday">Tuesday</option>
                                                    <option value="wednesday">Wednesday</option>
                                                    <option value="thursday">Thursday</option>
                                                    <option value="friday">Friday</option>
                                                    <option value="saturday">Saturday</option>
                                                    <option value="sunday">Sunday</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group mb-3">
                                            <label>Start Time</label>
                                            <input type="time" class="form-control" name="start_time" value="{{ old('start_time') }}" placeholder="" required>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group mb-3">
                                            <label>End Time</label>
                                            <input type="time" class="form-control" name="end_time" value="{{ old('end_time') }}" placeholder="" required>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group mb-3">
                                            <div class="form-group">
                                                <label>Choose Trainer</label>
                                                <select class="custom-select" name="trainer_id" required>
                                                    <option selected="" disabled>Please Select</option>
                                                    @foreach($trainers as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }} ({{$item->title}}) </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="container mt-5">
                                <div id="course_slots">
                                    <div class="row slot">
                                        <div class="col-3">
                                            <div class="form-group mb-3">
                                                <label>Choose Day</label>
                                                <select class="custom-select" name="day[]" required>
                                                    <option selected="" disabled>Please Select</option>
                                                    <option value="monday">Monday</option>
                                                    <option value="tuesday">Tuesday</option>
                                                    <option value="wednesday">Wednesday</option>
                                                    <option value="thursday">Thursday</option>
                                                    <option value="friday">Friday</option>
                                                    <option value="saturday">Saturday</option>
                                                    <option value="sunday">Sunday</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group mb-3">
                                                <label>Start Time</label>
                                                <input type="time" class="form-control" name="start_time[]" value="{{ old('start_time') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group mb-3">
                                                <label>End Time</label>
                                                <input type="time" class="form-control" name="end_time[]" value="{{ old('end_time') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group mb-3">
                                                <label>Choose Trainer</label>
                                                <select class="custom-select" name="trainer_id[]" required>
                                                    <option selected="" disabled>Please Select</option>
                                                    @foreach($trainers as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }} ({{$item->title}}) </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" id="add_new_slot" class="btn btn-primary mt-3">Add New Slot</button>
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
        $('#add_new_slot').on('click', function() {
            var slotHtml = `
                <div class="row slot mt-3">
                    <div class="col-3">
                        <div class="form-group mb-3">
                            <label>Choose Day</label>
                            <select class="custom-select" name="day[]" required>
                                <option selected="" disabled>Please Select</option>
                                <option value="monday">Monday</option>
                                <option value="tuesday">Tuesday</option>
                                <option value="wednesday">Wednesday</option>
                                <option value="thursday">Thursday</option>
                                <option value="friday">Friday</option>
                                <option value="saturday">Saturday</option>
                                <option value="sunday">Sunday</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group mb-3">
                            <label>Start Time</label>
                            <input type="time" class="form-control" name="start_time[]" required>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group mb-3">
                            <label>End Time</label>
                            <input type="time" class="form-control" name="end_time[]" required>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group mb-3">
                            <label>Choose Trainer</label>
                            <select class="custom-select" name="trainer_id[]" required>
                                <option selected="" disabled>Please Select</option>
                                @foreach($trainers as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }} ({{$item->title}}) </option>
                                @endforeach
                            </select>
                        </div>
                        <button type="button" class="btn btn-danger remove_slot mt-2">Remove</button>
                    </div>
                </div>
            `;
            $('#course_slots').append(slotHtml);
        });

        $(document).on('click', '.remove_slot', function() {
            $(this).closest('.slot').remove();
        });
    });


</script>

@endpush