<?php
class HelloAPIModule extends APIModule {

	protected $id = 'hello';
	protected $base_url = "http://142.103.25.37/api/sensors/";
    protected $user = "coffeejack";
    protected $key_id = "9c4389eae0f94004";
    protected $key_pw = "af092d74889edf2c";
    protected $android_id = "cce1d58557e202ec";
    
	protected function initializeForCommand(){

		switch($this->command){

			case 'getdata':
				//echo "get data!";
                $probe = $this->getArg('probe',0);
				$response = $this->getData($probe."_".$this->android_id);
				//var_dump($response);
				$this->setResponse($response);
				$this->setResponseVersion(1);
			break;

            case 'sendemail':

                $to = 'ubcvincenttsui@gmail.com';
                $subject = "Elder Tracker Alert!";
                $message = "This is an alert email from Elder Tracker!  It appears target has exceeded allowable radius!";
                $response = mail($to, $subject, $message);
                $this->setResponse($response);
                $this->setResponseVersion(1);

            break;
		}
	}

	private function getData($probe){
        // create curl resource
        //$probe="locationprobe_cce1d58557e202ec";
        $ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, $this->base_url.$this->user.".".$probe."/data");

        //additional params
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_USERPWD, $this->key_id . ":" . $this->key_pw);

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $response = curl_exec($ch);

        // close curl resource to free up system resources
        curl_close($ch); 

        return $response;
    }
}