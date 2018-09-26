<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{
	function __construct() 
	{
		parent::__construct();

		// 기본 라이브러리 호출
		date_default_timezone_set("Asia/Seoul");
		$this->load->database();
		$this->load->helper('url');
		$this->load->helper('date');              
	}

	public function index()
	{                 
		$this->load->view('admin_v');		
	}
	public function vPage($boardName = '')
	{
		if ($boardName)
		{
			$sql = "select * from $boardName";			
			$query = $this->db->query($sql);
			$result = array(
				'boardName' => $boardName,
				'data' => $query->result_array() 
			);
			$this->load->view('page_v',$result);
		}
		else 
		{
			echo "페이지가 바르지 않습니다.";
		}
	}
	public function vInv($boardName = '')
	{
		if ($boardName)
		{
			$sql = "select * from $boardName";
			$query = $this->db->query($sql);
			$result = array(
				'boardName' => $boardName,
				'data' => $query->result_array() 
			);
			$this->load->view('inv_v', $result);
		}
	}
	public function btnSubmit()
	{
		$name = $this->input->post('name',true);
		$bdName = $this->input->post('bdName',true);
		$contents = $this->input->post('contents',true);
		$contents = str_replace("\r\n","<br>",$contents);

		$data = array(
			'name' => $name,
			'contents' => $contents,
			'modified' => date('Y-m-d H:i:s',time()) 
		);
		$this->db->set($data);
		$this->db->insert($bdName);
		redirect("Main/vInv/$bdName");
	}

	public function btnCreateApp()
	{
		$name = $this->input->post('name',true);
		$bdName = $this->input->post('board_name',true);
		$date = $this->input->post('date',true);
		$this->btnCreateDB($bdName, $name, $date);
	}


	public function btnCreateDB($boardName, $name, $date)
	{
		$board = 
		"CREATE TABLE IF NOT EXISTS {$boardName} (
			no int(10) NULL AUTO_INCREMENT,
			name varchar(40) NOT NULL,
			contents text NOT NULL,
			modified datetime NOT NULL,
			password varchar(40) NOT NULL,
			ip_address varchar(45) NOT NULL,
			PRIMARY KEY(no)
		)";

		$this->db->query($board);

		// 0번 데이터 스틸
		$firstData = array(
			'no' => 1,
			'name' => $name,
			'modified' => $date
		);
		$this->db->set($firstData);
		$this->db->insert($boardName);
		redirect("Main/vInv/$boardName");
	}    
}
