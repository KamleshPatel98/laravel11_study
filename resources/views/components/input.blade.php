<div class="mt-3">
    <label for="{{ $id != '' ? $id : $name }}" class="form-label">{{ $title }} @if($required) <span class="text-danger">*</span> @endisset</label>
    <input type="{{ $type }}" class="form-control" name="{{ $name }}" id="{{ $id != '' ? $id : $name }}" value="{{ $value }}" maxlength="{{ $maxlength }}" placeholder="@if($placeholder) {{ $placeholder }} @else Enter {{ $name  }} @endif" onkeyup={{ $onkeyup }} @if($required) required @endif>
</div>