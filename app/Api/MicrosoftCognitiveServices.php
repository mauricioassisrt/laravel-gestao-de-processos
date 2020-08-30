<?php
namespace App\Api; 

class MicrosoftCognitiveServices extends HttpClient{

    public function __construct()
    {
        $url = config('microsoftcognitive.url');
       
        $base_uri = "{$url}/face/v1.0";

        $headers = [
            'Ocp-Apim-Subscription-Key' => config('microsoftcognitive.subscription_key')
        ];

        parent::__construct($base_uri, $headers);
    }

    public function compareFaces($facesId)
    {
       
        $response = $this->post("verify",$facesId);
        
        if ($response) {
            return $response;
        }

        return null;                
    }

    public function facesDetect($url_image)
    {
        $response = $this->post("detect",["url"=>$url_image]);

        if ($response) {
            return $response;
        }

        return null; 
    }

    public function getFaceId($url_image)
    {
        $response = $this->post("detect",["url"=>$url_image]);

        if ($response) {
            $count = count($response);
            if($count>2){
                 return null;
            }
            return $response;
        }

        return null; 
    }
    
    public function findSimilars(){
         
    }

}