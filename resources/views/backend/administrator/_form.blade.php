@php
    $name = isset($administrator) ? $administrator->name : old('name');
    $email = isset($administrator) ?  $administrator->email : old('email');
@endphp

<div class="mb-3 row">
    <label for="name" class="col-form-label col-lg-3">Name <span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <input class="form-control" name="name" id="name" value="{{ $name }}" required>
    </div>
</div>

<div class="mb-3 row">
    <label for="email" class="col-form-label col-lg-3">Email <span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <input type="email" class="form-control" name="email" id="email" value="{{ $email }}" required>
    </div>
</div>
