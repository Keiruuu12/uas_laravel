@csrf
<div class="row mb-3">
    <label for="name" class="col-md-3 col-form-label text-md-end">Nama Pasien</label>
    <div class="col-md-4">
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') ?? $pasien->name ?? '' }}" autofocus>
        @error('name')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="phone" class="col-md-3 col-form-label text-md-end">Nomor Telepon Pasien</label>
    <div class="col-md-4">
        <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') ?? $pasien->phone ?? '' }}" autofocus placeholder="08123456">
        @error('phone')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="address" class="col-md-3 col-form-label text-md-end">Alamat Rumah Pasien</label>
    <div class="col-md-4">
        <input type="text" name="address" id="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') ?? $pasien->address ?? '' }}" autofocus placeholder="Jl Sutrisno Gg Rendah Hati No 8">
        @error('address')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-6 offset-md-3 mb-3">
        <button type="submit" class="btn btn-primary">{{ $tombol }}</button>
    </div>
</div>
