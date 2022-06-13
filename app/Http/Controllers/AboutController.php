<?php

namespace App\Http\Controllers;
use App\Models\About_Model;
use Facade\FlareClient\Stacktrace\File;
use Hamcrest\Core\AllOf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\PseudoTypes\True_;

class AboutController extends Controller
{
    function index(){
        return view('index');
    }

     function about(){
        $posts=About_Model::all();
        return view('about',["posts"=>$posts]);
      
    } 

    function store(Request $request){
       
        $post = new About_Model;
        $post->about_title=$request->get('about_title');
        $post->about_des=$request->get('about_des');
        //dd( $request->file('about_image'));

        $file =$request->file('about_image');
        $extension=$file->getclientOriginalExtension();
        $filename = time().'.' .$extension;
        $file->move('uplode/storage',$filename);
        $post->about_image = $filename;

        $posts = DB::table('about')->count();

        if($posts < '1') 
        {
            //zero raw  
            $post->save();
            return redirect('about')->with('message','1');// insert
            
        }else
        {
            //more than one raw
            return redirect('about')->with('message', '0');//not insert
        }

       
        
        
        
    }

    public function show(){
       
        $posts=About_Model::all();
        return redirect()->back();
     
    }

    public function about_edit($id){
        $edit = DB::select('select * from about where id=?',[$id]);
        return view('about_edit',['edit'=>$edit]);

    }
    
    public function destroy(About_Model $post, $id)
    {
      $post=  $post::find($id);
      $post->delete();
      return redirect('about');
    }

    // function rules()
    // {
	//     $about_title = About_Model::get('about_title');
	// 	$about_des = About_Model::get('about_des');
	// 	$tables = DB::table('about')->where('about_title',$about_title)->where('about_des',$about_des)->count();
	
	// 	if($tables > 1) {
    //         return [
    //             'about_title' => 'required',
    //             'about_des' => 'required',		 
    //         ];
	// 	} else{
	// 	   return ['db' => 'dberr'];
	// 	}

    // }

   

    
}

 
       
