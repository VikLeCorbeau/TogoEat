<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function show_orders(){
        $data = Meal::all();
        $data_order = Order::all();
        return view('list_meals', ['orders'=>$data_order]);
    }

    // public function create_order(int $id)
    //  {
    //     $data_meal= Meal::find($id);
    //     Order::create(
    //         [
    //             'name' => 'Dupont',
    //             'email' => 'dupont@la.fr',
    //             'password' => bcrypt('pass'),
    //         ]
    //     );

    //  }

    //  public function order(int $id)
    //  {
    //     $data_meal= Meal::find($id);
    //     Order::create(
    //         [
    //             'name' => 'Dupont',
    //             'email' => 'dupont@la.fr',
    //             'password' => bcrypt('pass'),
    //         ]
    //     );

    //  }
}
