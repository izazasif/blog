<?php

namespace App\Http\Controllers;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Team::orderBy('created_at', 'DESC')->get();
        return view('ourteam.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ourteam.create');
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
            'members_name' => 'required|unique:teams',
            'members_designation' => 'required',
            'image'                =>  'required|max:30000|mimes:png,jpeg,jpg',
        ]);
        

        $data = new Team();

 
        $image_name = date('YmdHis') . "_" . mt_rand(1, 999999) . "." . $request->file('image')->getClientOriginalExtension();

        $image_path = $request->file('image')->move('website/team', $image_name);

        $data->image = $image_path;

        $data->members_name = $request->members_name;

        $data->members_designation = $request->members_designation;

        $data->members_description = $request->members_description;

        $data->status = 1;

        $data->user_id = session()->get('user_id');

        $data->save();

        $message = 'Successful! Blog has been added in your portal.';

        return redirect()->route('team.create')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data =  Team::find($id);
       

       
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
        return redirect()->route('team.index')->with('message', $message);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Team::select('*')->where('id',$id)->first();
        return view('ourteam.edit',compact('data'));
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
        $data = Team::find($id);

        $data->members_name = $request->members_name;

        $data->members_designation = $request->members_designation;

        $data->members_description = $request->members_description;

        if (request()->hasFile('image') && request('image') != '') {
            
            $file = $data->image;
            
            $current_wd = public_path();
           
            unlink($current_wd.'/'.$file);

            $image_name = date('YmdHis') . "_" . mt_rand(1, 999999) . "." . $request->file('image')->getClientOriginalExtension();

            $image_path = $request->file('image')->move('website/blog', $image_name);

            $data->image = $image_path ;

        } 
        $data->save();

        $message_newsroom = 'Successful! Blog Record Updated Successfully';
        return redirect()->route('team.index')->with('message_newsroom', $message_newsroom);
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
