<?php namespace App\Models;
      use CodeIgniter\Model;

class SClient extends Model{
    public function checkEmail($p){
        $sclient = $this->db->table('sclient');
        $q = $sclient->getWhere(['email' => $p['ema']]);
        $gr = $q->getRow();
        if($gr){return array('nam'=>$gr->name,'ema'=>$gr->email,'wha'=>$gr->whatsapp,'slave'=>TRUE);
        }else{
            //return array('slave'=>FALSE);
            $tclient = $this->db->table('tclient');
            $q = $tclient->getWhere(['email' => $p['ema']]);
            $gr = $q->getRow();
            if($gr){return array('nam'=>$gr->name,'ema'=>$gr->email,'date'=>$gr->date,'sendTo'=>$gr->sendTo,'temp'=>TRUE,'slave'=>FALSE);}else{return array('temp'=>FALSE,'slave'=>FALSE);}
        }        
    }
    public function checkWhatsapp($p){
        $sclient = $this->db->table('sclient');
        $q = $sclient->getWhere(['whatsapp' => $p['wha']]);
        $gr = $q->getRow();
        if($gr){return array('nam'=>$gr->name,'ema'=>$gr->email,'wha'=>$gr->whatsapp,'slave'=>TRUE);}else{return array('slave'=>FALSE);}        
    }
    public function validation($p){
        $p = array_map('strtolower',$p);
        $ce = $this->checkEmail($p);
        $ce = array_map('strtolower',$ce);
        if($ce['slave']){if($ce['wha'] == $p['wha']){if($ce['nam'] == $p['nam']){return array('info'=>'Success');}else{return array('info'=>'Nama anda tidak sesuai dengan data kami');}}else{return array('info'=>'whatsapp anda tidak sesuai dengan data kami');}}
        $cw = $this->checkWhatsapp($p);
        $cw = array_map('strtolower',$cw);
        if($cw['slave']){return array('info'=>'Email anda tidak sesuai dengan data kami');}
        if(!$ce['temp']){$this->addClientTemp($p);}
        return array('info'=>'Cek email anda');
    }
    function addClientTemp($p){
        $di = array('name'=>$p['nam'],'email'=>$p['ema'],'date'=>date('Y-m-d H:i:s'),'sendTo'=>3);
        $this->db->table('tclient')->insert($di);
    }
    /*fix
    public function validasi($p){
        //return array('info'=>'Modal validasi pages'); //test pages
        $sql = $this->getWhere(['whatsapp' => $p['whatsapp']]);
        $r = $sql->getRow();
        if($r){
            $d = array_map('strtolower',array('n'=>$r->name,'e'=>$r->email,'w'=>$r->whatsapp));
            $p = array_map('strtolower',$p);
            return $this->cekWhatsapp($p,$d);
        }else{
            $sql = $this->getWhere(['email' => $p['email']]);
            $r = $sql->getRow();
            if(isset($r)){
                $d = array_map('strtolower',array('e'=>$r->email,'w'=>$r->whatsapp));
                $p = array_map('strtolower',$p);
                return $this->cekEmail($p,$d);
            }
            //return array('info'=>$p['kode']); //test pages
            if($p['kode'] != ''){
                return $this->verifikasi($p);
               //return array('info'=>'form kode ke isi'); //test pages
            }
            return $this->getPIN($p);
        }
    }
    //fix
    public function verifikasi($p){
        $sql = $this->db->table('sendmailtemp')->getWhere(['email'=>$p['email']]);
        $r = $sql->getRow();
        $d = array('dateSend'=>$r->dateSend);
        
        $rpin = $this->encodePIN($p,$d);
        if(substr($d['dateSend'],14,2) >= 01){$m = substr($d['dateSend'],14,2);}else{$m = 60;}
        $encode  = (int)($m/20+1)*substr($p['whatsapp'],-3)+(int)substr($d['dateSend'],17,2);
        
        $dpin = substr($rpin['send'],-1-strlen($encode),strlen($encode));
        $epin = substr($p['kode'],-1-strlen($encode),strlen($encode));
        $success = "success".$dpin." | ".$epin;
        if($dpin == $epin){return array('info'=>$success);}else{return array('info'=>'Kode salah');}
    }
    //fix
    public function getPIN($p){
        $sql = $this->db->table('sendmailtemp')->getWhere(['email'=>$p['email']]);
        $r = $sql->getRow();
        if(empty($r)){
            //return array('info'=>'Data baru (kosong)'); //test pages
            $this->addLogSendEmail($p);
            $sql = $this->db->table('sendmailtemp')->getWhere(['email'=>$p['email']]);
            $r = $sql->getRow();
            $d = array('email'=>$r->email,'dateSend'=>$r->dateSend,'action'=>$r->action);
            $r = $this->encodePIN($p,$d); //sementara
            return array('info'=>'Masukkan KODE yang dikirim ke email anda','send'=>$r['send']);
        }else{
            //return array('info'=>'Data baru (ada)'); //test pages
            $d = array('email'=>$r->email,'dateSend'=>$r->dateSend,'action'=>$r->action);
            if($d['action'] > 1){
                $d['action'] = $d['action']-1;
                $this->updateSendEmail($d);
                
                $sql = $this->db->table('sendmailtemp')->getWhere(['email'=>$p['email']]);
                $r = $sql->getRow();
                $d = array('email'=>$r->email,'dateSend'=>$r->dateSend,'action'=>$r->action);
                $r = $this->encodePIN($p,$d);
                return array('info'=>'Masukkan KODE yang dikirim ke email anda','send'=>$r['send']);
            }else{
                return array('info'=>'Permintaan KODE anda sudah melebihi batas, cobalah kembali esok hari');
            }
        }
    }
    //fix
    function updateSendEmail($d){
        $u = array('dateSend'=>date('Y-m-d H:i:s'),'action'=>$d['action']);
        $sql = $this->db->table('sendmailtemp')->update($u, array('email' => $d['email']));
    }
    //fix
    function encodePIN($p,$d){
        if(substr($d['dateSend'],14,2) >= 01){$m = substr($d['dateSend'],14,2);}else{$m = 60;}
        
        $encode  = (int)($m/20+1)*substr($p['whatsapp'],-3)+(int)substr($d['dateSend'],17,2);
        $random  = mt_rand(100000,999999);
        $pin    = substr($random,0,5-strlen($encode))."".substr($encode,-1)."".substr($encode,0,strlen($encode)-1)."".substr($random,-1);
        return array('send'=>$pin);
        //return array('send'=>$pin." ".$random." ".$encode); 
    }    
    //temporary in here
    public function dropSendEmail(){$this->db->table('sendmailtemp')->truncate();}
    //selanjutnya send email and decode PIN function*/
    

    //testing
    function test($d){
        $sql = $this->db->table('sendmailtemp')->getWhere(['email' => $d['email']]);
    }
    function testArray(){
    }
}