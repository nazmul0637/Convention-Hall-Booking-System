<!DOCTYPE html>
	<html class="no-js" lang="">
	@include('partials._head')

		<body>

			@include('partials._nav')

			@yield('content')

			@include('partials._footer_widget')

			@include('partials._footer')

			@include('partials._javascript')

			@yeild('scrollup')

			@yield('scripts')


		</body>

	</html>