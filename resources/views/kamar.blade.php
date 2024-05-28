@extends('layouts.master')

@section('content')
<div class="container-fluid py-5">
	<div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px;">
            <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Tarif Kamar</h5>
        </div>
		<div class="row gx-5 py-5">
			<div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 320px;">
				<div class="img-fluid position-relative">
					<img class="position-absolute rounded" src="img/Kamar3.png" style="object-fit: cover;">
				</div>
			</div>
			<div class="col-lg-7">
				<div class="mb-4">
					<h1 class="display-4">VIP</h1>
				</div>
				<div class="row gx-5">
					<div class="col">
						<ul style="white-space: nowrap;">
							<li>AC</li>
							<li>TV Ultra HD</li>
							<li>Bed elektrik</li>
							<li>Bed side cabinet</li>
							<li>Sofa bed</li>
							<li>Kulkas</li>
							<li>Dispenser</li>
						</ul>
					</div>
					<div class="col">
						<ul style="white-space: nowrap;">
							<li>Lemari pakaian</li>
							<li>Nurse call</li>
							<li>Kamar mandi</li>
							<li>Air panas</li>
							<li>Shower</li>
						</ul>
					</div>
				</div>
                <h5>Harga : 900.000</h5>
			</div>
		</div>
        <br>
        <div class="row gx-5 py-5">
			<div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 320px;">
				<div class="img-fluid position-relative">
					<img class="position-absolute rounded" src="img/Kamar2.png" style="object-fit: cover;">
				</div>
			</div>
			<div class="col-lg-7">
				<div class="mb-4">
					<h1 class="display-4">Kelas 1</h1>
				</div>
				<div class="row gx-5">
                <div class="col">
                    <ul style="white-space: nowrap;">
                        <li>TV</li>
                        <li>Bed elektrik</li>
                        <li>Dispenser</li>
                    </ul>
                </div>
                <div class="col">
                    <ul style="white-space: nowrap;">
                        <li>Sofa</li>
                        <li>Kamar mandi</li>
                        <li>Shower</li>
                    </ul>
                </div>
            </div>
                <h5>Harga : 600.000</h5>
			</div>
		</div>
        <br>
        <div class="row gx-5 py-5">
			<div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 320px;">
				<div class="img-fluid position-relative">
					<img class="position-absolute rounded" src="img/Kamar1.png" style="object-fit: cover;">
				</div>
			</div>
			<div class="col-lg-7">
				<div class="mb-4">
					<h1 class="display-4">Kelas 2</h1>
				</div>
				<div class="row gx-5">
                <div class="col">
                    <ul style="white-space: nowrap;">
                        <li>Bed Side Cabinet</li>
                        <li>Kamar Mandi</li>
                        <li>Kursi Tunggu Pasien</li>
                    </ul>
                </div>
                <div class="col">
                    <ul style="white-space: nowrap;">
                        
                    </ul>
                </div>
            </div>
                <h5>Harga : 450.000</h5>
			</div>
		</div>
	</div>
</div>
@endsection