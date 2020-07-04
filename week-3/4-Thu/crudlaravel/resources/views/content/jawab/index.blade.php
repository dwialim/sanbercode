@extends('layouts.left')

@section('content')
<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Form Jawab</h1>
				</div><!-- /.col -->

				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Form Jawab</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<!-- /.card-header -->
						<div class="card card-warning">
							<div class="card-header">
								<h3 class="card-title">Form Jawab</h3>
							</div>
							<!-- /.card-header -->
							<div class="card-body">
								<form action="{{url('jawaban/'.$data->id)}}" method="POST">
									@csrf
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<label>Pertanyaan</label>
												<input type="text" class="form-control" value="{{$data->isi}}" readonly="">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<!-- textarea -->
											<div class="form-group">
												<label>Jawab</label>
												<textarea name="jawaban_isi" class="form-control" rows="3" placeholder="Enter ..."></textarea>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="row">
											<button type="submit" class="btn btn-success">Submit</button>
											&nbsp;&nbsp;&nbsp;
											<a href="{{url('pertanyaan')}}" class="btn btn-danger">Kembali</a>
										</div>
									</div>
								</form>
							</div>
							<!-- /.card-body -->
						</div>
						<!-- /.card-body -->
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection