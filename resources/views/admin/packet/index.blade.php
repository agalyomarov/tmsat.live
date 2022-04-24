@extends('layouts.admin')
@section('content')
    <div class="row mb-5">
        <div class="col-sm-1 col-xl-3"></div>
        <div class="col-sm-10 col-xl-6">
            <h1 class="text-center mt-5">Новый пакет</h1>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p class="text-danger">{{ $error }}</p>
                @endforeach
            @endif
            <form action="{{ route('admin.packet.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Кодировка</label>
                    <input type="text" class="form-control" name="coding">
                </div>
                <div class="mb-3">
                    <label class="form-label">Пакет</label>
                    <input type="text" class="form-control" name="packet">
                </div>
                <div class="mb-3">
                    <label class="form-label">Порт</label>
                    <input type="text" class="form-control" name="port">
                </div>
                <div class="mb-3">
                    <label class="form-label">label__name_wicardd</label>
                    <input type="text" class="form-control" name="name_wicardd">
                </div>
                <div class="mb-3">
                    <label class="form-label">Название</label>
                    <input type="text" class="form-control" name='name'>
                </div>
                <div class="mb-3">
                    <label class="form-label">Цена</label>
                    <input type="text" class="form-control" name='price'>
                </div>
                <div class="mb-3  col-6">
                    <label class="form-label">Группа</label>
                    <select class="form-select" aria-label="Default select example" name="packet_group">
                        @foreach ($packet_groups as $packet_group)
                            <option value="{{ $packet_group->packet_group }}">{{ $packet_group->packet_group }} ({{ $packet_group->price }})</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </form>
        </div>
    </div>
    <div class="row mb-5 ps-3 pe-3">
        {{-- <div class="col-1"></div> --}}
        <div class="col-12">
            <table class="table table-striped admin-index">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Кодировка</th>
                        <th scope="col">Пакет</th>
                        <th scope="col">Порт</th>
                        <th scope="col">label__name_wicardd</th>
                        <th scope="col">Название</th>
                        <th scope="col">Группа</th>
                        <th scope="col">Цена</th>
                        <th colspan="2" scope="col">Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($packets as $packet)
                        <tr>
                            <td>{{ $packet->id }}</td>
                            <td>{{ $packet->coding }}</td>
                            <td>{{ $packet->packet }}</td>
                            <td>{{ $packet->port }}</td>
                            <td>{{ $packet->name_wicardd }}</td>
                            <td>{{ $packet->name }}</td>
                            <td>{{ $packet->packet_group }}</td>
                            <td>{{ $packet->price }} $</td>
                            <td><a href="{{ route('admin.packet.edit', $packet->id) }}"><i class="fa-solid fa-pen"></i></a></td>
                            <td>
                                <form action="{{ route('admin.packet.delete', $packet->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa-solid fa-xmark"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
