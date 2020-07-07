@extends('layouts.left')

@section('content')
<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Detail Pertanyaan</h1>
				</div><!-- /.col -->

				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Detail Pertanyaan</li>
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
						<div class="card-header">
							<div class="row">
								<div class="col-md-12">
									<h3 class="card-title mt-2">Detail Pertanyaan</h3>
								</div>
							</div>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<div class="card-body" style="background: #dadadaa8; border-radius: 4px;">
										<div class="row">
											<div class="col-md-12">
												<h3 style="color: blue;" align="center"><b>{{ $detail->judul }}</b></h3>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12 card" style="background: #bcc0dea8;">
												<h5 align="center"><strong>{{ $detail->isi }}?</strong></h5>
											</div>
										</div>

										@foreach($join as $isi_jawaban)
											<p class="card-text"><i>{{ $isi_jawaban->jawaban_isi }}</i></p>
											<hr>
										@endforeach
										<div class="row">
											<div class="col-md-6">
												<a style="width: 100%;" class="btn btn-primary" href="{{url('pertanyaan/detail/'.$detail->id.'/edit')}}"><i class="nav-icon fas fa-edit"></i></a>
											</div>
											<div class="col-md-6">
												<form action="{{url('pertanyaan/detail/'.$detail->id)}}" method="post">
													@csrf
													@method('delete')
													<button style="width: 100%;" class="btn btn-danger" type="submit"><i class="nav-icon fas fa-trash"></i></button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /.card-body -->

						<div class="card-footer">
							<div class="row">
								<div class="col-md-12">
									<a class="btn btn-primary" href="{{url('pertanyaan/detail/'.$detail->id.'/jawaban')}}" class="card-link">Jawab</a>
									<a href="{{url('pertanyaan')}}" class="btn btn-danger">Kembali</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection