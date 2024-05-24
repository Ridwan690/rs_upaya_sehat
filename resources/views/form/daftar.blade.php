@extends('layouts.admin')

@section('main')

<div class="p-t-40 ">
    <div class="p-l-40 p-r-40">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Pendaftaran Pasien Rumah Sakit</h2> <!-- Title is already correct -->
                <form method="POST">
                    <div class="input-group">
                        <label class="label">Nama Lengkap</label> <!-- Updated label -->
                        <input class="input--style-4" type="text" name="nama_lengkap">
                    </div>
                    <div class="input-group">
                        <label class="label">Nomor Identitas (KTP/SIM/Paspor)</label> <!-- Updated label -->
                        <input class="input--style-4" type="text" name="nomor_identitas">
                    </div>
                    <div class="input-group">
                        <label class="label">Jenis Kelamin</label> <!-- Updated label -->
                        <div class="p-t-10">
                            <label class="radio-container m-r-45">Laki-laki
                                <!-- Updated label -->
                                <input type="radio" checked="checked" name="jenis_kelamin" value="Laki-laki">
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio-container">Perempuan
                                <!-- Updated label -->
                                <input type="radio" name="jenis_kelamin" value="Perempuan">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="input-group">
                        <label class="label">Tanggal Lahir</label> <!-- Updated label -->
                        <div class="input-group-icon">
                            <input class="input--style-4 js-datepicker" type="text" name="tanggal_lahir">
                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                        </div>
                    </div>
                    <div class="input-group">
                        <label class="label">Alamat Lengkap</label> <!-- Updated label -->
                        <textarea class="input--style-4" name="alamat_lengkap"></textarea>
                    </div>
                    <div class="input-group">
                        <label class="label">Nomor Telepon</label> <!-- Updated label -->
                        <input class="input--style-4" type="text" name="nomor_telepon">
                    </div>
                    <div class="input-group">
                        <label class="label">Pilih Poli</label> <!-- Updated label -->
                        <div class="rs-select2 js-select-simple select--no-search">
                            <select name="pilih_poliklinik">
                                <option disabled="disabled" selected="selected">Select</option>
                                <option>Poli 1</option>
                                <option>Poli 2</option>
                                <option>Poli 3</option>
                                <option>Poli 4</option>
                                <option>Poli 5</option>
                                <option>Poli 6</option>
                            </select>
                            <div class="select-dropdown"></div>
                        </div>
                    </div>
                    <div class="p-t-15">
                        <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
