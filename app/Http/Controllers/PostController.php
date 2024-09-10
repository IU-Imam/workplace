<?php


namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{

    
    
    public function index(Post $posts)
    {
         $users = User::all();
        $posts = Post::orderBy('post_id','desc')->paginate(10);
        return view('findjob',['posts' => $posts],['users'=>$users] );
   
        // show all  posts
        //return view('postjob');
        //$posts = Post::all(); //fetch all blog posts from DB
        //return view('findjob',compact('posts'));
        
    }
    public function myposts(Post $myposts)
    {
       
        $myposts = Post::orderBy('id','desc')->paginate(10);
        return view('myposts',['myposts' => $myposts] );
   
    
   
        // show all  posts
        //return view('postjob');
        //$posts = Post::all(); //fetch all blog posts from DB
        //return view('findjob',compact('posts'));
        
    }

    public function create()
    {
        //show form to create a blog post
        return view('postjob');
        
    }

   
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'jobtitle' => 'required|string|max:255',
        'company' => 'required|string|max:255',
        'location' => 'required|string|max:255',
        'salary' => 'required|string|max:255',
        'jobtype' => 'required|string|max:255',
        'post_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'post_details'=>'required|string|max:10000'
    ]);

    $image = $validatedData['post_img'];
$imageName = $image->getClientOriginalName();
$imagePath = $image->storeAs('public/images', $imageName);

$newPost = Post::create([
    'jobtitle' => $validatedData['jobtitle'],
    'company' => $validatedData['company'],
    'location' => $validatedData['location'],
    'salary' => $validatedData['salary'],
    'jobtype' => $validatedData['jobtype'],
    'post_img' => $imagePath,
    'id' =>  auth()->id(),
    'post_details'=>$validatedData['post_details']
]);

return back()->with('success', 'Post added successfully!');
}


    public function show(Post $post)
    {
        //show a blog post
      
        return view('singlepost',['post' => $post]); //returns the view with the post
        
    }


    
    public function edit(Post $Post)
    {
        //show form to edit the post
    }

    
    public function update(Request $request, Post $Post)
    {
        //save the edited post
    }

    
    public function destroy(Post $Post)
    {
        //delete a post
    }
}