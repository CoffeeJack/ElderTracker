<?php

realpath(dirname(__FILE__).'/../site/eldertracker/lib/WoTK.php');

class HelloWebModule extends WebModule
{
    protected $id='hello';
    protected $base_url = "http://142.103.25.37/api/sensors/";
    protected $user = "coffeejack";
    protected $key_id = "9c4389eae0f94004";
    protected $key_pw = "af092d74889edf2c";

    protected function initializeForPage() {

      	switch($this->page){

        		case 'index':          

                try{
                    $this->addInternalJavascript('/common/javascript/jquery-1.9.1.js');
                    $this->addInternalJavascript('/common/javascript/common.js');
                    $this->addInternalJavascript('/common/javascript/highcharts.js');
                    $this->addInternalJavascript('/common/javascript/bootstrap.js');
                    $this->addInternalCSS('/common/css/bootstrap.css');
                    $this->addInternalCSS('/common/css/bootstrap-responsive.css');
                    //$this->addExternalJavascript('https://www.google.com/jsapi');

                    $this->assign('foo',$this->getData("locationprobe_cce1d58557e202ec"));  
                }catch(Exception $e){
                    Kurogo::log(LOG_WARNING, $e->getMessage(), "hello", $e->getTrace());
                }
        		break;

        		case 'other':
        			//$wotkit_client = new WoTK("http://wotkit.sensetecnic.com/api/", "eldertracker", "b7617bb4c629b6bd");
        			//$this->assign('message', 'Other!');
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