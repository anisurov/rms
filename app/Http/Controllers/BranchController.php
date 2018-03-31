<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
use App\Branch;
class BranchController extends Controller
{
    public function index()
    {
        return view('addbranch');
    }

    public function branchselect($id)
    {
        $branch  = Branch::where('branch_id',$id)->paginate(5);
        $user = Auth::user();
        $email=$user->user_email;
        $branch = DB::table('branch')->select('branch_name')->where('branch_id',$id)->get();
        foreach ($branch as $key => $value) {
            $branch_name = $value -> branch_name;
        }
        $data= array('user_email'=>$email , 'branch_name'=>$branch_name);
        DB::table('branch_name') ->where('user_email',$email)->update($data);
 
		return redirect('/')->withSuccessMessage('Branch Selected');
    }

     public function add(Request $request)
     {
        $branch = $request->input('branch_name');
        $data=array('branch_name'=>$branch);
        DB::table('branch') -> insert($data);
        $category=DB::table('branch')->select('branch_id','branch_name')->get();
        return view('showallbranch',compact('category'));
     }

     public function showallbranch()
	{
		$category=DB::table('branch')->select('branch_id','branch_name')->get();
		return view('showallbranch',compact('category'));
    }
    
    public function delete(Request $request)
	{
			$id=$request->input('id');
		   DB::table('branch')->where('branch_id',$id)->delete();
           $category=DB::table('branch')->select('branch_id','branch_name')->get();
			return view('showallbranch',compact('category'));
	}
}
