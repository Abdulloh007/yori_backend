<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'Курьерские услуги',
            'tj_name' => 'Хизматрасонии курьерӣ'
        ]);
        
        DB::table('categories')->insert([
            'name' => 'Ремонт и строительство',
            'tj_name' => 'Таъмир ва сохтмон'
        ]);

        DB::table('categories')->insert([
            'name' => 'Грузоперевозки',
            'tj_name' => 'Интиқоли бор'
        ]);

        DB::table('categories')->insert([
            'name' => 'Уборка и помощь по хозяйству',
            'tj_name' => 'Тозакунӣ ва кӯмак дар корҳои хона'
        ]);

        DB::table('categories')->insert([
            'name' => 'Виртуальный помощник',
            'tj_name' => 'Ёрдамчии виртуалӣ'
        ]);

        DB::table('categories')->insert([
            'name' => 'Компьютерная помощь',
            'tj_name' => 'Кӯмаки компютер'
        ]);

        DB::table('categories')->insert([
            'name' => 'Мероприятия и промоакции',
            'tj_name' => 'Чорабиниҳо ва таблиғот'
        ]);

        DB::table('categories')->insert([
            'name' => 'Дизайн',
            'tj_name' => 'Тарҳрезӣ'
        ]);

        DB::table('categories')->insert([
            'name' => 'Разработка ПО',
            'tj_name' => 'Таҳияи нармафзор'
        ]);

        DB::table('categories')->insert([
            'name' => 'Фото, видео и аудио',
            'tj_name' => 'Фото, видео ва аудио'
        ]);

        DB::table('categories')->insert([
            'name' => 'Установка и ремонт техники',
            'tj_name' => 'Монтаж ва таъмири тачхизот'
        ]);

        DB::table('categories')->insert([
            'name' => 'Красота и здоровье',
            'tj_name' => 'зебоӣ ва саломатӣ'
        ]);

        DB::table('categories')->insert([
            'name' => 'Ремонт цифровой техники',
            'tj_name' => 'Таъмири таҷҳизоти рақамӣ'
        ]);

        DB::table('categories')->insert([
            'name' => 'Юридическая и бухгалтерская помощь',
            'tj_name' => 'Кӯмаки ҳуқуқӣ ва ҳисобдорӣ'
        ]);

        DB::table('categories')->insert([
            'name' => 'Репетиторы и обучение',
            'tj_name' => 'Мураббиҳо ва омӯзиш'
        ]);

        DB::table('categories')->insert([
            'name' => 'Ремонт транспорта',
            'tj_name' => 'Таъмири нақлиёт'
        ]);
    }
}
