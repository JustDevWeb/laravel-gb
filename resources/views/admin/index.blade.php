@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Панель управления</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a type="button" class="btn btn-sm btn-outline-secondary">Добавить запись</a>
            </div>
        </div>
    </div>

    <x-alert :type="request()->get('type', 'light')" message="уведомление"></x-alert>
    <x-alert type="danger" message="уведомление"></x-alert>
    <x-alert type="warning" message="уведомление"></x-alert>
    <x-alert type="success" message="уведомление"></x-alert>
    <x-alert type="info" message="уведомление"></x-alert>
    <x-alert type="dark" message="уведомление"></x-alert>
    <x-alert type="primary" message="уведомление"></x-alert>
@endsection
