<?php

namespace App\Notifications\Dashboard;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use NotificationChannels\Telegram\TelegramMessage;

class TelegramNewClient extends Notification
{
    protected $companyName;
    protected $clientName;
    protected $email;
    protected $address;
    protected $phoneOne;
    protected $tele_id;

    public function __construct($companyName, $clientName, $email, $address, $phoneOne, $tele_id)
    {
        $this->companyName = $companyName;
        $this->clientName = $clientName;
        $this->email = $email;
        $this->address = $address;
        $this->phoneOne = $phoneOne;
    }

    public function via($notifiable)
    {
        return [TelegramChannel::class];
    }

    public function toTelegram($notifiable)
    {
        // $url = env('APP_URL').$this->business_name;
        // $registrationId = "#R-" . rand(10, 99);
        // $registration3Id = rand(100, 999);


       return TelegramMessage::create()
       ->to($this->tele_id)
       ->content("*" . 'NEW CLIENT ADDED' . "*\n"
       . "*" .'Company Name: '. $this->companyName . "*\n"
       . "*" .'Client Name: '. $this->clientName . "*\n"
       . "*" .'Email Address: '. $this->email . "*\n"
       . "*" .'Phone Number: '. $this->address . "*\n"
       . "*" .'Address: '. $this->phoneOne . "*\n"
        );
    }
    
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
