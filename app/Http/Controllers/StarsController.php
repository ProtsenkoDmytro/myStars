<?php

namespace App\Http\Controllers;

use App\Http\Requests\StarsRequest;

use App\Models\stars;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
class StarsController extends Controller
{
    // Метод для добавления звезд
    public function addStars(StarsRequest $request)
    {
        $star = new Stars();
        $star->star_name = $request->input('star_name');
        $star->star_description = $request->input('star_description');
        $star->star_price = $request->input('star_price');
        $star->star_status='1';
        $star->save();  // Сохраняем запись в базе данных

        return redirect()->to(route('reg.adm'));
    }

}
