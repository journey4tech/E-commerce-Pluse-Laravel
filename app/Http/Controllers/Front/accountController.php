<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\addressRequest;
use App\Models\Order;
use App\User;
use Illuminate\Http\Request;

class accountController extends Controller
{
    private $user;
    private $order;

    public function __construct()
    {
//        $this->middleware('auth');
        $this->user = new User();
        $this->order = new Order();
    }

    /**
     *  show profile page.
     *
     * @return view
     */
    public function profile()
    {
        $user = $this->user->findOrFail(auth()->id());
        $address = $user->address;
        return view('Front.account.profilePanel',compact('user','address'));
    }

    /**
     *  show orders of user.
     *
     * @return view
     */
    public function myOrders()
    {
        $user = $this->user->findOrFail(auth()->id());
        $orders = $user->orders;
        return view('Front.account.myOrders',compact('orders'));
    }

    /**
     *  show edit user Address page.
     *
     * @return view
     */
    public function editAddress()
    {
        $address = $this->user->findOrFail(auth()->id())->address;
        return view('Front.account.editAddress',compact('address'));
    }

    /**
     *  show edit page order Address.
     *
     * @param int $id
     * @param  $request
     * @return \Illuminate\Http\Response
     */
    public function editOrderAddress($id)
    {
        if (ctype_digit($id)){
            $order = $this->order->findOrFail($id,['order_id','user_id']);
            //check that the order is own to auth user
            $this->checkOrderUserId($order->user_id);
            $address = $order->address;
            $order_id = $order->order_id;
            return view('Front.account.editAddress',compact('address','order_id'));
        }
    }

    /**
     *  updating user Address and order address.
     *
     * @param int $id
     * @param  addressRequest $request
     * @return \Illuminate\Http\Response
     */
    public function updateAddress(addressRequest $request,int $id)
    {
        if (ctype_digit($id)) {
            if ($order_id = $request->input('order_id')){
                $order = $this->order->findOrFail($order_id,['order_id','user_id']);
                $this->checkOrderUserId($order->user_id);
//                $order->address()->updateOrCreate($request->except('_token','_method'));
                //if order has address then update it if not create
                if ($order->address){
                    $order->address->fill($request->except('_token'));
                    $order->save();
                }else{
                    $order->address()->create($request->except('_token'));
                }
            }else{
                $user = $this->user->findOrFail($id)->address->fill($request->except('_token'));
                $user->save();
            }

            return response()->json(['success' => 'ok']);
        }
    }


    /**
     *  cancel order from user panel.
     *
     * @param int $id
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function cancelOrder(Request $request)
    {
        if (ctype_digit($id = $request->input('order_id'))){
            $order = $this->order->findOrFail($id,['order_id','user_id']);
            $this->checkOrderUserId($order->user_id);
            $order->update(['order_status' => 5]);
            return response()->json(['success' => 'ok']);
        }
    }

    /**
     *  check that the order is own to auth user
     *
     * @param int $user_id = $order->user_id
     * @return boolean
     */
    private function checkOrderUserId(int $user_id)
    {
        if ($user_id !== auth()->id() ){
            return abort(404);
        }
    }



}