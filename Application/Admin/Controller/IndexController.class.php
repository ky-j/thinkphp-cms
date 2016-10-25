<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller {
    public function index() {
        // if(!(session('adminuser'))){
        //     $this->redirect('/thinkphp-cms/admin.php?c=login');
        // }
        //$this->redirect('http://localhost/thinkphp-cms/admin.php?c=login');
        //print_r(session('adminUser'));
        $this->webname = C('WEBNAME');
        $this->display();
    }

    public function welcome() {
        $this->display();
    }
}
