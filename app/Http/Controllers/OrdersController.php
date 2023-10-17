<?php

namespace App\Http\Controllers;

use App\Models\DesignFormats;
use App\Models\Order;
use App\Models\OrderSizes;
use App\Models\OrderDesignColors;
use App\Models\OrderGarrmentTypes;
use App\Models\SpecialtyElements;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(){
        return view('orders.place-order');
    }

    public function store(Request $request){
        $order = new Order();
        $colors = $request->color;
        $sizes = $request->size;
        $garrmentTypes = $request->order_garrment_type;
        $designFormats = $request->designFormats;
        $specialty = $request->specialty;
    //    dd($request); 
        $order->design_name = $request->design_name;
        $order->order_type = $request->order_type;
        $order->comments = $request->comments;
        $order->order_by = $request->order_by;
        $order->order_by = $request->user()->id;  
        if($order->save()){ 
            if ($colors){
                foreach($colors as $color){
                    $colorObj = new OrderDesignColors();
                    $colorObj->order_id = $order->id;
                    $colorObj->color = $color;
                    $colorObj->datetime = date('Y-m-d H:i:s');
                    $colorObj->save();
                }
            }
            // -----------------------
            if ($sizes){
                foreach($sizes as $size){
                    $sizeObj = new OrderSizes();
                    $sizeObj->order_id = $order->id;
                    $sizeObj->size = $size;
                    $sizeObj->datetime = date('Y-m-d H:i:s');
                    $sizeObj->save();
                }
            }
            // -----------------------
            if ($designFormats){
                foreach($designFormats as $row){
                    $designFormatObj = new DesignFormats();
                    $designFormatObj->order_id = $order->id;
                    $designFormatObj->design_format =$order->id; 
                    $designFormatObj->save();
                }
            }
            // -----------------------
            if ($garrmentTypes){
                foreach($garrmentTypes as $garrmentType){ 
                    $obj = new OrderGarrmentTypes();
                    $obj->order_id = $order->id;
                    $obj->garment_type = $garrmentType;
                    $obj->datetime = date('Y-m-d H:i:s');
                    $obj->save();
                }
            }
            // -----------------------
            if ($specialty){
                foreach($specialty as $row){ 
                    $obj = new SpecialtyElements();
                    $obj->user_id = $request->user()->id;
                    $obj->order_id = $order->id;
                    $obj->specialty = $row;
                    $obj->datetime = date('Y-m-d H:i:s');
                    $obj->save();
                }
            } 
            // -----------------------
            return back();
        } 
    }

    
}
