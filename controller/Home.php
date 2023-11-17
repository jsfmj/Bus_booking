
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	public function __construct()
	{
	parent::__construct();
  $this->load->helper('url');
	
	$this->load->database();
	
	$this->load->model('logi');
	}
	public function data()
	{
		
		$this->load->view('login');
	
		if ($this->input->post('reg') == 'register')
		{
		    $data['username']=$this->input->post('username');
			$data['email']=$this->input->post('email');
      $data['password']=$this->input->post('password');
			$response=$this->logi->saverecords($data);
			if($response==true){
        
			}
			else{
					echo "Insert error !";
			}
		}
    elseif ($this->input->post('logg') == 'loggi')
        {
           
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            
            $login_result = $this->logi->checkLogin($email, $password);

            if ($login_result) {
                $user_data = array(
                    'email' => $login_result->email,
                    'password' => $login_result->password,
                    
                );
                foreach ($user_data as $key => $value) {
                    setcookie($key, $value, time() + (86400 * 30), "/"); 
                }
                redirect('Home/search');
            } else {
                echo "Invalid login credentials!";
            }
        }
    

	}
public function index()
{
    $this->load->view('home1');
}
public function search()
{
    $this->load->view('search');
}
public function serch()
    {
        $source = $this->input->post('source');
        $destination = $this->input->post('dstn');
        $date = $this->input->post('journey_date');

        $data['buses'] = $this->logi->getAvailableBuses($source, $destination, $date);

        
        $this->load->view('bus', $data);
    }

public function getSeats()
{
   
    $bus_name = $this->input->post('bus_name');

    // Fetch seat information for the selected bus from the database
    $data['seats'] = $this->logi->getSeatsByBus($bus_name);

    // Pass the $data array to the view
    $this->load->view('seats', $data);
}
public function seats()
{
    $this->load->view('seats');
}
public function bookSeats()
{
    $selectedSeats = $this->input->post('selectedSeats');
    $bus_name = $this->input->post('bus_name');

    // Update the database to mark selected seats as booked
    $this->logi->bookSelectedSeats($bus_name, $selectedSeats);

    // Redirect to a success page or display a success message
    redirect('Home/confirm');
}
public function confirm()
{
    $this->load->view('confirmation');
}
}

?>