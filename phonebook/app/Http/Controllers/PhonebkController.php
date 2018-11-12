<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CrudePhnbook;
class PhonebkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phonebook1 = CrudePhnbook::all()->toArray();
        return view('phonebook.index', compact('phonebook1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('phonebook.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
            'contact_name'    =>  'required',
            'address'    =>  'required',
            'contact_number'     =>  'required'
        ]);
        $student = new CrudePhnbook([
            'contact_name'    =>  $request->get('contact_name'),
            'address'    =>  $request->get('address'),
            'contact_number'     =>  $request->get('contact_number')
        ]);
        $student->save();
        return redirect()->route('phonebook.index')->with('success', 'Contact Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $phonebook = CrudePhnbook::find($id);
        return view('phonebook.view', compact('phonebook','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $phonebook = CrudePhnbook::find($id);
        return view('phonebook.edit', compact('phonebook','id'));

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
        $this->validate($request, [
            'contact_name' => 'required',
            'address' => 'required',
            'contact_number' => 'required'
        ]);
        $phonebook = CrudePhnbook::find($id);
        $phonebook->contact_name = $request->get('contact_name');
        $phonebook->address = $request->get('address');
        $phonebook->contact_number = $request->get('contact_number');
        $phonebook->save();
        return redirect()->route('phonebook.index')->with('success','Contact Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $phonebook = CrudePhnbook::find($id);
        $phonebook->delete();
        return redirect()->route('phonebook.index')->with('success','Contact Successfully Deleted');
    }
}
