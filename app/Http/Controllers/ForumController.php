<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Topic;
use App\Post;
use Auth;
use Session;

class ForumController extends Controller
{
    /**
     * Pobieramy liste tematów
     */
    public function index()
    {
        $topics = Topic::latest()->get();
        return view('forum.index')->with('topics', $topics);
    }

    /**
     * Wyswietlamy temaz z jego postami
     */
    public function show($id)
    {
        $topic = Topic::findOrFail($id);
        return view('forum.show')->with('topic', $topic);
    }

    /**
     * Dodajemy post
     */
    public function addPost($id){

        $additional_data = array(
            'text' => $_POST['editor_content'],
            'user_id' => Auth::user()->id,
            'topic_id' => $id
        );

        $post = new Post($additional_data);

        $post->save();
        Session::flash('ok','Dodano odpowiedź');
        return redirect('topic-show/'.$id);
    }

    /**
     * Pobranie posta do edycji
     */
    public function editPost(){

        $post = Post::findOrFail($_POST['id_post']);
        return response()->json($post);
    }

    /**
     *  Edytujemy post
     */
    public function updatePost(){

        $post= Post::findOrFail($_POST['post_id']);
        $post->update($_POST);
        Session::flash('ok','Zedytowano Post');
        return redirect('topic-show/'.$_POST['topic_id']);
    }

    /**
     * Usuwanie posta
     */
    public function deletePost($id, Request $request){
        $post = Post::findOrFail($id);
        $post->delete();
        Session::flash('ok','Usunięto post');
        return Redirect::back();
    }

    /**
     *  Dodawanie nowego tematu
     */
    public function addTopic(){
        $topic = new Topic($_POST);
        $topic->save();

        Session::flash('ok','Dodano temat');
        return redirect('forum');
    }

    /**
     * Usuwanie tematu
     */
    public function deleteTopic($id){
        $topic = Topic::findOrFail($id);
        $topic->delete();
        Session::flash('ok','Usunięto temat');
        return redirect('forum');
    }
}
