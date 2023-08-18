@extends('layouts.main')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Запросить выгрузку</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <x-alert :message="$error" type="danger"></x-alert>
                @endforeach
            @endif
            <div class="btn-group me-2">
                <a type="button" class="btn btn-sm btn-outline-secondary">Добавить запись</a>
            </div>
        </div>
    </div>

    <div>
        <form method="post" class="row g-2" action="{{ route('news.request.store') }}">
            @csrf
            <div class="form-group col-12">
                <label for="name">Имя</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="form-group col-6">
                <label for="phone">Номер телефона</label>
                <input type="text" class="form-control" name="phone" id="phone">
            </div>
            <div class="form-group col-6">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="form-group col-12">
                <label for="description">Описание запроса</label>
                <textarea class="form-control" name="description" id="author"></textarea>
            </div>

            <div class="col-6">
                <button type="submit" class="btn btn-success ">Отправить</button>
            </div>
        </form>
    </div>
@endsection
