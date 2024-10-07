<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\OrderRequest;
use App\Http\Requests\RegistrationRequest;
use App\Models\Order;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home()
    {
        return view('home');
    }

    public function registration()
    {
        return view('registration');
    }

    public function registrationPost(RegistrationRequest $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->login = $request->login;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->route('home', ['success' => true])->with(['notAuth' => false]);
    }

    public function login()
    {
        return view('login');
    }

    public function loginPost(LoginRequest $request)
    {
        if(!auth()->attempt($request->validated())){
            return redirect()->route('login', ['auth' => false])->with(['notAuth' => true]);
        } else {
            $request->session()->regenerate();
            return redirect()->route('home', ['success' => true])->with(['notAuth' => false]);
        }
    }

    public function makeOrder()
    {
        return view('makeOrder');
    }

    public function makeOrderPost(OrderRequest $request)
    {
        $order = new Order();

        $order->clientID = auth()->user()->id;
        $order->description = $request->description;
        $order->model = $request->model;
        $order->phone = auth()->user()->phone;
        $order->name = auth()->user()->name;
        $order->status = "Новый";

        $order->save();

        return redirect()->route('home');
    }

    public function myOrders()
    {
        $orders = DB::table('orders')->get();
        $id = auth()->user()->id;

        return view('myOrders', ['orders' => $orders], compact('id'));
    }

    public function admin()
    {
        $orders = DB::table('orders')->get();

        return view('admin', ['orders' => $orders]);
    }

    public function adminPost($id, AdminRequest $request)
    {
        $order = Order::find($id);

        $order->status = $request->changeStatus;

        $order->update();

        return redirect()->route('admin');
    }

    public function about()
    {
        return view('about');
    }
}
