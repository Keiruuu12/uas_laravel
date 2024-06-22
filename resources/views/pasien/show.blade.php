@extends('layouts.app')
@section('content')
<div class="container card shadow-lg p-3 mb-5 bg-body-tertiary rounded">
    <div class="pt-3">
        <h1 class="h2 text-center">Data Pasien</h1>
    </div>
    <hr>
    <div>
        <td>
            <a href="{{ route('pasiens.edit', ['pasien' => $pasien->id]) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('pasiens.destroy', ['pasien' => $pasien->id]) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">DELETE</button>
            </form>
        </td>
        <ul class="mt-4">
            <li>Nama: <strong>{{ $pasien->nama }}</strong></li>
            <li>Nomor Telepon: <strong>{{ $pasien->phone }}</strong></li>
            <li>Alamat: <strong>{{ $pasien->address }}</strong></li>
        </ul>
    </div>
</div>
    
@endsection