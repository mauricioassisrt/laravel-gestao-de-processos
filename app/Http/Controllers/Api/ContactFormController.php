<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\ContactFormRequest;
use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Notifications\ContactForm;
use Illuminate\Support\Facades\Notification;

class ContactFormController extends Controller
{
    public function store(ContactFormRequest $request)
    {
        $admins = User::where('role_id', Role::ADMIN)->get();

        Notification::send($admins, new ContactForm($request->all()));

        return response()->json([
            'message' => "Mensagem enviada!"
        ]);
    }
}
