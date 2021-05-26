<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Order_status;
use Illuminate\Support\Facades\Log;
use Mail;
use App\Mail\SendNewMail;

class OrderController extends Controller
{
    private $orderValidation = [
        'nome'=>'required|max:100',
        'email'=>'required|max:50',
        'telefono' => 'required',
        'messaggio'=>'required|max:5000',
        'consegna'=>'required|date_format:d/m/Y'
    ];
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        // Log::info('store start');
        $data = $request->all();
        
        $request->validate($this->orderValidation);

        // Log::info('store start 2');
        $newOrder = new Order();
        // Log::info('store start 3');
        $newOrder->fill($data);
        // Log::info('store start 4');
        $newOrder->stato =1;
        
        
        $newOrder->save();
        // Log::info('store1');
        $ordered =$newOrder->save();
        // Log::info('store2');
        // Log::info('store3 : '. $ordered);
        if($ordered){

            Mail::to('customer@mail.it')->send(new SendNewMail($newOrder));
            return redirect()
            ->route('success')
            ->with('message','ordine inviato correttamente');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

   
}
