<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reportissue');
    }

    public function getAllComplaints(){
        $complaints = DB::select('
        SELECT c.*, u.name as user_name
        FROM complaints c
        JOIN users u ON c.user_id = u.id
    ');
        return view('complaints', ['complaints' => $complaints]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'user_id' => 'required',
            'complaint_type' => 'required',
            'description' => 'required',
        ]);


        // Create a new complaint
        $complaint = Complaint::create($validatedData);

        // Optionally, you can redirect somewhere after submission
        return redirect()->route('complaints.form')->with('success', 'Complaint submitted successfully!');
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
