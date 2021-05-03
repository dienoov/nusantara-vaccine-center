<?php

namespace App\Http\Controllers;

use App\Models\User;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function registration(string $name, int $id)
    {
        $logo = base64_encode(file_get_contents(public_path('images/logo-black.png')));

        $user = User::with('vac_center')->where('id', $id)->first();

        $name = ucwords(str_replace('-', ' ', $name));

        if (!$user || $user->name !== $name)
            return response(['message' => 'Not Found'], 404);

        $pdf = PDF::loadView('registration', ['logo' => $logo, 'user' => $user]);
        return $pdf->stream();
    }

    public function vaccination(string $name, int $id)
    {
        $logo = base64_encode(file_get_contents(public_path('images/logo-black.png')));

        $user = User::with('vac_center')->where('id', $id)->first();

        $name = ucwords(str_replace('-', ' ', $name));

        if (!$user || $user->name !== $name)
            return response(['message' => 'Not Found'], 404);

        $pdf = PDF::loadView('vaccination', ['logo' => $logo, 'user' => $user]);
        return $pdf->stream();
    }
}
