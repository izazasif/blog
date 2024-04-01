<?php

namespace App\Http\Controllers;
use App\Models\Career;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Career::paginate(10);
        return view('career.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('career.create_job');
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
            'job_title' => 'required',
            'job_description' => 'required',
            'valid_till'                =>  'required',
            
        ]);
        
 

        $data = new Career();

 
        
        $data->job_title = $request->job_title;

        $data->category_name = $request->category_name;

        $data->job_description = $request->job_description;

        $data->slug  = Str::slug($request->job_title .'-'.mt_rand(1, 999999),'-' );

        $data->valid_till = $request->valid_till;

        $data->status = 1;

        $data->user_id = session()->get('user_id');
        
        $data->save();

        $message = 'Successful! Blog has been added in your portal.';

        return redirect()->route('career.create')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data =  Career::find($id);
       

       
        if($data->status ==1)
        {
            $data->status = 0;
            $data->save();
        }
        else{
            $data->status = 1 ;
            $data->save();
        }

        $message= 'Successful! Status Change  Successfully';
        return redirect()->route('career.index')->with('message', $message);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Career::select('*')->where('id',$id)->first();
        return view('career.edit',compact('data'));
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
       
        $data = Career::find($id);

        $data->job_title = $request->job_title;

        $data->job_description = $request->job_description;

        $data->valid_till = $request->valid_till;

        $data->save();

        $message = 'Successful! Job Record Updated Successfully';
        return redirect()->route('career.index')->with('message', $message);

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
