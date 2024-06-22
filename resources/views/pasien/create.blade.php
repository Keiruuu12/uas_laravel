@extends('layouts.app')
@section('content')
<div class="container card shadow-lg p-3 mb-5 bg-body-tertiary rounded">
    <div class="pt-3">
        <h1 class="h2 text-center">Tambah Pasien</h1>
    </div>
    <hr>

    <form action="{{ route('pasiens.store') }}" method="POST">
        @include('pasien.form', ['tombol' => 'Tambah'])
    </form>
</div>
    
@endsection