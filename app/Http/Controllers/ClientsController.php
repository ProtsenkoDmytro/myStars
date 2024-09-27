<?php

namespace App\Http\Controllers;



use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\Http\Requests\ClientsRequest;
use App\Models\Clients;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;

class ClientsController extends Controller
{
    public function addClients(ClientsRequest $request3)
    {
        $contact3 = new Clients();
        $contact3->clients_password=$request3->input('clients_password');
        $contact3->clients_name=$request3->input('clients_name');
        $contact3->clients_surname=$request3->input('clients_surname');
        $contact3->clients_number=$request3->input('clients_number');
        $contact3->clients_email=$request3->input('clients_email');

        $contact3->save();
        return redirect()->to(route('reg.person'));
    }
    public function loginClient(Request $request4)
    {

        $contact4 = new Clients();
        $contact4->clients_password = $request4->input('clients_password');
        $contact4->clients_email = $request4->input('clients_email');


        $request = $contact4->getAttributeValue('clients_password');
        $request1 = $contact4->getAttributeValue('clients_email');
        $n = 1;


        for($n; $n < 100; $n++) {

            $request3 = DB::table('clients')->where('id',$n)->value('clients_password');
            $request2 = DB::table('clients')->where('id',$n)->value('clients_email');
            if ($request == $request3) {
                if ($request1 == $request2){



                    return redirect()->to(route('aut.profile'));
                }

            }

        }

        return "Invalid date";
    }

}
