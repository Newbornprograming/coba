<?php
class About extends Controller{
    public function index(  $nama='Deny',$perkerjaan= 'Dosen', $umur='32'){
        $data['nama'] = $nama;
        $data['perkerjaan'] = $perkerjaan;
        $data['umur'] = $umur;
        $data['title'] = 'About Me';
        $this->view('template/header', $data);
        $this->view('about/index', $data);
        $this->view('template/footer');
    }
    public function page()
    {
        $data['title'] = 'Page';
        $this->view('template/header', $data);
        $this->view('about/page');
        $this->view('template/footer');
    }
}
?>

