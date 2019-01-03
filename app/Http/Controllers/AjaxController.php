<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AjaxController extends Controller
{

    public function create() {
      echo 'hello world';
    }

    public function createQuery() {
        $userid = $_GET['userid'];

        DB::table('works')->where('user_id',$userid)->delete();
        echo '1';

    }

    public function selectQuery() {
        $action = $_GET["action"];

        if ($action == "selectworksphoto") {
            $userid = $_GET["userid"];

            $worksphoto = DB::table('works')
                        ->where('user_id',$userid)
                        ->get();

            echo json_encode($worksphoto);
        }
    }


}
