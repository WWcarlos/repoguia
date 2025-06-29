<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return redirect()->to(RouteServiceProvider::redirectByRole($user));
    }
}
