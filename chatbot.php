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
?>