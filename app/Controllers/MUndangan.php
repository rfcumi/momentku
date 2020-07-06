<?php namespace App\Controllers;
      use App\Models\M_client;
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
        echo view('templates/MFooter',$data);
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
        $e = "rf.cumi@gmail.com";
        $w = "999";
        $k = 771014;
        $d = array('name'=>$n,'email'=>$e,'whatsapp'=>$w,'kode'=>$k);
        //$d = array('name'=>'rfcumi','email'=>'rf.cumi@gmail.com','whatsapp'=>'11','kode'=>876673);
        
        $model      = new M_client();
        //$data       = $this->sendmail($d);
        //$data       = $model->verifikasi($d);
        //$data       = $model->getPIN($d);
        //$data       = $model->validasi($d);
        //$data       = $model->add($d);
        $data       = $this->clientValidasi($d);
    }
}
