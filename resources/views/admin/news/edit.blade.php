@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <h1 class="text-center mt-5 mb-5">Редактировать новости</h1>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p class="text-danger">{{ $error }}</p>
                @endforeach
            @endif
            <form method="post" action="{{ route('admin.news.update', $post->id) }}" onsubmit="document.querySelector('.summernote').value = $('#summernote').summernote('code');">
                @csrf
                @method('PUT')
                <div class="col-3 mb-3">
                    <label class="form-label">Дата начало публикации</label>
                    <input type="date" class="form-control" name="start_publish" value="{{ Carbon\Carbon::parse($post->start_publish)->format('Y-m-d') }}">
                </div>
                <div class="col-3 mb-3">
                    <label class="form-label">Дата отмена публикации</label>
                    <input type="date" class="form-control" name="end_publish" value="{{ Carbon\Carbon::parse($post->end_publish)->format('Y-m-d') }}">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="is_sale" {{ $post->is_sale ? 'checked' : '' }}>
                    <label class="form-check-label">Акция</label>
                </div>
                <div class="col-6 mb-3">
                    <label class="form-label">Тема акции</label>
                    <input type="text" class="form-control" name="sale_title" value="{{ $post->sale_title }}" style="background:#000;color:red">
                </div>
                <label class="form-label">Содержание</label>
                <div id="summernote">{!! $post->body !!}</div>
                <input type="hidden" name="body" class="summernote">
                <div class="col-6 mb-3 mt-3">
                    <button type="submit" class="btn btn-primary">Изменить</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        $('#summernote').summernote({
            lang: 'ru-RU',
            height: 300, // set editor height
            minHeight: 300,
            maxHeight: null,
            tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                // ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
        document.querySelector('.note-editable').style.backgroundColor = '#000';
    </script>
@endsection
