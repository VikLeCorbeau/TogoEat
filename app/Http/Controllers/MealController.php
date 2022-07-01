<?php

namespace App\Http\Controllers;

use session;
use App\Models\Meal;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;

class MealController extends Controller
{

    private $current_order;
    //session(['products' => $products]);
    //config(['app.timezone' => 'America/Chicago']);
    /**
     * Added
     * Display list view with all databases entry
     *
     * @return \Illuminate\View\View
     *
     */
    public function show_meals(){
        $data = Meal::all();
        $data_orders = Order::all();
        //$this->current_order = 0;
        //dd($this->current_order);
        //$this->current_order = '';
        return view('list_meals', compact(['data'],['data_orders']));
    }

    public function edit(int $id)
     {
         $data= Meal::find($id);
         return view ('edit_meals', ['data'=>$data]);
     } 


    /**
     * Handle an incoming database change request
     * added
     * 
     * 
     * @param $request
     * 
     * @return \resources\views\list
     */
     public function update(Request $request)
     {
         $data=Meal::find($request->id);
        //dd(request()->all());    
         $data->available=$request->available;                                                                                                                                                      
         $data->name=$request->name;
         $data->type=$request->type;
         //$data->image_path=$request->image_path;
         $data->description=$request->description;                                                                                                                                                                                                                                                                                                                  
         $data->price=$request->price;
         $data->save();
         return redirect('list_meals');
     }

    public function create_order()
    {
        Order::create(
            [
                'status' => 'en préparation',
                'price' => 0,
            ]
        );
        return redirect('list_meals');
    }

    public function current_order(int $id_order)
    {
        //$data = Meal::all();
        //$data_orders = Order::all();
        Order::where('current_order', '=', 1)->update([
            'current_order' => 0
        ]);
        $data = Order::find($id_order);
        //dd($data);
        $data->current_order = TRUE;
        $data->save();
        return redirect('list_meals');
        //$this->current_order = Order::find($id_order)->id;
        //return view ('update_current_order', ['current_order'=>$this->current_order]);
        //dd($this->current_order);
        //View::share('current_order', Order::find($id_order)->id);
        //View::share('current_order', $this->current_order);
        //$current_order = file_get_contents(URL::to('list_meals'));
        //return redirect('list_meals');
        //return $current_order;
        //return view('list_meals');
        //return view('list_meals', compact(['data'],['data_orders']), ['current_order'=> $this->current_order]);
        //  return redirect()->route('meals.show')
        // ->with(['current_order'=> $this->current_order]);
        //return redirect('list_meals', compact(['data'],['data_orders']), ['current_order'=> $current_order]);
        //return redirect('list_meals');
    }

    // public function update_current_order(int $current_order)
    // {
    //     $this->current_order->update();
    //     return redirect('list_meals');
    // }

     public function add_to_order (int $id_meal)
     {
        //get row of roles table where role = role just addded
        $id_order = Order::where('current_order', '=', TRUE)->first()->id;

        $exists = DB::table('order_meal')
        ->whereOrderId($id_order)
        ->whereMealId($id_meal)
        ->count() > 0;

        //dd($exists);
        // $order = DB::table('orders')->where('current_order', '=', 1)->first();
        // $meal = Meal::find($id);
        // $meals = Meal::all();

        //add to pivot table
        DB::table('order_meal')->insert([
            'order_id' => $id_order,
            'meal_id' => $id_meal
        ]);

        // Order::where('current_order', '=', 1)->update([
        //     'price' => 'price' + '$meal->price'
        // ]);
        return redirect('list_meals');
    }
}