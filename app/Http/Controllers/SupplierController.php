<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('suppliers.index')->with([
            'suppliers' => Supplier::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $last = Supplier::orderBy('id','DESC')->first();
        $value = ($last->id) + 1;

        $code =  "SUP" . $formatted_value = sprintf("%08d", $value);

        $found = Supplier::orderBy('created_at','desc')->where('code',$code)->get();
        if($found->count() > 0)
        {
            return $this->create();
        }    

        return view('suppliers.create')->withCode($code);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $supplier = new Supplier();
        $supplier->name = $request->name;
        $supplier->address = $request->address;
        $supplier->code = $request->code;
        $supplier->country = $request->country;
        $supplier->city = $request->city;
        $supplier->fax = $request->fax;
        $supplier->facebook = $request->facebook;
        $supplier->email = $request->email;
        $supplier->phone = $request->phone;
        $supplier->note = $request->note;
        $supplier->debit = $request->debit;
        $supplier->credit = $request->credit;
        $supplier->balance = $request->balance;
        // $supplier->status = $request->status;
        $supplier->save();

        \Session::flash('message','Created successfully');

        return redirect()->back();
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
    public function edit(Supplier $supplier)
    {
        return view('suppliers.edit')->with([
            'supplier'=> $supplier
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Supplier $supplier)
    {
                // $this->validate($request,[
        //     'name'=>'require'
        // ]);

        $supplier->update([$request->all]);
        // $supplier->name = $request->name;
        // $supplier->address = $request->address;
        // $supplier->code = $request->code;
        // $supplier->country = $request->country;
        // $supplier->city = $request->city;
        // $supplier->fax = $request->fax;
        // $supplier->facebook = $request->facebook;
        // $supplier->email = $request->email;
        // $supplier->phone = $request->phone;
        // $supplier->note = $request->note;
        // $supplier->debit = $request->debit;
        // $supplier->credit = $request->credit;
        // $supplier->balance = $request->balance;
        // // $supplier->status = $request->status;
        // $supplier->save();

        \Session::flash('message','Updated successfully');
        return redirect()->back();
    }

    public function confirm(Supplier $supplier)
    {
        return view('suppliers.confirm')->with([
            'supplier' => $supplier
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        if($supplier->forceDelete()){
            $supplier->delete();
        }

        \Session::flash('message','Deleted successfully');
        return redirect()->back();
    }
}
