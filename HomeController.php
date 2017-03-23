<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
		
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
	public function contact()
    {
	$user_id = Auth::user()->id;
	$contacts=DB::table('contacts')->where('user_id',$user_id)->get();
return view('contact',compact('contacts'));
        //return view('contact');
    }
	
	public function add_contact()
    {
	      return view('add_contact');
    }
	
	public function save_contact(Request $request){
			   //$contacts = new Contacts;
			    
               $user_id = $request['user_id'];
                $email = $request['email'];
                $name = $request['name'];
                $phone = $request['phone'];
                $address = $request['address'];
				 $company = $request['company'];
                $dob = $request['dob'];
				DB::table('contacts')->insert([
                'user_id' => $user_id,
				'name' => $name,
				'email' => $email,
				'phone' => $phone,
				'address' => $address,
				'company' => $company,
				'dob' => $dob,
            ]);
			   return redirect('contact');
	}
	
	
	public function edit_contact($id)
    {

	$contacts=DB::table('contacts')->where('id',$id)->first();
return view('edit_contact',compact('contacts'));
        //return view('contact');
    }
	
	public function update_contact(Request $request){
			   //$contacts = new Contacts;
			    
               $id = $request['id'];
			    $email = $request['email'];
                $name = $request['name'];
                $phone = $request['phone'];
                $address = $request['address'];
				 $company = $request['company'];
                $dob = $request['dob'];
				DB::table('contacts')->where('id',$id)->update([
               'name' => $name,
				'email' => $email,
				'phone' => $phone,
				'address' => $address,
				'company' => $company,
				'dob' => $dob,
            ]);
			   return redirect('contact');
	}
	
	public function delete_contact($id)
    {
	      DB::table('contacts')->where('id',$id)->delete();
		return redirect('contact');
    }
	
}





