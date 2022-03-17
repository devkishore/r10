<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
		
	}

	public function my()
	{
		$this->load->view('header');
		$this->load->view('my',array('page'=>'my'));
		$this->load->view('footer',array('page'=>'my_active'));
	}



	public function search()
	{
		$this->load->view('header');
		$this->load->view('search',array('page'=>'search'));
		$this->load->view('footer',array('page'=>'search_active'));
	}

	public function home()
	{
		$this->load->view('header');
		$this->load->view('home',array('page'=>'home'));
		$this->load->view('footer',array('page'=>'home_active'));
	}

	public function win()
	{
		$this->load->view('header');
		$this->load->view('win',array('page'=>'win'));
		$this->load->view('footer',array('page'=>'win_active'));
	}


	public function pre($data)
	{
		echo '<pre>';
		print_r($data);
		echo '</pre>';
	}


	public function game()
	{

		$data=[];

		$result = $this->db->query("SELECT TIMESTAMPDIFF(second,NOW(),game_end_at) AS diff FROM `game` WHERE game_end_at >Now() And game_started_at < Now() AND `game_status`=1");
	
		//echo $this->db->last_query();
		if($result->num_rows()>0)
		{
			
			$result	=	$result->row_array();
			$data['diff']=$result['diff']+5;
		}


		//total games

		$this->db->order_by("game_end_at", "desc");
		$this->db->limit(10,0);
		$this->db->where('game_status',2);
		$games = $this->db->get('game');

		if($games->num_rows()>0)
		{
			$data['games'] = $games->result_array();
		
		}


		$this->db->order_by("part_id", "desc");
		$this->db->where("part_win !=","0");
		$this->db->limit(20,0);
		
		$parts = $this->db->get('participant');

		if($parts->num_rows()>0)
		{
			$data['parts'] = $parts->result_array();
		
		}

		

		$this->load->view('header');
		$this->load->view('game',$data);
		$this->load->view('footer',array('page'=>'game_active'));
	}

	public function declare_winner()
	{
		$this->db->where('game_end_at <','Now()',false);
		$this->db->where('game_status',1);
		$result = $this->db->get('game');
		echo $this->db->last_query();
		$this->pre($result);
		if($result->num_rows()>0)
		{
			$results = $result->result_array();
			
		//	$this->pre($results);
			foreach($results as $result)
			{
				
				
				$random	=	rand(1000,5000);
				$lastDigit = $random % 10;
				
				// echo 'radong'.$random;
				// echo '<br>';
				// echo $lastDigit; // 6


				
				$this->db->set('game_price',$random);
				$this->db->set('game_win_no',$lastDigit);
				$this->db->where('game_id',$result['game_id']);
				$this->db->set('game_status',2);
				$this->db->update('game');



				$this->db->where('part_bet_nos not like','%,'.$lastDigit.','.'%');
				$this->db->set('part_win',1);
				$this->db->where('part_game_id',$result['game_id']);
				$this->db->update('participant');
				

				$this->db->where('part_bet_nos like','%,'.$lastDigit.','.'%');
				$this->db->set('part_win',2);
				$this->db->where('part_game_id',$result['game_id']);
				$this->db->update('participant');
			//	echo $this->db->last_query();
			//	$this->
			}
		}
	}


	public function participate ()
	{

		// $this->db->where('game_end_at >','Now()',false);
		// $this->db->where('game_end_at <','Now()',false);
		// $this->db->limit(1,0);
		// $this->db->where('game_status',1);
		// $this->db->where('')
		// $this->db->get()

		$result = $this->db->query("SELECT * FROM `game` LEFT JOIN participant ON game.game_id = participant.part_game_id where game.game_end_at>NOW() and game.game_started_at<NOW()");
	
		if($result->num_rows()>0)
		{
			$result = $result->row_array();
			if($result['part_game_id']=='')
			{

				$numbers = explode(',',$_GET['numbers']);
				$number_string='';
				foreach($numbers as $number)
				{

					if($number!='')
					{
						$number_string = $number_string.','.$number.',';
					}
					
				}


				$this->db->set('part_game_id',$result['game_id']);
			$this->db->set('part_user_id',1);
			$this->db->set('part_bet_nos',$number_string);
			$this->db->set('part_bet_amount',$_GET['betAmount']);
			$this->db->insert('participant');
			echo 1;
			}
			else{
				echo 0;
			}
			
		}else{
			echo 0;
		}




		
	}


	public function cron()
	{

		// game winner selection


		$this->db->where('game_end_at <','Now()',false);
		$this->db->where('game_status',1);
		$result = $this->db->get('game');
		
		if($result->num_rows()>0)
		{
			$results = $result->result_array();
			
		//	$this->pre($results);
			foreach($results as $result)
			{
				
				
				$random	=	rand(1000,5000);
				$lastDigit = $random % 10;
				
				// echo 'radong'.$random;
				// echo '<br>';
				// echo $lastDigit; // 6


				
				$this->db->set('game_price',$random);
				$this->db->set('game_win_no',$lastDigit);
				$this->db->where('game_id',$result['game_id']);
				$this->db->set('game_status',2);
				$this->db->update('game');



				$this->db->where('part_bet_nos not like','%,'.$lastDigit.','.'%');
				$this->db->set('part_win',1);
				$this->db->where('part_game_id',$result['game_id']);
				$this->db->update('participant');
				

				$this->db->where('part_bet_nos like','%,'.$lastDigit.','.'%');
				$this->db->set('part_win',2);
				$this->db->where('part_game_id',$result['game_id']);
				$this->db->update('participant');
			//	echo $this->db->last_query();
			//	$this->
			}
		}
		
		
		

		//game creation starts

		$this->db->order_by("game_end_at", "desc");
		$this->db->limit(1,0);
		$result = $this->db->get('game');
		//$this->pre($this->db);
		//exit; 

		if($result->num_rows()>0)
		{
		//	$this->pre($result->row_array());
			$result = $result->row_array();
			//$this->pre($result);
			$startTime = strtotime( $result['game_end_at'] );
			$endTime = $startTime+55;
			$startTime = date( 'Y-m-d H:i:s', $startTime );
			$endTime = date( 'Y-m-d H:i:s', $endTime );
		//	echo $endTime;
		//	echo $startTime;
			$this->db->set('game_interval',10);
			$this->db->set('game_win_type',1);
			$this->db->set('game_started_at', 'NOW()', FALSE);
			
			$this->db->set('game_end_at', 'DATE_ADD(NOW(), INTERVAL 55 SECOND)', FALSE);
			$this->db->insert('game');
			$insert_id = $this->db->insert_id();

			// $this->db->set('part_game_id',$insert_id);
			// $this->db->set('part_user_id',1);
			// $this->db->set('part_bet_nos',',1,2,3,');
			// $this->db->set('part_bet_amount','200');
			// $this->db->insert('participant');

			
		}
		else{ 
			$this->db->set('game_interval',60);
			$this->db->set('game_win_type',1);
			$this->db->set('game_started_at', 'NOW()', FALSE);
			
			$this->db->set('game_end_at', 'DATE_ADD(NOW(), INTERVAL 55 SECOND)', FALSE);
			$this->db->insert('game');
			$insert_id = $this->db->insert_id();

			// $this->db->set('part_game_id',$insert_id);
			// $this->db->set('part_user_id',1);
			// $this->db->set('part_bet_nos',',1,2,3,');
			// $this->db->set('part_bet_amount','200');
			// $this->db->insert('participant');
		}

		//$this->db->set('300')
	}
}
