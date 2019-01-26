<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('customers.index')->with([
            'customers' => Customer::all()
        ]);
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $last = Customer::orderBy('id','DESC')->first();
        $value = ($last->id) + 1;
        // $value = ($id+1);

        $code =  "CU" . $formatted_value = sprintf("%08d", $value);

        $found = Customer::orderBy('created_at','desc')->where('code',$code)->get();
        if( count($found) > 0)
        {
            return $this->create();
        }    

        return view('customers.create')->withCode($code);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'name'=>'require'
        // ]);

        $customer = new Customer();
        $customer->name = $request->name;
        $customer->address = $request->address;
        $customer->code = $request->code;
        $customer->country = $request->country;
        $customer->city = $request->city;
        $customer->fax = $request->fax;
        $customer->facebook = $request->facebook;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->note = $request->note;
        $customer->debit = $request->debit;
        $customer->credit = $request->credit;
        $customer->balance = $request->balance;
        $customer->status = $request->status;
        $customer->save();

        \Session::flash('message','Created successfully');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('customers.edit')->with([
            'customer'=> $customer
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        // $this->validate($request,[
        //     'name'=>'require'
        // ]);
        $customer->update($request->all());

        \Session::flash('message','Updated successfully');
        return redirect()->back();
    }

    public function confirm(Customer $customer)
    {
        return view('customers.confirm')->with([
            'customer' => $customer
        ]);
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        if($customer->forceDelete()){
            $customer->delete();
        }

        \Session::flash('message','Deleted successfully');
        return redirect()->back();
    }
}
