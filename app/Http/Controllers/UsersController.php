<?php

namespace App\Http\Controllers;

use App\models\Contact;
use App\models\News;
use App\models\Prices;
use Illuminate\Http\Request;
use App\models\home_texts as Home;
use App\models\About;
use App\models\Services;
use App\models\Teams;

class UsersController extends Controller
{
    public function index()
    {
        $homeTexts = Home::all();
        $about = About::first();
        $services = Services::all();
        $teams = Teams::all();
        $news = News::limit(5)->get();
        $prices = Prices::all();
        return view('users.index', compact('homeTexts', 'about', 'services', 'teams', 'news', 'prices'));
    }

    public function contact(Request $request)
    {
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'name' => 'required|min:3|max:190',
                'email' => 'required|min:3|max:190',
                'number' => 'required|numeric',
                'messege' => 'required|min:3'
            ]);

            $contact = new Contact();

            $contact->name = $request->input('name');
            $contact->email = $request->input('email');
            $contact->number = $request->input('number');
            $contact->messege = $request->input('messege');

            $contact->save();
            return redirect('/');
        }
    }
    public function service($id)
    {
        $service = Services::find($id);
        return view('users.pages.service', compact('service'));
    }

    public function post($id)
    {
        $data = News::find($id);
        return view('users.pages.post', compact('data'));
    }
}
