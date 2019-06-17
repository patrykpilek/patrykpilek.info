@extends('layouts.app')

@section('title', 'Agora')

@section('content')
	<main>
		<section class="jumbotron text-center">
			<div class="container">
				<h1 class="display-4">Agora</h1><hr class="my-4">
			</div>
		</section>

		<div class="py-5 bg-light">
			<div class="container">
				<div class="row">
					<div class="col-md-8 offset-md-2">
						<video poster="{{ url('storage/movie_posters/agora_poster_horizontal.jpg') }}" controls controlsList="nodownload" preload="none">
							<source src="{{ url('storage/movies/agora/agora.mp4') }}" type="video/mp4">
								Your browser does not support the video tag.
						</video>
						<p>
							<small>Film opowiada historię Hypatii, greckiej filozofki i astronomki żyjącej w IV wieku w Aleksandrii, zagranej przez Weisz, oraz Dawosa (Max Minghella), zakochanego w niej niewolnika. Tłem dla filmu jest historia rodzącej się potęgi nowej religii – chrześcijaństwa. Hypatia poświęcona nauce stara się uratować od zapomnienia wiedzę starożytnego świata przed nową religią, podczas gdy Dawos musi dokonać wyboru pomiędzy miłością do Hypatii a szansą na wolność, którą mogłoby mu zapewnić przejście na chrześcijaństwo.</small>
						</p>
					</div>
				</div>
			</div>
		</div>
	</main>

	<footer class="text-muted">
		<div class="container">
			<p class="float-right">
				<a href="#" class="btn">Back to top</a>
			</p>
		</div>
	</footer>
@endsection