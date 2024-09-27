<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;
use App\Http\Requests\PersonalsRequest;
use App\Models\personals;
use Illuminate\Support\Facades\DB;

class PersonalsController extends Controller{

    public function regAdmin(PersonalsRequest $request){
        $contact = new Personals();
        $contact->personal_password=$request->input('personal_password');
        $contact->personal_email=$request->input('personal_email');
        $contact->save();
        return redirect()->to(route('reg.adm'));

    }
    public function loginAdmin(Request $request4)
    {

        $contact4 = new Personals();
        $contact4->personal_password = $request4->input('personal_password');
        $contact4->personal_email = $request4->input('personal_email');


        $request = $contact4->getAttributeValue('personal_password');
        $request1 = $contact4->getAttributeValue('personal_email');
        $n = 1;


        for($n; $n < 100; $n++) {

            $request3 =  DB::table('personals')->where('id',$n)->value('personal_password');
            $request2 = DB::table('personals')->where('id',$n)->value('personal_email');
            if ($request == $request3) {
                if ($request1 == $request2){

                    return redirect()->to(route('reg.adm'));

                }
            }
        }
        return "wrong date";
    }





}
