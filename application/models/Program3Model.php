<?php
/*#####################################################################
*
* By :: Tanapat Limsombat 552535002
* Responsibility :: Model
* Create Date :: 03/05/2557
*
* Function :: 1.getData()
*			  2.findByKeyword()
*			  3.findByPK()
*			  4.findByAll()
*
######################################################################*/
class Program3Model extends CI_Model {

var $empId;
var $empLname;
var $dateIn;
var $team;
var $salary;
var $saleAmount;

function __construct()
	{
		$this->load->database();
		parent::__construct();
	}

	###### SET : empId () ######
	function setEmpId($empId)
	{
		$this->empId = $empId;
	}

	###### GET : empId () ######
	function getEmpId()
	{
		return $this->empId;
	}

	###### SET : empLname () ######
	function setEmpLname($empLname)
	{
		$this->empLname = $empLname;
	}

	###### GET : empLname () ######
	function getEmpLname()
	{
		return $this->empLname;
	}

	###### SET : dateIn () ######
	function setDateIn($dateIn)
	{
		$this->dateIn = $dateIn;
	}

	###### GET : dateIn () ######
	function getDateIn()
	{
		return $this->dateIn;
	}

	###### SET : team () ######
	function setTeam($team)
	{
		$this->team = $team;
	}

	###### GET : team () ######
	function getTeam()
	{
		return $this->team;
	}

	###### SET : salary () ######
	function setSalary($salary)
	{
		$this->salary = $salary;
	}

	###### GET : salary () ######
	function getSalary()
	{
		return $this->salary;
	}

	###### SET : saleAmount () ######
	function setSaleAmount($saleAmount)
	{
		$this->saleAmount = $saleAmount;
	}

	###### GET : saleAmount () ######
	function getSaleAmount()
	{
		return $this->saleAmount;
	}

	
	function getData()
			{
				$this->db->select('');
				$query = $this->db->get('tbl_data');
				return $query;

			}

	function findByKeyword($idProduct)
	{
		## แบบ LIKE ##
		$this->db->like('empLname', $empLname);		
		$query = $this->db->get('tbl_data');
		
		return $query;
	}

	function findByPK($empId)
	{
		$where = array
		(
			'empid'	=> $this->getEmpId()
		);
		$query = $this->db->get('tbl_data', $where);
		return $query;
	}

	function findByAll()
	{
		$query = $this->db->get('tbl_data');
		return $query;
	}




?>