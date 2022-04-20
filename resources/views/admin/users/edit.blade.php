@extends('layouts.admin')
@section('content')
    <div class="row mb-5">
        <div class="col-sm-1 col-xl-3"></div>
        <div class="col-sm-10 col-xl-6">
            <h1 class="text-center mt-5">Редактирование пользователя</h1>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p class="text-danger">{{ $error }}</p>
                @endforeach
            @endif
            <form action="{{ route('admin.users.update', $user->login) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Логин</label>
                    <input disabled type="text" class="form-control" name="login" value="{{ $user->login }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Диллер</label>
                    <input type="text" class="form-control" name="dealer" value="{{ $user->dealer }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Эл. почта</label>
                    <input type="text" class="form-control" name="email" value="{{ $user->email }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Пароль</label>
                    <input type="text" class="form-control" name='password' value="{{ $user->password }}">
                </div>
                <div class="mb-3 col-2">
                    <label class="form-label">Номер сервера</label>
                    <select class="form-select" aria-label="Default select example" name="server_n">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Примечание</label>
                    <div class="form-floating">
                        <textarea name="notice" class="form-control" style="height: 100px">{{ $user->notice }}</textarea>
                        <label>Comments</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Skype</label>
                    <input type="text" class="form-control" name="skype" value="{{ $user->skype }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jabber UID</label>
                    <input type="text" class="form-control" name="jabber" value="{{ $user->jabber }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">ICQ</label>
                    <input type="text" class="form-control" name="icq" value="{{ $user->icq }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">AIM</label>
                    <input type="text" class="form-control" name="aim" value="{{ $user->aim }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">MSN</label>
                    <input type="text" class="form-control" name="msn" value="{{ $user->msn }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Баланс</label>
                    <input type="text" class="form-control" name="balance" value="{{ $user->balance }}" </div>
                    <div class="mb-3 col-2">
                        <label class="form-label">Скидка</label>
                        <select class="form-select" aria-label="Default select example" name="discount">
                            @for ($i = 0; $i <= 100; $i += 5)
                                <option value="{{ $i }}" {{ $i == $user->discount ? 'selected' : '' }}>{{ $i }}%</option>
                            @endfor
                        </select>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" name="disabled" {{ $i == $user->disabled ? 'checked' : '' }}>
                        <label class="form-check-label">Отключен</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" name="confirmed" {{ $i == $user->confirmed ? 'checked' : '' }}>
                        <label class="form-check-label">Подтверждён</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" name="label__trusted" {{ $i == $user->label__trusted ? 'checked' : '' }}>
                        <label class="form-check-label">label__trusted</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Редактировать</button>
            </form>
        </div>
    </div>
    <div class="row mb-5 ps-3 pe-3">
    </div>
@endsection
