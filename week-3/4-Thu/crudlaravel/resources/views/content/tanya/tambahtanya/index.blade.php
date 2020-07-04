@extends('layouts.left')

@section('content')
<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Form Tanya</h1>
				</div><!-- /.col -->

				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Form Tanya</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Form tanya</h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<form action="/pertanyaan" method="POST">
							@csrf
							<div class="card-body">
								<div class="form-group">
									<label for="exampleInputEmail1">Judul
										<p style="font-weight:normal; margin-top:2px !important; color:var(--fc-medium); font-size:14px; clear:both; margin-bottom:0;">Lebih spesifik dan bayangkan Anda mengajukan pertanyaan kepada orang lain</p>
									</label>
									<input type="text" name="judul" class="form-control" id="exampleInputEmail1" placeholder="misalnya apakah ada fungsi R untuk menemukan indeks elemen dalam vektor?">
								</div>

								<div class="form-group">
									<label>Body
										<p style="font-weight:normal; margin-top:2px !important; color:var(--fc-medium); font-size:14px; clear:both; margin-bottom:0;">Sertakan semua informasi yang diperlukan seseorang untuk menjawab pertanyaan Anda</p>
									</label>
									<textarea class="form-control" style="border-radius: 5px;" rows="8" name="isi"></textarea>
								</div>
							</div>
							<!-- /.card-body -->

							<div class="card-footer">
								<div class="row">
									<button type="submit" class="btn btn-success">Submit</button>
									&nbsp;&nbsp;&nbsp;
									<a href="{{url('pertanyaan')}}" class="btn btn-danger">Kembali</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection