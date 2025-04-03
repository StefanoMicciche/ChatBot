<?php
require_once 'chatbotConfig.php';

class Chatbot {
    private $token;
    private $url;

    public function __construct($token){
        $this->token = API_TOKEN;
        $this->url = API_URL;
    }
}

    public function getResponse($message) {
        $data = json_encode([
            'inputs' => $message,
            'parameters' => [
                'max_lenghth' => 200,
                'temperature' => 0.5
            ]])};

    $ch = curl_init($this->url);
    curl_setopt_array($ch, [

        CURLOPT_RETURNTRANSFER => true,
        CURL_OPT_POST => true,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => [
            'Authorization: Bearer '. $this->token,
            'Content-Type: application/json'
        ]
        ]);

        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response, true);
?>