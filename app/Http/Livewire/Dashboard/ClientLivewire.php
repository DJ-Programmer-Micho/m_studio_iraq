<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Client;
use Livewire\Component;
use Illuminate\Support\Facades\Notification;
use App\Notifications\Dashboard\TelegramNewClient;

class ClientLivewire extends Component
{

    public $companyName;
    public $clientName;
    public $email;
    public $address;
    public $city;
    public $country;
    public $zipcode;
    public $website;
    public $phoneOne;
    public $phoneTwo;

    public $tele_id;
    public $telegram_channel_status;

    public function mount(){
        $this->telegram_channel_status = null;
        $this->tele_id = null;
    } // END FUNCTION OF PAGE LOAD


    protected function rules()
    {
        $rules = [];
        $rules['companyName'] = ['required'];
        $rules['clientName'] = ['required'];
        $rules['email'] = ['required'];
        $rules['address'] = ['required'];
        $rules['city'] = ['required'];
        $rules['country'] = ['required'];
        $rules['zipcode'] = ['required'];
        $rules['phoneOne'] = ['required'];
        return $rules;
    } // END FUNCTION OF Rules

    public function addClient(){
        $validatedData = $this->validate();

        $client = Client::create([
            'companyName' => $validatedData['companyName'],
            'clientName' => $validatedData['clientName'],
            'email' => $validatedData['email'],
            'address' => $validatedData['address'],
            'city' => $validatedData['city'],
            'country' => $validatedData['country'],
            'zipcode' => $this->zipcode,
            'website' => $validatedData['website'],
            'phoneOne' => $validatedData['phoneOne'],
            'phoneTwo' => $this->phoneTwo,
        ]);

        if($this->telegram_channel_status == 1){
            try{
                Notification::route('toTelegram', null)
                ->notify(new TelegramNewClient(
                    $validatedData['companyName'],
                    $validatedData['clientName'],
                    $validatedData['email'],
                    $validatedData['address'],
                    $validatedData['phoneOne'],
                    $this->tele_id
                ));
                $this->dispatchBrowserEvent('alert', ['type' => 'success',  'message' => __('Notification Send Successfully')]);
            }  catch (\Exception $e) {
                $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => __('An error occurred while sending Notification.')]);
            }
        }
    } // END FUNCTION OF PAGE LOAD

    
    public function editClient(){

    } // END FUNCTION OF PAGE LOAD

    
    public function updateClient(){

    } // END FUNCTION OF PAGE LOAD


    public function deleteClient(){

    } // END FUNCTION OF PAGE LOAD

    public function closeModal(){
        $this->companyName = '';
        $this->clientName = '';
        $this->email = '';
        $this->address = '';
        $this->city = '';
        $this->country = '';
        $this->zipcode = '';
        $this->website = '';
        $this->phoneOne = '';
        $this->phoneTwo = '';
    } // END FUNCTION OF PAGE LOAD


    public function render()
    {
        return view('livewire.client-table');
    } // END FUNCTION OF RENDER
}