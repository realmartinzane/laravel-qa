 @csrf
<div class="form-group">
    <label for="q-title">Question Title</label>
    <input type="text" name="title" value="{{ old('title', $question->title ?? null) }}" id="q-title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}">

    @if($errors->has('title'))
        <div class="invalid-feedback">
        <strong>{{ $errors->first('title') }}</strong>
        </div>
    @endif
</div>
<div class="form-group">
    <label for="q-title">Explain your Question</label>
    <textarea name="body" id="q-body" rows="10" class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}">{{ old('body', $question->body ?? null) }}</textarea>

    @if($errors->has('body'))
        <div class="invalid-feedback">
        <strong>{{ $errors->first('body') }}</strong>
        </div>
    @endif
</div>
<div class="form-group">
    <button type="submit" class="btn btn-outline-primary btn-lg"> {{ $btnText }}</button>
</div>