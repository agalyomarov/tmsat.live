@extends('layouts.admin')
@section('content')
    <div class="row mb-5">
        <div class="col-sm-0 col-xl-3"></div>
        <div class="col-sm-12 col-xl-6">
            <h1 class="text-center mt-5">Новый пользователь</h1>
            <form>
                <div class="mb-3">
                    <label for="" class="form-label">Логин</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Диллер</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Эл. почта</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Пароль</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Пароль (повторно)</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Номер сервера</label>
                    <select class="form-select" aria-label="Default select example">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Примечание</label>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Comments</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Skype</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Jabber UID</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">ICQ</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">AIM</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">MSN</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Баланс</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Скидка</label>
                    <select class="form-select" aria-label="Default select example">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Отключен</label>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Подтверждён</label>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">label__trusted</label>
                </div>
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </form>
        </div>
    </div>
    <div class="row mb-5 ms-5">
        <div class="col-12">
            <table class="table table-striped">
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
                            <td>{{ $user->dealer }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->balance }}</td>
                            <td>{{ $user->server_n }}</td>
                            <td>{{ $user->discount }}</td>
                            <td>{{ date('m.d.Y', $user->time_added) }}</td>
                            <td><a href=""><i class="fa-solid fa-pen"></i></a></td>
                            <td><a href=""><i class="fa-solid fa-dollar-sign"></i></a></td>
                            <td><a href=""><i class="fa-solid fa-circle-stop"></i></a></td>
                            <td><a class="danger" href=""><i class="fa-solid fa-xmark"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>

    </div>
@endsection
