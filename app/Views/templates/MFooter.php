	<script>
	   $(document).ready(function (){
	       $("#home").click(function(){$('html,body').animate({scrollTop:0},2000);$('.navbar-collapse').removeClass('show')});
	       $("#about").click(function(){$('html,body').animate({scrollTop:$('.about').offset().top-75},2000);$('.navbar-collapse').removeClass('show')});
	       $("#testimonial").click(function(){$('html,body').animate({scrollTop:$('.design').offset().top-75},2000);$('.navbar-collapse').removeClass('show')});
	       $("#design").click(function(){$('html,body').animate({scrollTop:$('.price').offset().top-75},2000);$('.navbar-collapse').removeClass('show')});
	       $("#price").click(function(){$('html,body').animate({scrollTop:$('.contact').offset().top-75},2000);$('.navbar-collapse').removeClass('show')});
	       setTimeout(function(){$('#email-send-success').modal('show');},1500);
	       $('#email-send-success').click(function(){window.location.assign("https://momentku.info");});});
	</script>
</body></html>