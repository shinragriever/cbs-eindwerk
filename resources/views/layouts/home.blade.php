@include('shared.header')
	@yield('titlebar')
	@yield('content')
		
	@include('shared.footer')

<!--===============================================================================================-->
<script type="text/javascript" src="{{asset("vendor/jquery/jquery-3.2.1.min.js")}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset("vendor/animsition/js/animsition.min.js")}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset("vendor/bootstrap/js/popper.js")}}"></script>
	<script type="text/javascript" src="{{asset("vendor/bootstrap/js/bootstrap.min.js")}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset("vendor/select2/select2.min.js")}}"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset("vendor/daterangepicker/moment.min.js")}}"></script>
	<script type="text/javascript" src="{{asset("vendor/daterangepicker/daterangepicker.js")}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset("vendor/slick/slick.min.js")}}"></script>
	<script type="text/javascript" src="{{asset("js/slick-custom.js")}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset("vendor/sweetalert/sweetalert.min.js")}}"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>


<!--===============================================================================================-->
	<script src="{{asset("js/main.js")}}"></script>

</body>
</html>