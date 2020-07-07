<!DOCTYPE html><html lang='en'><head>
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<title>Home | Momentku</title>
	<link rel='icon' type='image/png' href='<?php echo base_url($linkIcon)?>'>
	<link rel='stylesheet' href='<?php echo base_url($linkBootstrapCSS)?>'>
	<script src='<?php echo base_url($linkJqueryJS)?>'></script>
	<script src='<?php echo base_url($linkBootstrapJS)?>'></script>
	<style>
	    ::-webkit-scrollbar{width:1px;}
	    body{ 
	        font-size:16px;}
	    .frame{
		    min-height: 100vh;
		    text-align: center;}
		.contents{
		    padding:10px;}
		.title {
			font-weight:500;
		    letter-spacing:2px;
			text-transform:uppercase;
		    margin-bottom:10px!important;
		    padding-bottom:10px!important;
			border-bottom: 1.5px solid #ced4da;}
			
		.form-page{
		    width:290px;
		    display:inline-block;}
		    .form-page .form-group{
		    margin-bottom:10px!important;}
		.form-page button{
			width:132px;}
		.form-page>.other-choice{
		    font-size:14px;
		    margin-top:20px!important;
			border-top:1.5px solid #ced4da;}
		.form-page>.other-choice>span{
            display:block;
            padding-bottom:10px;}
		.form-page>.other-choice>span:first-child{
            top:-11px;
            width:80px;
            font-weight:500;
            position:relative;
            letter-spacing:2px;
            display:inline-grid;
            background-color:#fff;
            text-transform:uppercase;
            padding-bottom:inherit!important;}
		.form-page>.other-choice .btn-success{
		    background-color:#21e64e!important;
		    border-color:#21e64e!important;}
		.form-page>.other-choice .btn-danger{
		    background-color:#d61326!important;
		    border-color:#d61326!important;}
		</style>
	<body>
	<?php
	    $uc = "<div class='under-construction'><i class='material-icons'>settings</i><i class='material-icons'>settings</i><div class='blinking'>Dalam perbaikan ...</div></div>";
	?>
	<div class="frame row align-items-center">
	    <div class="col d-none d-md-block form-slider-promo">
	        <div id="sliderPromoForm" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active"><p>Hai kamu !</p></div>
                    <div class="carousel-item"><p>Ada yang baru dari momentku</p></div>
                    <div class="carousel-item"><p>tunggu ya 😊</p></div>
                </div>
                <a class="carousel-control-prev" href="#sliderPromoForm" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
                <a class="carousel-control-next" href="#sliderPromoForm" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
            </div>
        </div>
        <div class="col">
            <div class='contents form-page form-login-momentku'>
                <div class='title'>Login Momentku</div>
                <form id='form-login-momentku' method='post' enctype='multipart/form-data'>
                    <div class='form-group'><input type='email' name='email' class='form-control form-control-sm' placeholder='Email Anda' required></div>
                    <div class='form-group'><input type='password' name='pwd' class='form-control form-control-sm' placeholder='Password Anda' required></div>
                    <button type='submit' name='submit-masuk' class='btn btn-sm btn-primary' id='login-momentku' >Masuk</button>
                    <button type='button' class='btn btn-sm btn-primary' id='cancel-login-momentku'>Batal</button>
                </form>
                <div class='other-choice'>
                    <span>atau</span>
                    <span class='btn btn-sm btn-success btn-block' id='to-register-momentku'>Belum punya Akun ? Daftar disini</span>
                    <span class='btn btn-sm btn-danger btn-block' id='to-forget-momentku'>Anda lupa password ?</span>
                </div>
            </div>
            <div class='contents form-page form-register-momentku' style='display:none;'>
                <div class='title'>Registrasi Momentku</div>
                <form id='form-register-momentku' method='post' enctype='multipart/form-data'>
                    <div class='form-group'><input type='text' name='name' class='form-control form-control-sm' placeholder='Nama Anda' required></div>
                    <div class='form-group'><input type='email' name='email' class='form-control form-control-sm' placeholder='Email Anda' required></div>
                    <div class='form-group'><input type='tel' name='whatsapp' class='form-control form-control-sm' placeholder='Whatsapp Anda' required></div>
                    <div class='form-group'><input type='password' name='pass' class='form-control form-control-sm' placeholder='Password Anda' required></div>
                    <div class='form-group'><input type='confirm-pwd' name='confirm-pass' class='form-control form-control-sm' placeholder='Ulangi Password Anda' required></div>
                    <button type='submit' name='submit-simpan' class='btn btn-sm btn-primary' id='register-momentku' >Simpan</button>
                    <button type='button' class='btn btn-sm btn-primary' id='back-login-register'>Kembali</button>
                </form>
            </div>
            <div class='contents form-page form-forget-momentku' style='display:none;'>
                <div class='title'>Lupa Password</div>
                <form id='form-forget-momentku' method='post' enctype='multipart/form-data'>
                    <div class='form-group'><input type='text' name='forget' class='form-control form-control-sm' placeholder='Email or Whatsapp' required></div>
                    <button type='submit' name='submit-terapkan' class='btn btn-sm btn-primary' id='register-momentku'>Terapkan</button>
                    <button type='button' class='btn btn-sm btn-primary' id='back-login-forget'>Kembali</button>
                </form>
            </div>
        </div>
    </div>
	<script>
	    $(document).ready(function(){
	        $('#cancel-login-momentku').click(function(){window.location.assign("https://momentku.info");});
	        $('#to-register-momentku').click(function(){setTimeout(function(){$(".form-register-momentku").fadeIn();},400);$(".form-login-momentku").fadeOut();});
	        $('#back-login-register').click(function(){setTimeout(function(){$(".form-login-momentku").fadeIn();},400);$(".form-register-momentku").fadeOut();});
	        $('#to-forget-momentku').click(function(){setTimeout(function(){$(".form-forget-momentku").fadeIn();},400);$(".form-login-momentku").fadeOut();});
	        $('#back-login-forget').click(function(){setTimeout(function(){$(".form-login-momentku").fadeIn();},400);$(".form-forget-momentku").fadeOut();});
	    });
	</script>
</body></html>