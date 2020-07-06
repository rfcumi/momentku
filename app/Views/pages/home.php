<!DOCTYPE html><html lang='en'><head>
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<title>Home | Momentku</title>
	<?php
		$linkIcon = 'public/assets/images/icon-momentku.png';
		$linkBootstrapCSS = 'public/assets/bootstrap.min.css';
		$linkBootstrapJS = 'public/assets/bootstrap.min.js';
		$linkJqueryJS = 'public/assets/jquery.min.js';
	?>
	<link rel='icon' type='image/png' href='<?php echo base_url($linkIcon)?>'>
	<link rel='stylesheet' href='<?php echo base_url($linkBootstrapCSS)?>'>
	<script src='<?php echo base_url($linkJqueryJS)?>'></script>
	<script src='<?php echo base_url($linkBootstrapJS)?>'></script>
	<style>
		::-webkit-scrollbar{width:1px;}
		/*for offline, for online use google font "quicksand" */
		@font-face{font-family:quicksand;src:url(public/assets/fontQuicksand.ttf);}
	    body{ 
	        font-size:1rem;
			font-family:quicksand;}
			.frame{
		    min-height: 100vh;
		    text-align: center;}
		.frame:first-of-type{
		    margin-top:60px;}
		.contents{
		    padding:10px;}
		.btn-mail{
			cursor:pointer;
			border-radius:50px;
			border:1px solid transparent;
			padding:0.6rem 0.9rem 0.6rem 0.6rem;}
		.btn-mail i{
			padding:6px;
			color:#28a745;
			margin-right:10px;
			position:relative;
			border-radius:50px;
			background-color:#fff;}
		
		.modal-body>.title {
			font-weight:500;
		    letter-spacing:2px;
			text-transform:uppercase;
		    margin-bottom:10px!important;
		    padding-bottom:10px!important;
			border-bottom: 1.5px solid #ced4da;}
		
		#form-contact-email .form-group{
		    margin-bottom:10px!important;}
		#form-contact-email .textarea>span{
			display:block;
			font-size:10px;
			text-align:left;
			font-style:oblique;}
		#form-contact-email>button{
			width: 100px;}
		
			.navbar {
				padding: .4rem 1rem;}

			.navbar-brand {
				font-family: 'Pacifico', cursive;}

			.navbar-brand img {
				width: 25px;
				height: 25px;}

			.navbar-brand span {
				width: 0%;
				overflow: hidden;
				padding-left: 3px;
				white-space: nowrap;
				display: inline-block;}

			.navbar-nav a {
				text-align: center;}

			@media only screen and (min-width: 810px) {
				.navbar-expand-custom {
				  flex-flow: row nowrap;
				  -ms-flex-pack: start;
				  -ms-flex-flow: row nowrap;
				  justify-content: flex-start;}

				.navbar-expand-custom .navbar-nav {
				  -ms-flex-direction: row;
				  flex-direction: row;}

				.navbar-expand-custom .navbar-nav .dropdown-menu {
				  position: absolute;}

				.navbar-expand-custom .navbar-nav .nav-link {
				  padding-right: 0.5rem;
				  padding-left: 0.5rem;}

				.navbar-expand-custom > .container,
				.navbar-expand-custom > .container-fluid {
				  -ms-flex-wrap: nowrap;
				  flex-wrap: nowrap;}

				.navbar-expand-custom .navbar-collapse {
				  display: -ms-flexbox !important;
				  display: flex !important;
				  -ms-flex-preferred-size: auto;
				  flex-basis: auto;}

				.navbar-expand-custom .navbar-toggler {
				  display: none;}

				.navbar-nav a {
				  width: 120px;}}

			.title {
				margin-bottom: 10px !important;
				text-transform: uppercase;
				letter-spacing: 1px;
				font-weight: 500;}

			.under-construction div {
				padding-top: 15px;}

			/*Brand animation*/
			.slider {
				animation: slider 2s;
				animation-delay: 0.5s;
				animation-fill-mode: forwards;}

			@keyframes slider {
				0%	{ width: 0%; }
				100%{ width: 100%; }}

			.bellshake {
				animation: bellshake .5s;}

			@keyframes bellshake {
				0%	{ transform: rotate(0); }
				15%	{ transform: rotate(5deg); }
				30%	{ transform: rotate(-5deg); }
				45%	{ transform: rotate(4deg); }
				60%	{ transform: rotate(-4deg); }
				75%	{ transform: rotate(2deg); }
				85%	{ transform: rotate(-2deg); }
				92%	{ transform: rotate(1deg); }
				100%{ transform: rotate(0); }}
			/*End brand animation*/
        /*Under Construction Animation*/
        .material-icons{
		    color:aqua;
		    font-size:50px;
		    animation:spin 3s linear infinite;}
		.material-icons:last-of-type{
			top:12px;
			color:grey;
			margin-left:-11px;
			position:relative;
			animation-direction:reverse;}
		@keyframes spin{
		    0%	{transform:rotate(0deg);}
			100%{transform:rotate(360deg);}}
		.blinking{
	        animation: blinking 0.8s infinite;}
	    @keyframes blinking{
				0%	{color:transparent;}
				50%	{color:grey;}
				100%{color:transparent;}}
		/*End Under Construction Animation*/		
	</style>
	<body>
		<nav class='navbar fixed-top navbar-expand-custom navbar-light bg-light'>
			<a class='navbar-brand' href='#'><img src='<?php echo base_url($linkIcon) ?>' class='d-inline-block align-top bellshake' alt=''/><span class='slider'>Moment Ku</span></a>
			<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNavAltMarkup' aria-controls='navbarNavAltMarkup' aria-expanded='false' aria-label='Toggle navigation'><span class='navbar-toggler-icon'></span></button>
			<div class='collapse navbar-collapse' id='navbarNavAltMarkup'>
				<div class='navbar-nav ml-auto'>
					<a class='nav-item nav-link' id='home' href='#'>Beranda <span class='sr-only'>(current)</span></a>
					<a class='nav-item nav-link' id='about' href='#'>Tentang Kami</a>
					<a class='nav-item nav-link' id='design' href='#'>Desain</a>
					<a class='nav-item nav-link' id='price' href='#'>Harga</a>
					<a class='nav-item nav-link' id='contact' href='#'>Kontak</a>
					<a class='nav-item nav-link disabled' href='#'>Login</a>
				</div>
			</div>
		</nav>
		<div class='frame'>
		    <div class='contents home'>
		        <div class='title'>Selamat datang di momentku</div>
		        <p>Yuk, abadikan moment undangan pernikahan mu disini</p>
				<button class='btn-mail btn-success' data-toggle='modal' data-target='#modal-contact-email'><i class='far fa-envelope'></i>admin@momentku.info</button>
			</div>
			<!-- Modal Contact Email -->
			<div class='modal fade' id='modal-contact-email' role='dialog'><div class='modal-dialog'>
			    <div class='modal-content'><div class='modal-body'>
			        <div class='title'>Kontak Kami</div>
			        <form id='form-contact-email' method='post' enctype='multipart/form-data'>
			            <div class='form-group'><input type='text' name='nama' class='form-control form-control-sm' placeholder='Nama Anda' required></div>
			            <div class='form-group'><input type='email' name='email' class='form-control form-control-sm' placeholder='Email' required></div>
			            <div class='form-group'><input type='tel' name='telp' class='form-control form-control-sm' placeholder='Nomor whatsapp' required></div>
			            <div class='form-group textarea'>
			                <textarea name='pesan' rows='4' class='form-control form-control-sm' placeholder='Hai ka, saya tertarik ingin membuat undangan online-nya'></textarea>
			                <span>*Email akan dibalas kurang lebih 1 hari setalah dikirim</span>
			            </div>
			            <button type='submit' name='submit-kirim' class='btn btn-sm btn-primary' id='send-email' >Kirim</button>
			            <button type='button' class='btn btn-sm btn-primary' data-dismiss='modal'>Batal</button>
			        </form>
			    </div></div>
			</div></div>
			<?php if(isset($_POST['submit-kirim'])){
    		    echo "<!-- Modal Contact Email -->
    		    <div class='modal fade' id='email-send-success' role='dialog'><div class='modal-dialog'>
    		        <div class='modal-content'><div class='modal-body'>
    		           <div class='title'>Email Terkirim</div>
    		            <p>Email yang ada kirim sudah kami terima, akan kami segera proses. Terima kasih sudah menghubungi dan menggunakan jasa kami</p>
    		        </div></div>
    		    </div></div>";}?>
	    </div>
		<!-- <div class='frame'>
			<div class='contents about'>
				<div class='title'>Apa saja yang diberikan di-momentku ?</div>
				<?php #echo $uc ?>
			</div>
		</div>
		<div class='frame'>
			<div class='contents design'>
				<div class='title'>Beberapa desain jasa kami</div>
			    <?php #echo $uc ?>
			</div>
		</div>
		<div class='frame'>
			<div class='contents price'>
				<div class='title'>Harga yang kami berikan</div>
			    <p>Dapat disesuai dengan kebutuan dan budget yang anda miliki, mulai dari Rp NULL - Rp NULL</p>
			</div>
		</div>
		<div class='frame'>
			<div class='contents contact'>
				<div class='title'>Hubungi Kami</div>
        		<?php #echo $uc ?>
			</div>
		</div>
		<script>
		    $(document).ready(function (){
		        $("#home").click(function(){$('html,body').animate({scrollTop:0},2000);$('.navbar-collapse').removeClass('show')});
		        $("#about").click(function(){$('html,body').animate({scrollTop:$('.about').offset().top-75},2000);$('.navbar-collapse').removeClass('show')});
		        $("#design").click(function(){$('html,body').animate({scrollTop:$('.design').offset().top-75},2000);$('.navbar-collapse').removeClass('show')});
		        $("#price").click(function(){$('html,body').animate({scrollTop:$('.price').offset().top-75},2000);$('.navbar-collapse').removeClass('show')});
		        $("#contact").click(function(){$('html,body').animate({scrollTop:$('.contact').offset().top-75},2000);$('.navbar-collapse').removeClass('show')});
		        setTimeout(function(){$('#email-send-success').modal('show');},1500);
		        $('#email-send-success').click(function(){window.location.assign("https://momentku.info");});});
		</script>-->
	</body>
</html>