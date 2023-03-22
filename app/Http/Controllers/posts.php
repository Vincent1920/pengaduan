<?php

namespace App\Http\Controllers;
use App\Models\comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class posts extends Controller
{


   

    /**
     * Display a listing of the resource.
     */
    public function index(user $user)
    {
        
        // return $user->all();
        // echo'<pre>';
        // var_dump($user);
        // exit();
        // dd($user);
        return view('dashboard.post.creat',[
                // 'category'=>category::all(),
                'user'=>$user
        
        ]);
        
    }      

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $file = $request->file('image')->store('post-images');
        // return $request->file('image')->Storage('post-images');
        // ddd($request);
        // return $request;
        $validatedData = $request->validate([
            'title' => 'required | max:255',
            // 'image' => 'image|file|max:11024',
            'body' => 'required'
        ]);
    
            // $validatedData['user_id'] =auth()->user()->id;
            $validatedData['excerpt'] =Str::limit(strip_tags($request->body), 200);
          // return $validatadData;    
            comment::create($validatedData);
            // categories::create($validatedData);
     
         return redirect()->route('/dashboard/posts')
             ->with('success','success, New post has baen added!!');
    }
  
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      
        // return comment::all();
        // $comment=DB::table('comment')->get();
        // info($comment);
        $user=DB::table('users')->get();
        info($user);
        // echo'<pre>';
        // var_dump($user);
        // exit();
        // dd($user);
        return view('dashboard.pengaduan',compact('user'),[
            // 'user'=>$user,
            // $user = $user::all(),
                // 'category'=>category::all(),
                // 'user'=>$user
        
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $id->delete();
        return redirect('/dashboard/pengaduan')->with('success, post has baen deleted');
      
    }
}
