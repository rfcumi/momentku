<?php namespace App\Controllers;
      use App\Models\SClient;
      use CodeIgniter\Controller;
      date_default_timezone_set('Asia/Jakarta');
      
class MUndangan extends Controller{
    public function index(){
        $data = array (
            'linkIcon'=>'public/assets/images/icon-momentku.png',
            'linkBootstrapCSS'=>'public/assets/bootstrap.min.css',
            'linkBootstrapJS'=>'public/assets/bootstrap.min.js',
            'linkJqueryJS'=>'public/assets/jquery.min.js');

        echo view('templates/MHeader',$data);
        echo view('templates/MNavBar',$data);
        echo view('pages/home',$data);
        echo view('pages/about',$data);
        echo view('pages/testimonial',$data);
        echo view('pages/design',$data);
        echo view('pages/price',$data);
        echo view('templates/MFooter',$data);
    }
    public function register(){
        $data = array (
            'linkIcon'=>'public/assets/images/icon-momentku.png',
            'linkBootstrapCSS'=>'public/assets/bootstrap.min.css',
            'linkBootstrapJS'=>'public/assets/bootstrap.min.js',
            'linkJqueryJS'=>'public/assets/jquery.min.js');

        //echo view('templates/MHeader',$data);
        echo view('pages/login',$data);
        //echo view('templates/MFooter',$data);
    }
    public function check($pages=''){
        $m = new SClient();
        if($pages == 'email'){
            $p = array('ema'=>$_POST['ema']);
            $r = $m->checkEmail($p);
            $dm = array('slave'=>$r['slave']);
        }elseif($pages == 'whatsapp'){
            $p = array('wha'=>$_POST['wha']);
            $r = $m->checkWhatsapp($p);
            $dm = array('slave'=>$r['slave']);
        }else{
            $p = array('nam'=>$_POST['nam'],'ema'=>$_POST['ema'],'wha'=>$_POST['wha']);
            $r = $m->validation($p);
            $dm = array('info'=>$r['info']);
        }
        echo json_encode($dm);
    }

    //fix
    public function client($pages = 'form'){
        if($pages == 'form'){
            $this->clientForm();
        }else{
            $p = array('kode'=>$_POST['kode'],'name'=>$_POST['name'],'email'=>$_POST['email'],'whatsapp'=>$_POST['whatsapp']);
            return $this->clientValidasi($p);
        }
    }
    //fix
    public function clientValidasi($p){
        $model  = new M_client();
        $r = $model->validasi($p);
        if(isset($r['send'])){
            $send='1';
            $e = array('name'=>$p['name'],'email'=>$p['email'],'kode'=>$r['send']);
            $this->sendmail($e);
        }else{$send=NULL;}
        $d = array('info'=>$r['info'],'send'=>$send);
        echo json_encode($d);
    }
    //fix
    public function clientForm(){
        $data = ['title' => 'Form User Momentku'];
        echo view('templates/header', $data);
        echo view('pages/formUser');
        echo view('templates/footer');
    }
    //Truncate tabel sendmailtemp, hanya sementara di model M_client
    public function drop($pages = ''){
        if($pages == 'logsendmail'){
            $model = new M_client();
            $model->dropSendEmail();
        }else{
            echo "page not found 404";
        }
    }
    //fix
    function sendmail($e){
        $email = \Config\Services::email();
        $configMail = Array('protocol'=>'mail','smtp_host'=>'srv58.niagahoster.com','smtp_port'=>587,'smtp_user'=>'admin@momentku.info','smtp_pass'=>'MomentkU1313','mailtype'=>'html','charset'=>'iso-8859-1');
        $email->initialize($configMail);
        
        $email->setFrom('no-reply@momentku.info', 'No-reply | Momentku.info');
        $email->setTo($e['email']);
        $email->setSubject('Kode PIN Registrasi Momentku');
        $email->setMessage($e['kode']);
        
        $email->send();
    }
    //test
    public function clientTest(){
        $n = "Fajar";
        $e = "mrfajar.official@gmail.com";
        $w = "123";
        $k = 771014;
        $d = array('nam'=>$n,'ema'=>$e,'wha'=>$w);
        //$d = array('name'=>'rfcumi','email'=>'rf.cumi@gmail.com','whatsapp'=>'11','kode'=>876673);
        
        $model      = new SClient();
        //$data       = $model->verifikasi($d);
        //$data       = $model->getPIN($d);
        $data       = $model->validation($d);
        //$data       = $model->addClientTemp($d);
        //$data       = $this->clientValidasi($d);
        //$data       = $model->checkEmail($d);
        //$data       = $this->sendmail($d);
        echo json_encode($data);
    }
    public function testAJAX(){
        $p = array('info'=>$_POST['nam']);
        echo json_encode($p);
    }
}
