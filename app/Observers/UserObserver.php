<?php

namespace App\Observers;

use App\User;
use Illuminate\Support\Facades\Http;
use PhpParser\Node\Expr\FuncCall;

class UserObserver
{
    /**
     * Handle the user "created" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function created(User $user)
    {
        $clientStatus = $this->checkUser($user);
        if ($clientStatus->errorCode == 406) {
            $response = $this->smsProvider($user->phone_number, 1);
            $clientStatus = json_decode($response->body());
            $user->update([
                'old_status' => $clientStatus->errorCode,
                'verification_code' => $clientStatus->data
            ]);
            $this->forceToSubsribe($user);
        } else {

            $sendCode = $this->sendCode($user);
            $user->update([
                'status' => $sendCode->errorCode,
                'verification_code' => $sendCode->data
            ]);
        }
    }
    private function checkUser($user)
    {
        $response = $this->smsProvider($user->phone_number, 1);
        $clientStatus = json_decode($response->body());
        return $clientStatus;
    }
    private function forceToSubsribe($user)
    {

        $this->smsProvider($user->phone_number, 3);
    }
    private function sendCode($user)
    {
        $response = $this->smsProvider($user->phone_number, 2);
        $status = json_decode($response->body());
        return $status;
    }
    private function smsProvider($phoneNumber, $status)
    {

        $response = Http::withHeaders([
            'Service' => config('app.sms_tokens')
        ])->post(
            config('app.sms_url'),
            [
                'number' => $phoneNumber,
                'status' => $status
            ]
        );
        return  $response;
    }

    /**
     * Handle the user "updated" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        //
    }

    /**
     * Handle the user "deleted" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        //
    }

    /**
     * Handle the user "restored" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the user "force deleted" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}
