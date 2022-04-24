@extends('layouts.admin')
@section('content')
    <div class="row mb-5">
        <div class="col-sm-1 col-xl-3"></div>
        <div class="col-sm-10 col-xl-6">
            <h1 class="text-center mt-5">Новый пользователь</h1>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p class="text-danger">{{ $error }}</p>
                @endforeach
            @endif
            <form action="{{ route('admin.users.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Логин</label>
                    <input type="text" class="form-control" name="login">
                </div>
                <div class="mb-3">
                    <label class="form-label">Диллер</label>
                    <input type="text" class="form-control" name="dealer">
                </div>
                <div class="mb-3">
                    <label class="form-label">Эл. почта</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Пароль</label>
                    <input type="text" class="form-control" name='password'>
                </div>
                <div class="mb-3">
                    <label class="form-label">Примечание</label>
                    <div class="form-floating">
                        <textarea name="notice" class="form-control" style="height: 100px"></textarea>
                        <label>Comments</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Skype</label>
                    <input type="text" class="form-control" name="skype">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jabber UID</label>
                    <input type="text" class="form-control" name="jabber">
                </div>
                <div class="mb-3">
                    <label class="form-label">ICQ</label>
                    <input type="text" class="form-control" name="icq">
                </div>
                <div class="mb-3">
                    <label class="form-label">AIM</label>
                    <input type="text" class="form-control" name="aim">
                </div>
                <div class="mb-3">
                    <label class="form-label">MSN</label>
                    <input type="text" class="form-control" name="msn">
                </div>
                <div class="mb-3">
                    <label class="form-label">Баланс</label>
                    <input type="text" class="form-control" name="balance">
                </div>
                <div class="mb-3 col-2">
                    <label class="form-label">Скидка</label>
                    <select class="form-select" aria-label="Default select example" name="discount">
                        @for ($i = 0; $i <= 100; $i += 5)
                            <option value="{{ $i }}">{{ $i }}%</option>
                        @endfor
                    </select>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="disabled">
                    <label class="form-check-label">Отключен</label>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" checked name="confirmed">
                    <label class="form-check-label">Подтверждён</label>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" checked name="label__trusted">
                    <label class="form-check-label">label__trusted</label>
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
                        <th scope="col">Логин</th>
                        <th scope="col">Пароль</th>
                        <th scope="col">Номер сервера</th>
                        <th scope="col">Пакет/действует до</th>
                        <th scope="col">Диллер</th>
                        <th scope="col">Эл. почта</th>
                        <th scope="col">Баланс</th>
                        <th scope="col">Скидка</th>
                        <th scope="col">Добавлен</th>
                        <th colspan="4" scope="col">Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->login }}</td>
                            <td>{{ $user->password }}</td>
                            <td>{{ $user->server_n }}</td>
                            <td></td>
                            <td>{{ $user->dealer }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->balance }}</td>
                            <td>{{ $user->discount }}</td>
                            <td>{{ date('m.d.Y', $user->time_added) }}</td>
                            <td><a href="{{ route('admin.users.edit', ['login' => $user->login]) }}"><i class="fa-solid fa-pen"></i></a></td>
                            <td><a href=""><i class="fa-solid fa-dollar-sign"></i></a></td>
                            <td><a href=""><i class="fa-solid fa-circle-stop"></i></a></td>
                            <td class="text-danger"><i class="delete-user fa-solid fa-xmark"></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </div>
@endsection
