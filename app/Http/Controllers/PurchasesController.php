<?php

namespace App\Http\Controllers;

use App\Models\Purchases; // Исправленное использование модели
use App\stars;
use Illuminate\Http\Request;

class PurchasesController extends Controller
{
    public function buyStars(Request $request) // Используем Request для получения данных
    {
        // Валидация входящих данных
        $request->validate([
            'clients_email' => 'required|email',
            'clients_password' => 'required|string',
            'stars_id' => 'required|integer|exists:stars,id', // Проверяем наличие звезды
        ]);

        // Создаем новую запись покупки
        $purchase = new Purchases();
        $star=new stars();
        $purchase->clients_email = $request->input('clients_email'); // Используем clients_email
        $purchase->clients_password = $request->input('clients_password');
        $purchase->stars_id = $request->input('stars_id');
        $purchase->save();
        // Знайти зірку в базі даних
        // Отримати ID зірки з запиту
        $starId = $request->input('stars_id');
        $star = stars::find($starId);

        if ($star) {
            // Змінити статус зірки
            $star->star_status = 'sold'; // або будь-який інший статус, який вам потрібен
            $star->save(); // Зберегти зміни у базі даних
        }

        // Перенаправляем на страницу профиля после успешной покупки
        return redirect()->route('profile');
    }
}
