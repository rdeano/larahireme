<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Hash;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $controller = "profile";
        $userid = Auth::id();

        $userinfo = DB::table('users')
                  ->where('id',$userid)
                  ->get();


        $userworks = DB::table('works')
                  ->where('user_id',$userid)
                  ->get();

        $categories = DB::table('category')
                  ->select('*')
                  ->get();

        return view('profile.index')
              ->with('userinfo',$userinfo)
              ->with('userworks',$userworks)
              ->with('controller', $controller)
              ->with('categories',$categories);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $userid = Auth::id();

        $this->validate($request,[
            'username' => 'required'
        ]);


        if ($request->file('profileimage') == "") {
            $path =  $request->oldpicture;
        }else {
            $path = $request->file('profileimage')->store('upload') ;
        }

        if ($request->password != '!password') {
          DB::table('users')
            ->where('id', $id)
            ->update([
                'category_id' => $request->category,
                'name' => $request->name ,
                'email' =>  $request->email,
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'address' =>  $request->address,
                'services' => $request->services,
                'contactnumber' =>  $request->contactnum,
                'profile_picture' => $path
            ]);
        }else {
            DB::table('users')
              ->where('id', $id)
              ->update([
                  'category_id' => $request->category,
                  'name' => $request->name ,
                  'email' =>  $request->email,
                  'username' => $request->username,
                  'address' =>  $request->address,
                  'services' => $request->services,
                  'contactnumber' =>  $request->contactnum,
                  'profile_picture' => $path
              ]);
        }


        $total = count($_FILES['worksphoto']['name']);

        // loop through each file
        for ($i=0;$i<$total;$i++) {
            //Get the temp file path
            $tmpFilePath = $_FILES['worksphoto']['tmp_name'][$i];

            //Make sure we have a file path
            if ($tmpFilePath != ""){
              //Setup our new file path
              $filename= $_FILES['worksphoto']['name'][$i];
              $filenametmp = explode(".",$filename);
              $ext = end($filenametmp);
              $picture = md5(basename($filename).microtime());

              $target_dir = "storage/app/upload/";
              $target_file = $target_dir . $picture .".".$ext;


              //Upload the file into the temp dir
              if(move_uploaded_file($tmpFilePath, $target_file)) {
                  DB::table('works')->insert(
                      [
                        'user_id' => $userid,
                        'photo' => 'upload/'.$picture.'.'.$ext

                      ]

                  );
              }
            }
        }



        return redirect('profile')->
          with('success','Profile has been updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
