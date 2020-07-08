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
		.title {
			font-weight:500;
		    letter-spacing:2px;
			text-transform:uppercase;
		    margin-bottom:10px!important;
		    padding-bottom:10px!important;
			border-bottom: 1.5px solid #ced4da;}
		.join-promo{
			min-height:92vh;
			background:#f0ffff;
			border-top-right-radius: 2rem;
    		border-bottom-right-radius: 2rem;}
		.join-promo, .join-form{
			display:flex;}
		.join-promo .contents{
			width:100%;
			margin-top:auto;
			margin-bottom:auto;} 
		.join-form .contents{
			margin:auto;}

		.join-form .form-group{
		    margin-bottom:10px!important;}
		.join-form button{
			width:132px;}
		.join-form>.other-choice{
		    font-size:14px;
		    margin-top:20px!important;
			border-top:1.5px solid #ced4da;}
		.join-form>.other-choice>span{
            display:block;
            padding-bottom:10px;}
		.join-form>.other-choice>span:first-child{
            top:-11px;
            width:80px;
            font-weight:500;
            position:relative;
            letter-spacing:2px;
            display:inline-grid;
            background-color:#fff;
            text-transform:uppercase;
            padding-bottom:inherit!important;}
		.join-form>.other-choice .btn-success{
		    background-color:#21e64e!important;
		    border-color:#21e64e!important;}
		.join-form>.other-choice .btn-danger{
		    background-color:#d61326!important;
		    border-color:#d61326!important;}
		</style>
	<body>
	<div class="frame row align-items-center">
	    <div class="col d-none d-md-block">
		<div class="join-promo">
			<div class='contents'>
	        	<div class="carousel slide" id="joinSliderPromo" data-ride="carousel">
                	<div class="carousel-inner">
                    	<div class="carousel-item active">Hai kamu !</div>
                    	<div class="carousel-item">Ada yang baru dari momentku</div>
                    	<div class="carousel-item">tunggu ya 😊</div>
                	</div>
                	<a class="carousel-control-prev" href="#joinSliderPromo" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
                	<a class="carousel-control-next" href="#joinSliderPromo" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
            	</div>
			</div>
		</div>
        </div>
        <div class="col join-form">
            <div class='contents'>
                <div class='title'>Daftar Momentku</div>
                <form id='join-form' method='post' action='' enctype='multipart/form-data'>
					<div class='form-group'><input type='text' name='name' id='nam' class='form-control form-control-sm' placeholder='Nama Anda' required></div>
                    <div class='form-group'><input type='email' name='email' id='ema' class='form-control form-control-sm' placeholder='Email' required></div>
                    <div class='form-group'><input type='tel' name='whatsapp' id='wha' class='form-control form-control-sm' placeholder='Whatsapp' required></div>
                    <button type='submit' name='join-btn' id='join-btn' class='btn btn-sm btn-primary'>Daftar</button>
                    <button type='button' class='btn btn-sm btn-primary' id='cancel-btn'>Batal</button>
                </form>
                <!--<div class='other-choice'>
                    <span>atau</span>
                    <span class='btn btn-sm btn-success btn-block' id='to-register-momentku'>Belum punya Akun ? Daftar disini</span>
                    <span class='btn btn-sm btn-danger btn-block' id='to-forget-momentku'>Anda lupa password ?</span>
                </div>-->
            </div>
            <!--<div class='contents form-form form-register-momentku' style='display:none;'>
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
            <div class='contents form-form form-forget-momentku' style='display:none;'>
                <div class='title'>Lupa Password</div>
                <form id='form-forget-momentku' method='post' enctype='multipart/form-data'>
                    <div class='form-group'><input type='text' name='forget' class='form-control form-control-sm' placeholder='Email or Whatsapp' required></div>
                    <button type='submit' name='submit-terapkan' class='btn btn-sm btn-primary' id='register-momentku'>Terapkan</button>
                    <button type='button' class='btn btn-sm btn-primary' id='back-login-forget'>Kembali</button>
                </form>-->
            </div>
        </div>
    </div>
	<script>
	$(document).ready(function(){
		$('#ema').focusout(function(){
		var ema = $('#ema').val();
        	$.ajax({
            	type : "POST",
            	url  : "<?php echo base_url('MUndangan/check/')?>",
            	dataType : "JSON",
            	data : {ema:ema},
            	success : function(d){if(d.info){$('#join-btn').html('Masuk');}}
        	});
        });
		$('#join-form').submit(function(e){
			e.preventDefault();
			var nam = $('#nam').val();
			var ema = $('#ema').val();
			var wha = $('#wha').val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('MUndangan/check/')?>",
                    dataType : "JSON",
                    data : {nam:nam, ema:ema, wha:wha},
                    success : function(d){
                        alert(d.info);
                        if(d.send){
                            $("#kode").removeClass("hidden");
                        }
                    }
                });
            });
        });
	    $(document).ready(function(){
	        $('#cancel-btn').click(function(){window.location.assign("http://localhost/0momentku/MUndangan");});
	        $('#to-register-momentku').click(function(){setTimeout(function(){$(".form-register-momentku").fadeIn();},400);$(".form-login-momentku").fadeOut();});
	        $('#back-login-register').click(function(){setTimeout(function(){$(".form-login-momentku").fadeIn();},400);$(".form-register-momentku").fadeOut();});
	        $('#to-forget-momentku').click(function(){setTimeout(function(){$(".form-forget-momentku").fadeIn();},400);$(".form-login-momentku").fadeOut();});
	        $('#back-login-forget').click(function(){setTimeout(function(){$(".form-login-momentku").fadeIn();},400);$(".form-forget-momentku").fadeOut();});
	    });
	</script>
</body></html>