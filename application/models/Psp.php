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

	function getFile()//���¡��ҹ���   txt �ҡ����������������
	{
	$fp = file("Lab0-testcase.php");//��ҹ��� Lab0-testcase.php ���¡��
	return $fp;//�觤�ҡ��
	}

	function browse($filename)
	{
	$data['filedata'] = fopen($filename,'r');//��˹���������������ٻẺ�ͧ array ��������� fopen 㹡����ҹ����͡���
	return($data);//�觤�� array ��Ѻ
	}

}
?>
