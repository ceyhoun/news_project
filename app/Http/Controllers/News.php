<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class News extends Controller
{
      //user
      public function userHome(){

        $recent=DB::table('form')->select()->where('position',0)->get();
        $data['recent']=$recent;

        $categories = DB::table('form')
        ->join('category', 'category.id', '=', 'form.categoryID')
        ->select('form.id as formid','form.title as formTitle','form.comment as formcomment','form.time as formTime','form.image as formimage', 'category.name as catName')
        ->get();
        $data['categories'] = $categories;

        $advert =DB::table('advert')->where('status',1)->get();
        $data['advert']=$advert;

        $sliders =DB::table('form')->where('position',1)->get();
        $data['sliders']=$sliders;

        $popularSliders =DB::table('form')->where('view','>','100')->get();
        $data['popularSliders']=$popularSliders;

        $populars =DB::table('form')->orderBy('view','desc')->select()->get();
        $data['populars']=$populars;
        return view('User/index',$data);
    }

    public function newsdetail($id=null){
        if ($id==null) {
            return redirect('/');
        }else{

            //DB::table('form')->where('id',$id)->update(['view' =>DB::raw('view + 1')]);

            DB::table('form')->increment('view');
            $news = DB::table('form')
            ->join('authors', 'form.authorID', '=', 'authors.id')
            ->where('form.id', $id)
            ->select('form.*', 'authors.name as authorsname')
            ->first();
            $recent=DB::table('form')->where('id','<>',$id)->select()->get();
            $populars =DB::table('form')->where('id','<>',$id)->orderBy('view','desc')->select()->get();
            $lookalikes=DB::table('form')->where('id','<>',$id)->orderBy('id','asc')->select()->get();
            $btnPrev =DB::table('form')->where('id','<',$id)->orderBy('id','desc')->first();
            $btnNext =DB::table('form')->where('id','>',$id)->orderBy('id','asc')->first();

            $data['news']=$news;
            $data['recent']=$recent;
            $data['populars']=$populars;
            $data['lookalikes']=$lookalikes;
            $data['btnPrev']=$btnPrev;
            $data['btnNext']=$btnNext;

            return view('User.detail',$data);
        }

    }

}

