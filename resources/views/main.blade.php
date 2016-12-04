@include('partials._head')
<body>
	@include('partials._nav')
	<div class="container">
	@include('partials._messages')
	{{-- {{ Auth::check() ? "Loggeg In" :"Logged Out" }} --}}

	@yield('body')
	@include('partials._footer')

	</div>

@include('partials._javascript')
@yield('script')
  </body>
</html>
