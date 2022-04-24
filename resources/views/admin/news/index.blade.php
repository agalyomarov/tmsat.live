@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <h1 class="text-center mt-5 mb-5">Добавить новости</h1>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p class="text-danger">{{ $error }}</p>
                @endforeach
            @endif
            <form method="post" action="{{ route('admin.news.store') }}" onsubmit="document.querySelector('.summernote').value = $('#summernote').summernote('code');">
                @csrf
                <div class="col-3 mb-3">
                    <label class="form-label">Дата начало публикации</label>
                    <input type="date" class="form-control" name="start_publish">
                </div>
                <div class="col-3 mb-3">
                    <label class="form-label">Дата отмена публикации</label>
                    <input type="date" class="form-control" name="end_publish">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="is_sale">
                    <label class="form-check-label">Акция</label>
                </div>
                <div class="col-6 mb-3">
                    <label class="form-label">Тема акции</label>
                    <input type="text" class="form-control" name="sale_title" style="background:#000;color:red">
                </div>
                <label class="form-label">Содержание</label>
                <div id="summernote"></div>
                <input type="hidden" name="body" class="summernote">
                <div class="col-6 mb-3 mt-3">
                    <button type="submit" class="btn btn-primary">Создать</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-50 ps-5 pe-5 mb-5">
        @if (count($posts) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Start publish</th>
                        <th scope="col">End publish</th>
                        <th scope="col">Is sale</th>
                        <th scope="col">Sale title</th>
                        <th scope="col" colspan="2" class="text-center">действие</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td>{{ Carbon\Carbon::parse($post->start_publish)->translatedFormat('d F Y') }}</td>
                            <td>{{ Carbon\Carbon::parse($post->end_publish)->translatedFormat('d F Y') }}</td>
                            <td><input type="checkbox" {{ $post->is_sale ? 'checked' : '' }}></td>
                            <td>{{ $post->sale_title }}</td>
                            <td><a href="{{ route('admin.news.edit', $post->id) }}"><i class="fa-solid fa-pen"></i></a></td>
                            <td class="text-danger"><a href="{{ route('admin.news.delete', $post->id) }}"><i class="text-danger fa-solid fa-xmark"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="text-center">Новосты не добавлены</p>
        @endif
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
