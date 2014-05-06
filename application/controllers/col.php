<?php

class col extends CI_Controller {

	public function __construct(){
		
		parent::__construct();
		
		$this->load->helper(array('form', 'url'));

		$this->load->model("Psp");
		
		}
	
	########## แสดงหน้าหลัก  ##########
	function index(){
		//$this->load->view('test');
		
		$dataFile = $this->Psp->getfile();//เริ่มนับบรรทัด
		//print_r($dataFile);
		//print_r(str_replace("//","world",$dataFile));
		//$cars=array("Volvo","BMW","Toyota");
		$numRowAll = count($dataFile);//บรรทัดทั้งหมด
		//$numRowAll = count($cars);//บรรทัดทั้งหมด
		$data['numRowAll'] = $numRowAll;
		$numRowComment = 0;
		$check = 0;
		//$dataComment = explode(" ",$dataFile);
		
			//$x = chunk_split($dataFile,1,"...");
			//print_r($x);
			$e = 0;//เช็ค /* ......*/
			
			foreach($dataFile  as $textss)
			{
			$taps = " ";
			$texts = $taps.$textss;
					
					 $i =0;
					 //$e = 0;
					// $o = 0;
					if(strpos($texts,'//')){
						$i = 1;
						
					}
					if(strpos($texts,"/*")){//เช็คเริ่ม /*
						$e = 1;
					}
					
					
					
					if ($i > 0)
						{
							$numRowComment = $numRowComment +1;
						}
						
					if ($e > 0)
						{
							$check = $check +1;
						}
					if(strpos($texts,"*/")){//เช็คจบ */
						$e = 0;
					}
			}
		
		$data['commentValue'] = $numRowComment + $check;
		$data['codeValue'] = $numRowAll - ($numRowComment + $check);
		$this->load->view('count', $data);		
	}
}
?>