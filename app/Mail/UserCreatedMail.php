<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserCreatedMail extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var User
     */
    public $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function build()
    {
        return $this
            ->subject("Cadastro realizado com sucesso!")
            ->view('emails.user_created');
    }
}
