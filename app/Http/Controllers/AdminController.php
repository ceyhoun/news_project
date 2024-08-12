<?php

namespace App\Http\Controllers;

use App\Models\Xeber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use PharIo\Manifest\Author;

class AdminController extends Controller
{


    //test

    public function login()
    {
        return view('Admin.test');
    }

    public function logincreate(Request $request){
        if (Auth::attempt(["email"=>$request->email, "password"=>$request->password])) {
            return redirect()->route('home');
        } }


    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function admindex()
    {

        //Xeber::whereId(1)->delete();
        //Xeber::create(['name'=>'test1','status'=>'1']);
        //Xeber::whereId(2)->update(['name'=>'test3']);
        //$read =Xeber::whereId(2)->get;
        return view('Admin.index');
    }

    //post
    public function news()
    {
        $authors = DB::table('authors')->select('id', 'name')->get();

        $onlycategory=DB::table('category')->where('status',1)->select()->get();
        $data['onlycategory']=$onlycategory;

        $data['authors']=$authors;
        return view('Admin.pages.forms.addnews',$data);
    }

    public function addnews(Request $request)
    {
        $rules = [
            'image' => 'required',
        ];

        $message = [
            'image.required' => 'Zeruri',
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            return $validator->errors()->first();
        }
        ;

        $title = $request->title;
        $content = $request->content;
        $author = $request->integer('author');
        $category = $request->integer('categoryID');
        $status = $request->has('check') ? 1 : 0;
        $slider = $request->has('slider') ? 1 : 0;

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $image = "images/" . $imageName;



        $insert = DB::table('form')->insert([
            'title' => $title,
            'content' => $content,
            'status' => $status,
            'authorID'=>$author,
            'categoryID'=>$category,
            'position' => $slider,
            'image' => $image,
        ]);



        if ($insert) {
            return redirect()->route('allnews')->with('success', 'Haber başarıyla eklendi.');
        }
        return redirect()->route('allnews')->with('error', 'Haber eklenirken bir hata oluştu.');
    }

    public function alldata()
    {
        $selectdata = DB::table('form')->paginate(5);


        if ($selectdata) {
            return view('Admin.pages.forms.form', ['data' => $selectdata]);
        }
    }

    public function delete($id)
    {
        $delete_query = DB::table('form')->where('id', $id)->delete();

        if ($delete_query) {
            return redirect()->back();
        }
    }

    //category

    public function category()
    {
        return view('Admin.pages.forms.category');
    }

    public function addcategory(Request $request)
    {
        //  abort(403, 'Unauthorized action.');


        $rules = [
            'cattitle' => 'required|min:3',
        ];

        $messages = [
            'cattitle.required' => 'Zeruri',
            'cattitle.min' => 'Minimum 3 simvol olmalıdır'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $response = [
                'title' => 'Xeta',
                'status' => 'error',
                'message' => $validator->errors()->first(),
            ];

            return response()->json($response);
        }

        $categories = DB::table('category')->insert(
            [
                'name' => $request->cattitle,
                'status' => $request->has('catcheck') ? 1 : 0
            ]
        );

        if (!$categories) {
            $response = [
                'title' => 'Xeta',
                'status' => 'error',
                'message' => 'Yükleme Uğursuz Oldu'
            ];
        } else {
            $response = [
                'title' => 'Uğurlu',
                'status' => 'success',
                'message' => 'Məlumat uğurla bazaya daxil edildi :)))'
            ];
        }

        return response()->json($response);

    }

    //advert
    public function advert()
    {
        return view('Admin.pages.forms.advert');
    }

    public function addadvert(Request $request)
    {

        $rules = [
            'adurl' => 'required',
        ];

        $message = [
            'adurl.required' => 'Link Zeruridir',
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            $response = [
                'title' => 'Xeta',
                'status' => 'error',
                'message' => $validator->errors()->first()
            ];

            return response()->json($response);
        }

        $imagename = time() . '.' . $request->authorimage->extension();
        $request->authorimage->move(public_path('authors'), $imagename);
        $file = "authors/" . $imagename;




        $advert = DB::table('advert')->insert([
            'name' => $request->adtitle,
            'content' => $request->adcontent,
            'url' => $request->adurl,
            'image' => $file,
            'status' => $request->has('adcheck') ? 1 : 0
        ]);
        if (!$advert) {
            $response = [
                'title' => 'Xeta',
                'status' => 'error',
                'message' => 'Yükleme Uğursuz Oldu',
            ];
        } else {
            $response = [
                'title' => 'Uğurlu',
                'status' => 'success',
                'message' => 'Məlumat uğurla bazaya daxil edildi',
            ];
        }

        return response()->json($response);
    }

    public function author()
    {
        return view('Admin.pages.forms.addauthor');
    }

    public function addauthor(Request $request)
    {
        $rules = [
            'authorname' => 'required',
            'authorsurname' => 'required',
        ];

        $message = [
            'authorname.required' => 'Ad Yazılmalıdır !',
            'authorsurname.required' => 'Soyad Yazılmalıdır !',
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            $response = [
                'title' => 'Xeta! ',
                'status' => 'error',
                'message' => $validator->errors()->first()
            ];

            return response()->json($response);
        }



        $imagename = time() . '.' . $request->authorimage->extension();
        $request->authorimage->move(public_path('authors'), $imagename);
        $file = "authors/" . $imagename;


        $author = DB::table('authors')->insert([
            'name' => $request->authorname,
            'surname' => $request->authorsurname,
            'file' => $file,
            'check' => $request->has('check') ? 1 : 0
        ]);

        if (!$author) {
            $response = [
                'title' => 'Xeta',
                'status' => 'error',
                'message' => 'Məlumat bazaya daxil edile bilmedi !.',
            ];
        } else {
            $response = [
                'title' => "Uğurlu",
                'status' => 'success',
                'message' => 'Məlumat uğurla bazaya daxil edildi'
            ];
        }

        return response()->json($response);
    }

}
