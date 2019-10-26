<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
		$this->settings_model->get_settings();  
		$this->v_counter->insert_visitor();   
	}
	public function index()
	{
		$data["module_name"] = strtolower($this->router->fetch_class());
		$data["page"] = strtolower($this->router->fetch_class());
		$data["about_us"] = $this->db->get("dynamic_settings")->row();
		$this->load->view('template/header.php',$data);
		$this->load->view('about_us_view');
		$this->load->view('template/footer.php',$data);
	}
    public function send_contact_us()
	{
		$session = $this->session->userdata('submission');

		if(!empty($session))
		{
			if($session ==99999)
			{
				echo "Max submission reached. Limit is only 2 submissions per 2 hours";
				die();
			}
			$this->session->set_userdata("submission",$this->session->userdata('submission') + 1);   
		}else{
	 
			 $this->session->set_userdata("submission",1);     
		}  

		$to = CONTACT_US_EMAIL_ADDRESS;
		$body = $this->input->post("body");
		$subject = "Contact Us Response";
		$emailer_name = $this->input->post("emailer_name");
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,base_url("emailer/send_email.php"));
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS,"emailer_name=$emailer_name&to=$to&body=$body&subject=$subject&attachment="."&others=");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$server_output = curl_exec ($ch);

		curl_close ($ch);
		
		$to = $this->input->post("to");
		$body = CONTACT_US_BODY_REPLY;
		$subject = CONTACT_US_SUBJECT_REPLY;
		$emailer_name = "OSI Mailer";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,base_url("emailer/send_email.php"));
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS,"emailer_name=$emailer_name&to=$to&body=$body&subject=$subject&attachment="."&others=");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		echo $server_output = curl_exec ($ch);

		curl_close ($ch);

		$this->db->query("UPDATE submissions_counter SET contact_us = contact_us + 1");
		
		  
	}

}
