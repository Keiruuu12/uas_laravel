@extends('layouts.app')
@section('content')
<div class="container card shadow-lg p-3 mb-5 bg-body-tertiary rounded">
    <div class="pt-3">
        <h1 class="h2 text-center">Edit Data Pasien</h1>
    </div>
    <hr>

    <form action="{{ route('pasiens.update', ['pasien' => $pasien->id]) }}" method="POST">
        @method('PATCH')
        @include('pasien.form', ['tombol' => 'Update'])
    </form>
</div>
@endsection