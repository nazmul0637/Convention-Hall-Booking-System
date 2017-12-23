<!DOCTYPE html>
	<html class="no-js" lang="">
	@include('partials._head')

		<body>

			@include('partials._nave_blank')

			@yield('content')

			@include('partials._footer_widget')

			@include('partials._footer')

			@include('partials._javascript')

			@yeild('scrollup')

			@yield('scripts')


		</body>

	</html>