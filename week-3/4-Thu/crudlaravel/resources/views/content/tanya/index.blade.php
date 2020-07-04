@extends('layouts.left')

@section('content')
<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Data Table</h1>
				</div><!-- /.col -->

				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Data Table</li>
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
									<h3 class="card-title mt-2">DataTable with default features</h3>
								</div>
								<div class="col-md-6">
									<a style="float: right;" href="{{route('buat')}}" class="btn btn-primary">Bertanya</a>
								</div>
							</div>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<form>
								@csrf
								@foreach($data as $p)
								<div class="row">
									<div class="col-md-12">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-2"><b>{{ $p->judul }}</b></h5>
												<p class="card-text">{{ $p->isi }}</p>
												@foreach($p->jawaban as $isi_jawaban)
													<p>{{ $isi_jawaban }}</p>
												@endforeach

												<a href="{{url('jawaban/'.$p->id)}}" class="card-link">Read more</a>
											</div>
										</div>
									</div>
								</div>
								@endforeach
							</form>
						</div>
						<!-- /.card-body -->
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection

@push('cssdatatables')
	<link rel="stylesheet" href="{{ asset('dist/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
@endpush

@push('jsdatatables')
	<script src="{{ asset('dist/plugins/datatables/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('dist/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
	<script>
		$(document).ready(function(){
			$('#data').DataTable();
		});
	</script>
@endpush