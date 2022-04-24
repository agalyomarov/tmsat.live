@extends('layouts.admin')
@section('content')
    <div class="row mb-5">
        <div class="col-sm-1 col-xl-3"></div>
        <div class="col-sm-10 col-xl-6">
            <h1 class="text-center mt-5">Редактировать пакет</h1>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p class="text-danger">{{ $error }}</p>
                @endforeach
            @endif
            <form action="{{ route('admin.packet.update', $packet->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Кодировка</label>
                    <input type="text" class="form-control" name="coding" value="{{ $packet->coding }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Пакет</label>
                    <input type="text" class="form-control" name="packet" value="{{ $packet->packet }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Порт</label>
                    <input type="text" class="form-control" name="port" value="{{ $packet->port }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">label__name_wicardd</label>
                    <input type="text" class="form-control" name="name_wicardd" value="{{ $packet->name_wicardd }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Название</label>
                    <input type="text" class="form-control" name='name' value="{{ $packet->name }}">
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Группа</label>
                    <select class="form-select" aria-label="Default select example" name="packet_group">
                        @foreach ($packet_groups as $packet_group)
                            <option value="{{ $packet_group->packet_group }}" @if ($packet_group->packet_group == $packet->packet_group) selected @endif>{{ $packet_group->packet_group }} ({{ $packet_group->price }})</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 ">
                    <label class="form-label">Цена</label>
                    <input type="text" class="form-control" name='price' value="{{ $packet->price }}">
                </div>
                <button type="submit" class="btn btn-primary ">Изменить</button>
                <a href="{{ route('admin.packet.index') }}" class="btn btn-success float-end">На главная</a>
            </form>
        </div>
    </div>
@endsection
