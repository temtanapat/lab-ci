<?php
/*#####################################################################
*
* By :: Tanapat Limsombat 552535002
* Responsibility :: Model
* Create Date :: 29/04/2557
*
* Function :: 1.getFile() - read txt file and send array to controller
*			  2.browse() - find txt file read & convert to array
*
*
*
######################################################################*/

class Psp extends CI_Model {

	function __construct()
		{
			parent::__construct();
		}

	function getFile()//เรียกใช้งานไฟล์   txt จากโฟลเดอร์ที่เก็บไฟล์ไว้
	{
	$fp = file("Lab0-testcase.php");//อ่านไฟล์ Lab0-testcase.php เรียกมา
	return $fp;//ส่งค่ากลั
	}

	function browse($filename)
	{
	$data['filedata'] = fopen($filename,'r');//กำหนดให้ข้อมูลอยู่ในรูปแบบของ array และใช้คำสั่ง fopen ในการอ่านไฟล์เอกสาร
	return($data);//ส่งค่า array กลับ
	}

}
?>
