<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File ;
use Illuminate\Support\Str;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Blog::orderBy('created_at', 'DESC')->get();
        return view('blog.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        return view('blog.create');
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
            'writer_name' => 'required',
            'blog_titile' => 'required|unique:blogs',
            'blog_description' => 'required',
            'image'                =>  'required|max:30000|mimes:png,jpeg,jpg',
            
        ]);
        
 

        $data = new Blog();

 
        $image_name = date('YmdHis') . "_" . mt_rand(1, 999999) . "." . $request->file('image')->getClientOriginalExtension();

        $image_path = $request->file('image')->move('website/blog', $image_name);
        
        $image_name =  'blog'.'/'.$image_name;

        $data->image = $image_name;

        
        $data->writer_name = $request->writer_name;

        $data->blog_titile = $request->blog_titile;

        $data->slug  = Str::slug($request->blog_titile .'-'.mt_rand(1, 999999),'-' );

        $data->blog_description = $request->blog_description;

        $data->status = 1;

        $data->user_id = session()->get('user_id');
        
        $data->save();

        $message = 'Successful! Blog has been added in your portal.';

        return redirect()->route('blogs.create')->with('message', $message);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data =  Blog::find($id);
       

       
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
        $data = Blog::select('*')->where('id',$id)->first();
        return view('blog.edit',compact('data'));
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
       
        $data = Blog::find($id);

        $data->blog_titile = $request->blog_titile;

        $data->blog_description = $request->blog_description;

        if (request()->hasFile('image') && request('image') != '') {
            
            $file = $data->image;
            
            $current_wd = public_path();
           
            unlink($current_wd.'/'.$file);

            $image_name = date('YmdHis') . "_" . mt_rand(1, 999999) . "." . $request->file('image')->getClientOriginalExtension();

            $image_path = $request->file('image')->move('website/blog', $image_name);

            $data->image = $image_path ;

        } 
        $data->save();

        $message = 'Successful! Blog Record Updated Successfully';
        return redirect()->route('blogs.index')->with('message', $message);

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
