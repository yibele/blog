@include('partials._head')
<body>
	@include('partials._nav')
	<div class="container">
	@include('partials._messages')
	@yield('body')
	@include('partials._footer')

	</div>

@include('partials._javascript')
@yield('script')
  </body>
</html>
