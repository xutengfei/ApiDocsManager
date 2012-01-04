<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
public function __construct()
	{
		parent::__construct();
//		$this->load->helper('url');
//		$this->load->helper('form');
	}
	
	public function index()
	{
//		$data['aa']='SDF';
//		
//	$query = $this->db->get('haha');
//
//	foreach ($query->result() as $row)
//	{
//	    echo $row->id;
//	    echo PHP_EOL;
//	    echo $row->name;
//	}
//	$this->load->view('test_show',$data);

	$filename = "/Users/apple/tmp/csdn/test.txt"; 
  $whattoread = @fopen($filename, "r") or die("Couldn't open file"); 
  
	while($c=fgets($whattoread,1048))
		{ 
			$tmp = array();		 
			$tmpA = explode('#', $c);
			
			$tmp['name']=$tmpA[0];
			$tmp['password']=$tmpA[1];
			$tmp['email']=$tmpA[2];
			var_dump($tmp);
			
//			$this->db->insert('haha',$tmp);
		  echo "</br>";
		  echo "</br>";
		} 
		
	}
}