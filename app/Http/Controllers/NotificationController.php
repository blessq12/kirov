<?php

namespace App\Http\Controllers;

use App\Http\Requests\TelegramRequest;
use Illuminate\Http\Request;
use App\Notification\Telegram;

class NotificationController extends Controller
{
    protected $telegram;
    public function __construct(){
        $this->telegram = new Telegram();
    }

    public function notifyTelegram(TelegramRequest $request){
        return $this->telegram->sendNotification($request->validated());
    }
}
