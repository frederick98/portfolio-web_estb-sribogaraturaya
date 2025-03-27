<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

use App\Models\Article;
use App\Models\AboutUs;
use App\Models\Banner;
use App\Models\BannerAboutUs;
use App\Models\Contact;
use App\Models\ContactPage;
use App\Models\CompanyPicture;
use App\Models\OurBusiness;
use App\Models\OurStories;
use App\Models\Achievement;

class HomepageController extends Controller
{
    public function test() {
        return view('front.test');
    }

    public function index() {
        $activeStat = 1;

        // article
        $data['article'] = Article::where('status', '=', $activeStat)->where('published_date', '<=', Carbon::now())->orderBy('created_time', 'desc')->limit(3)->get();
        // banner
        $data['banner'] = Banner::where('status', '=', $activeStat)->orderBy('created_time', 'desc')->get();
        // company picture
        $data['comPic'] = CompanyPicture::where('status', '=', $activeStat)->orderBy('created_time', 'desc')->limit(6)->get();
        // achievement
        $data['achievement'] = Achievement::where('status', '=', $activeStat)->orderBy('created_time', 'desc')->get();

        return view('front.homepage', $data);
    }

    public function mail(Request $request){
        // $setting = Setting::first();
        $to_name = 'Info SRR';
        $to_email = 'info@sriboga.co.id';
        // $to_email = $setting->email;

        // MAIL TO ADMIN
        $data = [
            'clientname' => $request->name, 
            'clientemail' => $request->email,
            'clientphone' => $request->phone,
            'clientmessage' => $request->message,
        ];
        
        Mail::send('/emails/toAdmin', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)->subject('Sriboga Raturaya Website Inquiry');
            $message->from('info@sriboga.co.id','Website Sriboga Raturaya');
        });

        // MAIL TO CLIENT
        $clientemail = $request->email;
        $clientname = $request->name;
        $clientdata = [
            'clientname' => $request->name, 
        ];
        
        Mail::send('/emails/toClient', $clientdata, function($message) use ($clientname, $clientemail) {
            $message->to($clientemail, $clientname)->subject('Sriboga Raturaya : Customer Relationship');
            $message->from('info@sriboga.co.id','Sriboga Raturaya');
        });

        // save ke db
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $contact->created_time = Carbon::now();
        $contact->created_by = 'Website Inquiries';
        $contact->save();

        $request->session()->flash('success');
        if($request->route()->getName() == "mailContactUs" || $request->route()->getName() == "contactUs") {
            return view('front.contactUs');
        } else if($request->route()->getName() == "mailHomepage" || $request->route()->getName() == "homepage"){
            return \App::call('App\Http\Controllers\HomepageController@index');
        } else if($request->route()->getName() == "mailInvestor" || $request->route()->getName() == "investor"){
            return view('front.investors');
        }
    }

    public function aboutUs(){
        $activeStat = 1;

        // top banner
        $data['banner'] = BannerAboutUs::where('status', '=', $activeStat)->orderBy('created_time', 'asc')->get();
        // items
        $data['about'] = AboutUs::where('id', 1)->first();
        // our business
        $data['business'] = OurBusiness::where('status', '=', $activeStat)->orderBy('created_time', 'asc')->get();
        // our stories
        $data['stories'] = OurStories::where('status', '=', $activeStat)->orderBy('year')->get();
        // achievement
        $data['achievement'] = Achievement::where('status', '=', $activeStat)->orderBy('created_time', 'desc')->get();

        return view('front.aboutUs', $data);
    }

    public function contactUs(){
        $data['first'] = ContactPage::firstOrFail();
        return view('front.contactUs', $data);
    }
    
    public function investor(){
        return view('front.investors');
    }

    public function error404(){
        return view('front.errors.404');
    }
}
