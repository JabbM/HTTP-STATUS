<?php
namespace controllers\publics;

class Index extends \Controller
{
	/**
	 * Home Page
	 */	

	function console_log( $data ){
		echo '<script>';
		echo 'console.log('. json_encode( $data ) .')';
		echo '</script>';
	  }


	public function home()
	{
		return $this->render("home");
	}

	public function login()
	{
		$email = $_POST["email"] ?? false;
		$passwd = $_POST["password"] ?? false;

		if($_SESSION["admin"]){
			echo "caca";
			header("location: ./home");
		}
		elseif (!$email || !$passwd)
        {
			echo "caca";
            return $this->render('login', [
                "success" => true
            ]);
        }
		else {
			$admin = $this->models_m_httpstatus->login($email, $passwd);
			if (!$admin)
            {
				echo "caca";
                return $this->render('login', [
                    "success" => false
                ]);
            }
			else {
				echo "caca";
				session_start;
				$_SESSION['admin'] = $admin;
                header('location: ./home');
			}
		}
	}

    /**
     * Page showing values, with some optionnal
     * @param string $first_value : First value to show
     * @param int $second_value : Second value to show
	 */
	public function show_value(string $first_value, ?int $second_value = null)
	{
		return $this->render('index/show-value', ['first_value' => $first_value, 'second_value' => $second_value]);
	}
	
}