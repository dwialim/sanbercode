@extends('layouts.left')

@section('content')
<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Data Pertanyaan</h1>
				</div><!-- /.col -->

				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Data Pertanyaan</li>
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
								<div class="col-md-6">
									<h3 class="card-title mt-2">Data Pertanyaan</h3>
								</div>
								<div class="col-md-6">
									<a style="float: right;" href="{{route('buat')}}" class="btn btn-primary">Bertanya</a>
								</div>
							</div>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
								<div class="row">
									<div class="col-md-12">
							<form>
								@csrf
								@foreach($data as $p)
										<div class="card-body mb-5" style="background: #dadadaa8; border-radius: 4px;">
											<div class="row">
												<div class="col-md-12">
													<h3 align="center"><b><a href="{{url('pertanyaan/detail/'.$p->id)}}">{{ $p->judul }}</a></b></h3>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12 card" style="background: #bcc0dea8;">
													<h5 class="mt-1" align="center">{{ $p->isi }} ?</h5>
												</div>
											</div>

											@foreach($p->jawaban as $isi_jawaban)
												<p class="card-text"><i>{{ $isi_jawaban }}</i></p>
												<hr>
											@endforeach
										</div>
								@endforeach
							</form>
									</div>
								</div>
						</div>
						<!-- /.card-body -->
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection