<?php

namespace App\Http\Controllers;

use App\Http\Requests\MatchUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Mark;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Mark::whereNot('mark',null)->with('product')->paginate(15);
        //dd($data);
        return view('match.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function find()
    {
       // dd('match create');
       $type=0; 
       return view('match.create',compact('type'));
    }
    public function findShow(Request $request){
        $sn=$request->input('sn');
       
        $data=Mark::where('sn',$sn)->first();
        
        
 
        if($data===null){
            return to_route('admin.match.find')->with('message','Bunday Seriyka mavjud emas');
        }else{
            if($data->state==2){
                return to_route('admin.match.find.get')->with('message','Bu Seriyka Aktivlashtirilgan');

            }else if($data->state==3){
                return to_route('admin.match.find.get')->with('message','Bu seriyka realizatsiya qilingan');
            }

        }
        return to_route('admin.match.show.get',['id'=>$data->id]);
    }
    
    public function show($id){
        //dd($id);
        $data=Mark::where('id',$id)->with('product')->first();
        //dd($data);
        if($data->mark!=null){

            dd($data->mark);
            return to_route('admin.match.index');
        }
        //dd($data);
        $type=1;
        return view('match.create',compact('data','type'));
    }

   
    public function add(MatchUpdateRequest $request,$id)
    {
        $validated=$request->validated();
        //dd($request->all()); 
        
        $mark=$request->input('mark');
        $sn=$request->input('sn');
        if($mark==$sn){
            return to_route('admin.match.show.get',['id'=>$id])->with('message','Markirovka orniga Seriyka kiritdingiz');
        }
        $isMark=Mark::where('mark',$mark)->first();
        if($isMark!==null){
            return to_route('admin.match.show.get',['id'=>$id])->with('message','Markirovka boshqa Seriykaga ulangan');  
        }
        $prodMark=Mark::where('sn',$sn)->update(['state'=>2,'mark'=>$mark]);
        
        return to_route('admin.match.find.get')->with('success','Markirovka aktivlashtirildi');
        //return $sn;
        //dd($mark);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

   
}
