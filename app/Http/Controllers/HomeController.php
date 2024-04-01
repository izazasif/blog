<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Blog;
use App\Models\Team;
use App\Models\Newsroom;
use App\Models\Career;
use App\Models\Apply;
use App\Models\Testimonial;
use App\Models\Contact_us;
use Illuminate\Support\Facades\Hash;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            $title = "Miaki | Home";          
            return view('home',compact('title'));
        }
        else{
            // return redirect()->route('azure.login');
            return view('auth.login');           
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     
    public function blog()
    {  
        $title = "Miaki | Blog";
        $data = Blog::where('status',1)->latest('created_at')->take(3)->get()->toArray();

        $latestThreeDates = Blog::orderBy('created_at', 'desc')
                        ->take(3)
                        ->pluck('created_at')
                        ->toArray();
        $data1 = Blog::where('status',1)->where('created_at', '<', end($latestThreeDates))
        ->paginate(3);
        return view('web.blog',compact('data','data1','title'));
    }

    public function blog_details($slug)
    {  
        $data = Blog::where('slug',$slug)->first();
        $title = "Miaki | Blog | ".$data->blog_titile;
      
        $image = url('/').'/'.'website/'.$data->image;
        $data_latest = Blog::latest('created_at')->take(3)->get();
        return view('web.blog_details',compact('data','data_latest','title','image'));
    }
    public function about_us()
    {   
        $title = "Miaki | About Us";
        return view('web.about_us',compact('title'));
    }
    public function our_leadership_team()
    {   
        $title = "Miaki | Team";
        $data =Team::where('members_designation','=','CO-FOUNDER')->where('status',1)->take(2)->get();
        $data1 =Team::where('members_designation','!=','CO-FOUNDER')->where('status',1)->get();
        return view('web.our_team',compact('data','data1','title'));
    }
    public function newsroom()
    {   
        $title = "Miaki | Events";
        $data = Newsroom::where('status',1)->get();
        // dd($data);
        return view('web.news_room',compact('data','title'));
    }

    public function portfolio()
    {   
        $title = "Miaki | Portfolio";
        return view('web.portfolio',compact('title'));
    }
    
    public function contact()
    {   
        $title = "Miaki | Contact";
        return view('web.contact',compact('title'));
    }
    public function contact_store(Request $request)
    {
      
        $this->validate($request, [
          
            'username'                =>  'required',
            'email'                =>  'required',
            'phone'                =>  'required',
            'subject'                =>  'required',
            'message'                =>  'required',
        ]);
           $data = new Contact_us();
           $data->username = $request->username;
           $data->email = $request->email;
           $data->phone = $request->phone;
           $data->subject = $request->subject;
           $data->message = $request->message;
           $data->save();
           $message = "Thanks For Contacting Us! We'll Contact You Soon.";
           return redirect()->route('contact')->with('message', $message);
    }
     
    public function services()
    {  
        $title = "Miaki | Services";
        return view('web.service',compact('title'));

    }
    public function newsroom_details($id)
    {   $title = "Miaki | Event Details";
        $data = Newsroom::where('id',$id)->first();
        $images = json_decode($data->image);
        return view('web.news_room_image',compact('data','images','title'));
    }
    public function career_form($id)
    {   $title = "Miaki | Career Form";
        $data = Career::where('id',$id)->first();
        return view ('web.career_form',compact('data','title'));
    }
    public function apply(Request $request)
    
    {   
        
        $this->validate($request, [
          
            'cv_file'                =>  'required|max:30000|mimes:pdf',
        ]);
           $data = new Apply();

           $file_name = date('YmdHis') . "_" . mt_rand(1, 999999) . "." . $request->file('cv_file')->getClientOriginalExtension();

          $image_path = $request->file('cv_file')->move('website/cv', $file_name);

        
           $data->f_name = $request->f_name;
           $data->l_name = $request->l_name;
           $data->email = $request->email;
           $data->phone_number = $request->phone_number;
           $data->cv_file = $image_path;
           $data->job_id = $request->job_id;
           $data->save();

           $data =  Career::find($data->job_id);

           $job_name = $data->job_title;

       

           $data = array(
            'name' => $request->f_name.' '.$request->l_name,
            'email' => $request->email,
            'phone' => $request->phone_number,
            'cv' => $image_path,
            'subject' =>$request->f_name.' '.$request->l_name. '-Applied For -'. $job_name
        );
        $id = $request->job_id;
        \Mail::to('career@miaki.co')->send(new \App\Mail\CareerMail($data));
        $message = 'Applied Successfully !';
        return redirect()->route('career_form',['id' => $id])->with('message', $message);

    }
    public function job_description($slug)
    {   
        $data = Career::where('slug',$slug)->first();

        $title = "Miaki | Job Description | ".$data->job_title;
       
        $image = url('/').'/'.'website/share/hire.jpg';

        return view ('web.job_description',compact('data','title','image'));
    }
    public function miaki_career()
    {   
        $title = "Miaki | Career";
        $data = Career::where('status',1)->get();
        return view('web.miaki_career',compact('data','title'));
    }
    public function home()
    {  
        $title = "Miaki | Home";
        $test =  Testimonial::where('status',1)->take(5)->get();
        return view('web.home',compact('test','title'));
    }
    public function mobile_app_development()
    {  
        $title = "Miaki | Mobile";
        return view('services.moble_app',compact('title'));
    }
    public function digital_transmition()
    {   
        $title = "Miaki | Digital Transmition";
        return view ('services.digital_transmition',compact('title'));
    }
    public function qa()
    {   $title = "Miaki | QA";
        return view ('services.qa',compact('title'));
    }
    public function managed_services()
    {   $title = "Miaki | Managed Services";
        return view('services.managed_services',compact('title'));
    }
    public function telecom_services()
    {   
        $title = "Miaki | telecom";
        return view('services.telecom_services',compact('title'));
    }
    public function web_dev()
    {   $title = "Miaki | Web Development";
        return view('services.web',compact('title'));
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
     
    public function testimonial()
    {
        return view('home.testimonial');
        
    }
    public function testimonial_store(Request $request)
    {   
        $this->validate($request, [
            'testimonial_titile' => 'required|unique:testimonials',
            'testimonial_company_name' => 'required',
            'testimonial_description' => 'required',
            'testimonial_logo'                =>  'required|max:30000|mimes:png,jpeg,jpg',
            
        ]);
        
 

        $data = new Testimonial();

 
        $image_name = date('YmdHis') . "_" . mt_rand(1, 999999) . "." . $request->file('testimonial_logo')->getClientOriginalExtension();

        $image_path = $request->file('testimonial_logo')->move('website/testimonial', $image_name);

        $data->testimonial_logo = $image_path;

        $data->testimonial_titile = $request->testimonial_titile;

        $data->testimonial_company_name = $request->testimonial_company_name;


        $data->testimonial_description = $request->testimonial_description;

        $data->status = 1;

        $data->user_id = session()->get('user_id');
        
        $data->save();

        $message = 'Successful! testimonial has been added in your portal.';

        return redirect()->route('testimonial.index')->with('message', $message);
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

    public function login(Request $request)
    {
        try {
                $credentials = $request->only('email','password');
                if (Auth::attempt($credentials)) {
                    session()->put('user_id', Auth::user()->id);
                    return redirect()->route('login');
                }
                return redirect()->back()->withErrors(['email' => 'These credentials do not match our records.']);
            }
        catch (\Throwable $th){
            $message="Invalid Credentials or Account.";
            return redirect()->back()->withErrors($message);
        }
    }
    public function logout(){
        session()->flush();
        \Cookie::forget('laravel_session');
        Auth::logout();
        return redirect()->route('login');

    }
}
