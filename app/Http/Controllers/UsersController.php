<?php

namespace App\Http\Controllers;

use App\models\Contact;
use App\models\Image_folder;
use App\models\Images;
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
        $about = About::orderBy('id')->first();
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
        News::whereId($id)->increment('view');
        $meta = [
            'url' => url('news/'.$id),
            'title' => $data->title,
            'description' => strip_tags($data->description),
            'image' => !empty($data->image) ? '/storage/news/'.$data->image : '/img/footer_logo.png'
        ];
        return view('users.pages.post', compact('data', 'meta'));
    }

    public function allImages()
    {
        $folders = Image_folder::orderBy('id', 'desc')->get();
        foreach ($folders as &$folder) {
            $folder['image'] = Images::select('image')->where('folder_id', $folder->id)->first();
        }
        return view('users.pages.folders', compact('folders'));
    }

    public function allImage($id)
    {
        $images = Images::select('image')->where('folder_id', $id)->get();

        return view('users.pages.images', compact('images'));
    }
}
