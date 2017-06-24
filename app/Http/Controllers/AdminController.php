<?php

namespace App\Http\Controllers;

use App\models\Contact;
use App\models\News;
use App\models\Teams;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\models\home_texts as home;
use App\models\About;
use App\models\Services;
use App\models\Prices;
use File;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        return view('admins.index');
    }
    
    public function homeTexts(Request $request)
    {
        if ($request->isMethod('post')){

            $this->validate($request, [
                'text' => 'required',
                'sub_text' => 'required',
            ]);

            $text = new home();

            $text->text = $request->input('text');
            $text->sub_text = $request->input('sub_text');
            $text->active = !is_null($request->input('active')) ? $request->input('active') : 0;
            $text->save();
            return redirect()->back();
        } else {
            $texts = home::all();
            return view('admins.pages.homeTexts', compact('texts'));
        }
    }
    
    public function homeTextsEdit(Request $request)
    {
        if ($request->isMethod('post')){

            $this->validate($request, [
                'text' => 'required',
                'sub_text' => 'required',
            ]);

            $text = home::find($request->input('id'));

            $text->text = $request->input('text');
            $text->sub_text = $request->input('sub_text');
            $text->active = !is_null($request->input('active')) ? $request->input('active') : 0;
            $text->save();

            return redirect()->back();
        }
    }
    
    public function deleteHomeText($id)
    {
        home::find($id)->delete();
        return redirect()->back();
    }

    public function aboutTexts(Request $request)
    {
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'title' => 'required|max:190',
                'text' => 'required',
            ]);

            $about = About::find($request->input('id'));
            $about->title = $request->input('title');
            $about->text = $request->input('text');

            if ($about->save()) {
                flash('Success')->success();
            } else {
                flash('Error')->error();
            }
            return redirect()->back();
        } else {
            $vals = About::first();
            return view('admins.pages.about', compact('vals'));
        }
    }

    public function services(Request $request)
    {
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'title' => 'required|min:3|max:190',
                'text' => 'required|min:3|max:190',
                'page_text' => 'required|min:3',
            ]);
            $services = new Services();
            $services->title = $request->input('title');
            $services->text = $request->input('text');
            $services->page_text = $request->input('page_text');

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = time();
                $ext = $image->getClientOriginalExtension();
                $full_name = $name . '.' . $ext;

                Storage::putFileAs('/public/services', $image, $full_name);
                $services->image = $full_name;
            }
            $services->save();
            flash('Service is successfully added')->success();
            return redirect()->back();
        } else {
            return view('admins.pages.services');
        }
    }

    public function EditService(Request $request, $id)
    {
        $data = Services::find($id);
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'title' => 'required|min:3|max:190',
                'text' => 'required|min:3|max:190',
                'page_text' => 'required|min:3',
            ]);
            $data->title = $request->input('title');
            $data->text = $request->input('text');
            $data->page_text = $request->input('page_text');
            if ($request->hasFile('image')) {
                Storage::delete('/public/services/'.$data->image);
                $image = $request->file('image');
                $name = time();
                $ext = $image->getClientOriginalExtension();
                $full_name = $name . '.' . $ext;

                Storage::putFileAs('/public/services', $image, $full_name);
                $data->image = $full_name;
            }
            $data->save();
            flash('Service is successfully editing')->success();
            return redirect()->back();
        } else {
            return view('admins.pages.editService', compact('data'));
        }

    }

    public function allServices(Request $request)
    {
        $services = Services::all();
        return view('admins.pages.allServices', compact('services'));
    }

    public function deleteService($id)
    {
        $data = Services::find($id);
        Prices::where('service_id', $id)->delete();
        $data->delete();
        flash('Service is successfully deleted')->success();
        return redirect()->back();
    }

    public function teams(Request $request)
    {
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'name' => 'required|min:3|max:190',
                'description' => 'required|min:3|max:190',
                'image' => 'required',
            ]);
            $teams = new Teams();
            $teams->name = $request->input('name');
            $teams->description = $request->input('description');
            $teams->fb = $request->input('fb');
            $teams->youtube = $request->input('youtube');

            // image
            $image = $request->file('image');
            $name = time();
            $ext = $image->getClientOriginalExtension();
            $full_name = $name . '.' . $ext;

            Storage::putFileAs('/public/teams', $image, $full_name);
            $teams->image = $full_name;
            // end image

            $teams->save();

            flash('Team member is successfully added')->success();
            return redirect()->back();
        } else {
            return view('admins.pages.teams');
        }
    }

    public function editTeam(Request $request, $id)
    {
        $data = Teams::find($id);
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'name' => 'required|min:3|max:190',
                'description' => 'required|min:3|max:190'
            ]);
            $data->name = $request->input('name');
            $data->description = $request->input('description');
            $data->fb = $request->input('fb');
            $data->youtube = $request->input('youtube');
            if ($request->hasFile('image')) {
                Storage::delete('/public/teams/'.$data->image);
                $image = $request->file('image');
                $name = time();
                $ext = $image->getClientOriginalExtension();
                $full_name = $name . '.' . $ext;

                Storage::putFileAs('/public/teams', $image, $full_name);
                $data->image = $full_name;
            }
            $data->save();
            flash('Team member is successfully editing')->success();
            return redirect()->back();
        } else {
            return view('admins.pages.editTeam', compact('data'));
        }

    }

    public function allTeam(Request $request)
    {
        $teams = Teams::all();
        return view('admins.pages.allTeam', compact('teams'));
    }

    public function deleteTeam($id)
    {
        $data = Teams::find($id);
        Storage::delete('/public/teams/'.$data->image);
        $data->delete();
        flash('Tema member is successfully deleted')->success();
        return redirect()->back();
    }

    public function news(Request $request)
    {
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'title' => 'required|min:3|max:190',
                'Short_description' => 'required|min:3',
                'description' => 'required|min:3',
                'image' => 'required',
            ]);

            $news = new News();
            $news->title = $request->input('title');
            $news->Short_description = $request->input('Short_description');
            $news->description = $request->input('description');
            $news->created_at = Carbon::now();
            $news->updated_at = Carbon::now();

            // image
            $image = $request->file('image');
            $name = time();
            $ext = $image->getClientOriginalExtension();
            $full_name = $name . '.' . $ext;

            Storage::putFileAs('/public/news', $image, $full_name);
            $news->image = $full_name;
            // end image

            $news->save();

            flash('News is successfully added')->success();
            return redirect()->back();
        } else {
            return view('admins.pages.news');
        }
    }

    public function editNews(Request $request, $id)
    {
        $data = News::find($id);
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'title' => 'required|min:3|max:190',
                'Short_description' => 'required|min:3|max:190',
                'description' => 'required|min:3|max:190'
            ]);
            $data->title = $request->input('title');
            $data->description = $request->input('description');
            $data->short_description = $request->input('Short_description');
            if ($request->hasFile('image')) {
                Storage::delete('/public/news/'.$data->image);
                $image = $request->file('image');
                $name = time();
                $ext = $image->getClientOriginalExtension();
                $full_name = $name . '.' . $ext;

                Storage::putFileAs('/public/news', $image, $full_name);
                $data->image = $full_name;
            }
            $data->save();
            flash('Post is successfully editing')->success();
            return redirect()->back();
        } else {
            return view('admins.pages.editNews', compact('data'));
        }

    }

    public function allNews(Request $request)
    {
        $news = News::all();
        return view('admins.pages.allNews', compact('news'));
    }

    public function deleteNews($id)
    {
        $data = News::find($id);
        Storage::delete('/public/news/'.$data->image);
        $data->delete();
        flash('Post is successfully deleted')->success();
        return redirect()->back();
    }

    public function prices(Request $request)
    {
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'price' => 'required|min:3',
                'service_id' => 'required|exists:services,id',
                'text' => 'required|min:3',
            ]);
            $price = new Prices();
            $price->price = $request->input('price');
            $price->text = $request->input('text');
            $price->service_id = $request->input('service_id');
            $price->save();

            flash('Price is successfully added')->success();
            return redirect()->back();
        } else {
            $services = Services::all();
            return view('admins.pages.prices', compact('services'));
        }
    }

    public function editPrice(Request $request, $id)
    {
        $data = Prices::find($id);
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'price' => 'required|min:3|max:190',
                'service_id' => 'required'
            ]);
            $data->price = $request->input('price');
            $data->service_id = $request->input('service_id');
            $data->text = $request->input('text');
            $data->save();
            flash('Price is successfully editing')->success();
            return redirect()->back();
        } else {
            $services = Services::all();
            return view('admins.pages.editPrice', compact('data', 'services'));
        }

    }

    public function allPrice(Request $request)
    {
        $prices = Prices::all();
        return view('admins.pages.allPrice', compact('prices'));
    }

    public function deletePrice($id)
    {
        $data = Prices::find($id)->delete();
        flash('Price is successfully deleted')->success();
        return redirect()->back();
    }
    public function subscribes(Request $request)
    {
        if ($request->isMethod('post')) {

        } else {
            $datas = Contact::orderBy('id', 'desc')->get();
            return view('admins.pages.subscribes', compact('datas'));
        }
    }
}
