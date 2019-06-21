@extends('layouts.app')

@section('title', 'Brexit')

@section('content')
	<main>
		<section class="jumbotron text-center">
			<div class="container">
				<h1 class="display-4">Brexit</h1><hr class="my-4">
			</div>
		</section>

		<div class="py-5 bg-light">
			<div class="container">
				<div class="row">
					<div class="col-md-8 offset-md-2">
						<video poster="{{ url('storage/movie_posters/brexit_poster_horizontal.jpg') }}" controls controlsList="nodownload" preload="none">
							<source src="{{ url('storage/movies/brexit/brexit.mp4') }}" type="video/mp4">
								Your browser does not support the video tag.
						</video>
						<p>
							<small>Film telewizyjny HBO i BBC pokazuje kampanię brexitową z perspektywy mało znanych strategów z obu stron barykady - obozu opowiadającego się za wyjściem oraz pozostaniem Wielkiej Brytanii w Unii Europejskiej. Każda ze stron stara się zdobyć przewagę nad przeciwnikiem, zmagając się jednocześnie z walczącymi o światło jupiterów politykami oraz kontrowersyjnymi poplecznikami finansującymi ich działania. W czasach, gdy w mediach co chwilę pojawiają się nowe rewelacje na temat wykradania danych osobowych, niszczącego działania fake newsów oraz precyzyjnego targetowania reklam w mediach społecznościowych, Brexit bada w jaki sposób nowoczesne techniki prowadzenia kampanii, oparte na wykorzystywaniu danych, przyczyniły się do podjęcia jednej z najbardziej nieoczekiwanych i kontrowersyjnych decyzji we współczesnej historii politycznej. Gwiazdą obrazu jest nominowany do Oscara Benedict Cumberbatch (Gra tajemnic), który wciela się w postać Dominica Cummingsa, głównego stratega kampanii na rzecz wyjścia Wielkiej Brytanii z UE. W pozostałych rolach występują Rory Kinnear (serial Dom grozy), John Heffernan (Niewidzialny wróg), Richard Goulding (Żelazna Dama) oraz Oliver Maltman (Happy-Go-Lucky, czyli co nas uszczęśliwia). Reżyserem produkcji jest Toby Haynes (serial Czarne lustro).</small>
						</p>
					</div>
				</div>
			</div>
		</div>
	</main>

@endsection