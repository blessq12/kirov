<?php
namespace App\Notification;

class Telegram
{
    protected $url = '';
    protected $token;
    protected $receipient;

    public function __construct(){
        $this->token = env('TELEGRAM_BOT_TOKEN');
        $this->receipient = env('TELEGRAM_RECEIPIENT');
        $this->prepareLink();
    }
    protected function prepareLink(){
        $this->url = "https://api.telegram.org/bot{$this->token}/sendMessage?chat_id={$this->receipient}&text=";
    }
    public function sendNotification( array $data ){

        $message = '';
        $message .= "Имя: {$data['name']} \n\r";
        $message .= "Телефон: {$data['tel']} \n\r";
        if (isset($data['message'])){
            $message .= "{$data['message']} \n\r";
        }
        $request = $this->url . urlencode($message);

        if (file_get_contents($request) === FALSE){
            return response()->json(['status' => false, 'message' => 'send error'], 500);
        }
        
        return response()->json(['status' => true, 'message' => 'ok'], 200);
    }
}
