<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user()->load('role');

        if ($user->role->name  === 'MSP') {
            return inertia('Dashboard/MSP/Index', [
                'auth' => ['user' => $user],
                'success' => session('success'),
            ]);
        } else {
            return inertia('Dashboard/Product/Index', [
                'auth' => ['user' => $user],
                'success' => session('success'),
            ]);
        }
    }
}
