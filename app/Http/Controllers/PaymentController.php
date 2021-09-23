<?php

namespace App\Http\Controllers;

use App\Events\ProductPurchased;
// use App\Notifications\PaymentReceived;
// use Illuminate\Support\Facades\Notification;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('payments.create');
    }

    public function store()
    {
        ProductPurchased::dispatch('toy');

    }
}
