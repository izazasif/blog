<?php

namespace App\Http\Controllers;
use App\Models\Newsroom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File ;
class NewsroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = Newsroom::orderBy('created_at', 'DESC')->get();
        return view('newsroom.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newsroom.create');
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
            'newsroom_title' => 'required|unique:newsrooms',
            'newsroom_description' => 'required',
            'banner'              => 'required|max:30000|mimes:png,jpeg,jpg',
            'image.*'                =>  'required|max:30000|mimes:png,jpeg,jpg',
            
        ]);
        
        
        $files = [];

        if($request->hasfile('image'))
         {
            foreach($request->file('image') as $file)
            {
                $name = mt_rand(1, 999999).'.'.$file->extension();
                $file->move('website/newsroom', $name);
                 
                $files[] = $name;  
            }
         }
          
        //  $files1= implode(', ', $files);


        $data = new Newsroom();

 
        $image_name = date('YmdHis') . "_" . mt_rand(1, 999999) . "." . $request->file('banner')->getClientOriginalExtension();

        $image_path = $request->file('banner')->move('website/newsroom', $image_name);

        $data->banner =  $image_path;

        $data->image = json_encode($files);

        $data->newsroom_title = $request->newsroom_title;

        $data->newsroom_description = $request->newsroom_description;

        $data->status = 1;

        $data->user_id = session()->get('user_id');

        $data->save();

        $message = 'Successful! Blog has been added in your portal.';

        return redirect()->route('newsroom.create')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data =  Newsroom::find($id);
       

       
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
        return redirect()->route('newsroom.index')->with('message', $message);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Newsroom::select('*')->where('id',$id)->first();
        return view('newsroom.edit',compact('data'));
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
        $data = Newsroom::find($id);

        $data->newsroom_title = $request->newsroom_title;

        $data->newsroom_description = $request->newsroom_description;

        if (request()->hasFile('image') && request('image') != '') {
            
            $file = $data->banner;
            
            $current_wd = public_path();
           
            unlink($current_wd.'/'.$file);

            $image_name = date('YmdHis') . "_" . mt_rand(1, 999999) . "." . $request->file('image')->getClientOriginalExtension();

            $image_path = $request->file('image')->move('website/blog', $image_name);

            $data->banner = $image_path ;

        } 
        $data->save();

        $message_newsroom = 'Successful! Blog Record Updated Successfully';
        return redirect()->route('newsroom.index')->with('message_newsroom', $message_newsroom);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {  
        
        
    }
}
