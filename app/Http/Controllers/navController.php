<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\postLog;
use App\post;
use App\message;
use App\writer;
use App\Admin;

use DB;
use File;

use App\Http\Requests;

class navController extends Controller
{
    public function home()
    {
        $posts = post::orderBy('id', 'DESC')->get();
        $logs =  post::orderBy('views', 'DESC')->paginate(5);
        return view('home', compact('posts'), compact('logs'));
    }
    
    public function world()
    {
        $posts = post::where('ref', 'world')->orderBy('id', 'DESC')->get();
        $title = "World News";
        return view('nav.postFilter', compact('posts'), compact('title'));
    }
    
    public function sports()
    {
        $posts = post::where('ref', 'sports')->orderBy('id', 'DESC')->get();
        $title = "Sports";
        return view('nav.postFilter', compact('posts') , compact('title'));
    }
    
    public function tech()
    {
        $posts = post::where('ref', 'tech')->orderBy('id', 'DESC')->get();
        $title = "Tech";
        return view('nav.postFilter', compact('posts') , compact('title'));
    }
    
    public function business()
    {
        $posts = post::where('ref', 'business')->orderBy('id', 'DESC')->get();
        $title = "Business";
        return view('nav.postFilter', compact('posts') , compact('title'));
    }
    
    public function media()
    {
        $posts = post::where('ref', 'media')->orderBy('id', 'DESC')->get();
        $title = "Media";
        return view('nav.postFilter', compact('posts') , compact('title'));
    }
    
    public function entertainment()
    {
        $posts = post::where('ref', 'entertainment')->orderBy('id', 'DESC')->get();
        $title = "Entertainment";
        return view('nav.postFilter', compact('posts') , compact('title'));
    }
    
    public function culture()
    {
        $posts = post::where('ref', 'culture')->orderBy('id', 'DESC')->get();
        $title = "Culture";
        return view('nav.postFilter', compact('posts') , compact('title'));
    }
    
    public function books()
    {
        $posts = post::where('ref', 'books')->orderBy('id', 'DESC')->get();
        $title = "Books";
        return view('nav.postFilter', compact('posts') , compact('title'));
    }
    
    public function articales()
    {
        $posts = post::where('ref', 'articles')->orderBy('id', 'DESC')->get();
        $title = "Articles";
        return view('nav.postFilter', compact('posts') , compact('title'));
    }
    
    public function post($ref, $id)
    {
        $post = post::where('id', $id)->first();
        DB::table('post_logs')->insert(['post_id' => $id]);
        DB::table('posts')->where('id', $id)->increment('views');
        return view('nav/post', compact('post'));
    }
    
    
    public function message(Request $request)
    {
        DB::table('messages')->insert([
            'name' => $request->name, 'email' => $request->email, 'subject' => $request->subject, 'message' => $request->message
        ]);
        return back();
    }
    
    public function messDis()
    {
        $posts = message::orderBy('id', 'DESC')->paginate(4);
        return view('nav.messDis', compact('posts'));
    }
    
    public function postViews()
    {
        $posts = post::orderBy('id', 'DESC')->get();
        $views = postLog::orderBy('id', 'DESC')->paginate(5);
        return view('nav.postView', compact('posts'), compact('views'));
    }
    
    public function add(Request $request)
    {
        $file = $request->file('img');
        $request->file('img')->move("images/", $_FILES["img"]["name"]);
        $name = ucfirst($request->name);
        $writer = writer::where('name', $name)->first();
        if(!$writer)
        {
            $writer = new writer();
            $writer->name = $name;
            $writer->save();
        }
        $post = new post();
        $post->ref = $request->ref;
        $post->title = $request->title;
        $post->img = "images/" . $_FILES["img"]["name"];
        $post->imgDesc = $request->desc;
        $post->shortTxt = $request->short;
        $post->txt = $request->txt;
        $writer->posts()->save($post);
        return back();
    }
    
    public function del(Request $request)
    {
        $name = ucfirst($request->name);
        $writer = writer::where('name', $name)->first();
        $post = post::where('ref', $request->ref)
                    ->where('writer_id', $writer->id)
                    ->where('title', $request->title)
                    ->first();
        if(File::exists($post->img))
        {
            File::delete($post->img);
        }
        $post->delete();
        return back();
    }
    
    public function update(Request $request)
    {
        $writer = writer::where('name', $request->name)->first();
        $post = post::where('ref', $request->ref)
                    ->where('title', $request->title)
                    ->where('writer_id', $writer->id)
                    ->first();
        if($request->img != null)
        {
            File::delete($post->img);
            $file = $request->file('img');
            $request->file('img')->move("images/", $_FILES["img"]["name"]);
            $post->img = "images/" . $_FILES["img"]["name"];
            $post->save();
        }
        
        if($request->imgDesc != null)
        {
            $post->imgDesc = $request->desc;
            $post->save();
        }
        
        if($request->short != null)
        {
            $post->shortTxt = $request->short;
            $post->save();
        }
        
        if($request->txt != null)
        {
            $post->txt = $request->txt;
            $post->save();
        }
        return back();
    }
    
    public function search(Request $request)
    {
        $writer = writer::where('name', $request->key)->first();
        if($writer)
        {
            $posts = post::where('writer_id', $writer->id)->orderBy('id', 'DESC')->get();   
            $title = $request->key;
            return view('nav.postFilter', compact('posts') , compact('title'));
        }
        $post = post::where('title', $request->key)->first();
        if($post)
        {
            DB::table('post_logs')->insert(['post_id' => $post->id]);
            return view('nav/post', compact('post'));
        }
    }
    
    public function user(Request $request)
    {
        $this->validate($request, [
            'user' => 'required',
            'pass' => 'required'
        ]);
        $admin = new Admin();
        $admin->name = $request->user;
        $admin->password =  bcrypt($request->pass);
        $admin->save();
        return back();
    }
    
    public function logIn(Request $request)
    {
        $this->validate($request, [
            'user' => 'required',
            'pass' => 'required'
        ]);
        
        if(!Auth::attempt(['name' => $request['user'], 'password' => $request['pass']]))
        {
            return redirect()->back();
        }
        return view('nav.staff');
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}





















