<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class File_get extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }

	public function index()
	{
	    $file = base_url('/docs/test.txt');
        $handle = fopen($file, 'r');
        while(!feof($handle)){
            echo fgets($handle, 1024).'|<br>';
        }
        fclose($handle);
//        $content = file_get_contents($file);
//        print_r($content);
	}
}