<div class='frame'>
    <div class='contents home'>
        <div class='title'>Selamat datang di momentku</div>
        <p>Yuk, abadikan moment undangan pernikahan mu disini</p>
		<button class='btn-mail btn-success' data-toggle='modal' data-target='#modal-contact-email'>Buat Sekarang</button>
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
</div>-->