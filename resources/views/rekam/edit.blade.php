@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit Data Kunjungan</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('rekam.update', $kunjungan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <input type="hidden" name="rekam_medik_id" value="{{ $kunjungan->rekam_medik_id }}">
        <input type="hidden" name="dokter_id" value="{{ $kunjungan->dokter_id }}">
        <input type="hidden" name="poli_id" value="{{ $kunjungan->poli_id }}">

        <div class="form-group">
            <label for="rekam_medik_id">Rekam Medik ID</label>
            <input type="number" class="form-control" id="rekam_medik_id" value="{{ $kunjungan->rekam_medik_id }}" disabled>
        </div>

        <div class="form-group">
            <label for="dokter_id">Dokter</label>
            <select class="form-control" id="dokter_id" disabled>
                @foreach($dokters as $dokter)
                    <option value="{{ $dokter->id }}" {{ $kunjungan->dokter_id == $dokter->id ? 'selected' : '' }}>{{ $dokter->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="poli_id">Poli</label>
            <select class="form-control" id="poli_id" disabled>
                @foreach($polis as $poli)
                    <option value="{{ $poli->id }}" {{ $kunjungan->poli_id == $poli->id ? 'selected' : '' }}>{{ $poli->nama_poli }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="diagnosa">Diagnosa</label>
            <textarea class="form-control" id="diagnosa" name="diagnosa" required>{{ $kunjungan->diagnosa }}</textarea>
        </div>

        <div class="form-group">
            <label for="tindakan">Tindakan</label>
            <textarea class="form-control" id="tindakan" name="tindakan" required>{{ $kunjungan->tindakan }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection