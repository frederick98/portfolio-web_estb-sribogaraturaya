<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;

use App\Models\Contact;
use App\Models\ContactPage;
use App\Http\Requests\ContactPageRequest;
use App\Exports\ContactExport;
use Maatwebsite\Excel\Facades\Excel;

class ContactController extends Controller
{
    //
    public function index() {
        $data['totalContact'] = Contact::count();
        $data['contact'] = Contact::orderBy('created_time', 'desc')->get();
        return view('admin.contactUs.contactIndex', $data);
    }

    public function exportExcel(){
        return Excel::download(new ContactExport, 'inquiries.xlsx');
    }

    public function pageLayout(){
        $data['first'] = ContactPage::firstOrFail();
        return view('admin.contactUs.pageLayout', $data);
    }

    public function pageLayoutP(ContactPageRequest $request){
        $id = 1;
        $data = ContactPage::where('id', $id)->first();
        $data->update([
            'url_slug' => $request->url_slug,
            'title_tag' => $request->title_tag,
            'canonical_tag' => $request->canonical_tag,
            'meta_description' => $request->meta_description,
            'updated_time' =>Carbon::now(),
            'updated_by'=>Auth::user()->name,
        ]);
        return redirect()->route('contact.list')->with('status','Page Layout information has been successfully updated!'); 
    }
}
