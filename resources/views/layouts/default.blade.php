<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		@include('includes.head')
		@yield('css')
	</head>
	<body>

		@include('includes.loader')

		<div id="pcoded" class="pcoded">
			
			<div class="pcoded-container">
					
				@include('includes.navbar')
				
				<div class="pcoded-main-container">

					@include('includes.navbar2')
				
					@yield('content')
					
				</div>
					
			</div>
		</div>
			@include('includes.footer')

			@yield('js')
	</body>

</html>
