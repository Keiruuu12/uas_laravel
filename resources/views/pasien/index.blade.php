@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="h2 text-center" id="pasien">Data Pasien Rumah Sakit</h1>
    <div class="text-end pt-5 pb-4">
        <a href="{{ route('pasiens.create') }}" class="btn btn-success">Tambah Pasien</a>
    </div>
    <table class="table table-striped">
        <thead>
            <th>#</th>
            <th>Nama</th>
            <th>Nomor Telepon</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </thead>
        @foreach ($pasiens as $pasien)
        <tbody>
            <td>{{ $loop->iteration }}</td>
            <td><a href="{{ route('pasiens.show', ['pasien' => $pasien->id]) }}" style="text-decoration: none">{{ $pasien->name }}</a></td>
            <td>{{ $pasien->phone }}</td>
            <td>{{ $pasien->address }}</td>
            <td>
                <a href="{{ route('pasiens.edit', ['pasien' => $pasien->id]) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('pasiens.destroy', ['pasien' => $pasien->id]) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
            </td>
        </tbody>
        @endforeach
    </table>
    <div class="row">
        <div class="mx-auto mt-3">
            {{-- {{ $pasiens->fragment('pasien')->links() }} --}}
            {{ $pasiens->fragment('pasien')->links('vendor.pagination.semantic-ui') }}
        </div>
    </div>
</div>
@endsection