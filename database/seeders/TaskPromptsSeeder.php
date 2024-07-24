<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskPromptsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка документов и писем по городу в течение дня.',
            'prompt_tj' => '',
            'subcategory_id' => 1
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка медицинских препаратов и рецептов на дом.',
            'prompt_tj' => '',
            'subcategory_id' => 1
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Срочная доставка небольших посылок и пакетов.',
            'prompt_tj' => '',
            'subcategory_id' => 1
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка продуктов и товаров из ближайших магазинов.',
            'prompt_tj' => '',
            'subcategory_id' => 1
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка цветов и подарков к праздникам и торжествам.',
            'prompt_tj' => '',
            'subcategory_id' => 1
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка интернет-заказов и покупок.',
            'prompt_tj' => '',
            'subcategory_id' => 1
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Поручения по доставке мелких товаров и аксессуаров.',
            'prompt_tj' => '',
            'subcategory_id' => 1
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка ключей, банковских карт и других важных мелочей.',
            'prompt_tj' => '',
            'subcategory_id' => 1
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Забор и доставка одежды из химчисток и прачечных.',
            'prompt_tj' => '',
            'subcategory_id' => 1
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Курьерская доставка для офисных нужд и сотрудников.',
            'prompt_tj' => '',
            'subcategory_id' => 1
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка крупногабаритных товаров и мебели.',
            'prompt_tj' => '',
            'subcategory_id' => 2
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Перевозка строительных материалов на объект.',
            'prompt_tj' => '',
            'subcategory_id' => 2
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Срочная доставка документов и посылок по городу.',
            'prompt_tj' => '',
            'subcategory_id' => 2
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка покупок из крупных гипермаркетов и торговых центров.',
            'prompt_tj' => '',
            'subcategory_id' => 2
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка заказов из интернет-магазинов до двери клиента.',
            'prompt_tj' => '',
            'subcategory_id' => 2
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Перевозка бытовой техники и электроники.',
            'prompt_tj' => '',
            'subcategory_id' => 2
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка цветов и подарков с соблюдением сроков.',
            'prompt_tj' => '',
            'subcategory_id' => 2
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Экспресс-доставка товаров для бизнеса и офисов.',
            'prompt_tj' => '',
            'subcategory_id' => 2
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Перевозка спортивного инвентаря и оборудования.',
            'prompt_tj' => '',
            'subcategory_id' => 2
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка медицинских товаров и оборудования.',
            'prompt_tj' => '',
            'subcategory_id' => 2
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Покупка и доставка продуктов из супермаркетов.',
            'prompt_tj' => '',
            'subcategory_id' => 3
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Покупка и доставка медикаментов и аптечных товаров.',
            'prompt_tj' => '',
            'subcategory_id' => 3
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Покупка и доставка бытовой химии и хозяйственных товаров.',
            'prompt_tj' => '',
            'subcategory_id' => 3
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Покупка и доставка одежды и обуви.',
            'prompt_tj' => '',
            'subcategory_id' => 3
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Покупка и доставка канцелярских товаров для офиса.',
            'prompt_tj' => '',
            'subcategory_id' => 3
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Покупка и доставка подарков и сувениров.',
            'prompt_tj' => '',
            'subcategory_id' => 3
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Покупка и доставка книг и учебных материалов.',
            'prompt_tj' => '',
            'subcategory_id' => 3
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Покупка и доставка детских игрушек и товаров.',
            'prompt_tj' => '',
            'subcategory_id' => 3
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Покупка и доставка электроники и гаджетов.',
            'prompt_tj' => '',
            'subcategory_id' => 3
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Покупка и доставка товаров для дома и интерьера.',
            'prompt_tj' => '',
            'subcategory_id' => 3
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Экспресс-доставка документов и ценных бумаг.',
            'prompt_tj' => '',
            'subcategory_id' => 4
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Срочная доставка медицинских препаратов и оборудования.',
            'prompt_tj' => '',
            'subcategory_id' => 4
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Экспресс-доставка интернет-заказов и покупок.',
            'prompt_tj' => '',
            'subcategory_id' => 4
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Срочная доставка цветов и подарков к праздникам.',
            'prompt_tj' => '',
            'subcategory_id' => 4
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка еды и готовых блюд из ресторанов и кафе.',
            'prompt_tj' => '',
            'subcategory_id' => 4
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Экспресс-доставка товаров для бизнеса и офисов.',
            'prompt_tj' => '',
            'subcategory_id' => 4
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Срочная доставка строительных материалов и инструментов.',
            'prompt_tj' => '',
            'subcategory_id' => 4
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Экспресс-доставка одежды и аксессуаров.',
            'prompt_tj' => '',
            'subcategory_id' => 4
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Срочная доставка технического и спортивного оборудования.',
            'prompt_tj' => '',
            'subcategory_id' => 4
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Экспресс-доставка посылок и пакетов в пределах города.',
            'prompt_tj' => '',
            'subcategory_id' => 4
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка свежих овощей и фруктов с фермерских рынков.',
            'prompt_tj' => '',
            'subcategory_id' => 5
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка мясных и рыбных продуктов на дом.',
            'prompt_tj' => '',
            'subcategory_id' => 5
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка молочных продуктов и сыра.',
            'prompt_tj' => '',
            'subcategory_id' => 5
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка хлебобулочных изделий и выпечки.',
            'prompt_tj' => '',
            'subcategory_id' => 5
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка кондитерских изделий и тортов.',
            'prompt_tj' => '',
            'subcategory_id' => 5
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка замороженных продуктов и полуфабрикатов.',
            'prompt_tj' => '',
            'subcategory_id' => 5
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка напитков и соков.',
            'prompt_tj' => '',
            'subcategory_id' => 5
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка бакалеи и консервированных продуктов.',
            'prompt_tj' => '',
            'subcategory_id' => 5
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка экзотических продуктов и деликатесов.',
            'prompt_tj' => '',
            'subcategory_id' => 5
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка продуктов по подписке или регулярным заказам.',
            'prompt_tj' => '',
            'subcategory_id' => 5
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка блюд из любимых ресторанов и кафе.',
            'prompt_tj' => '',
            'subcategory_id' => 6
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка пиццы и суши с горячей доставкой.',
            'prompt_tj' => '',
            'subcategory_id' => 6
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка фастфуда и сетов на компанию.',
            'prompt_tj' => '',
            'subcategory_id' => 6
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка готовых обедов и ужинов на дом.',
            'prompt_tj' => '',
            'subcategory_id' => 6
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка десертов и сладостей из кондитерских.',
            'prompt_tj' => '',
            'subcategory_id' => 6
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка еды на корпоративные мероприятия и вечеринки.',
            'prompt_tj' => '',
            'subcategory_id' => 6
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка диетических и вегетарианских блюд.',
            'prompt_tj' => '',
            'subcategory_id' => 6
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка еды для специальных мероприятий (банкетов, свадеб).',
            'prompt_tj' => '',
            'subcategory_id' => 6
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка напитков и коктейлей к еде.',
            'prompt_tj' => '',
            'subcategory_id' => 6
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка детских блюд и меню для малышей.',
            'prompt_tj' => '',
            'subcategory_id' => 6
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Курьер для выполнения ежедневных поручений и задач.',
            'prompt_tj' => '',
            'subcategory_id' => 7
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Курьер для доставки документов и посылок в течение дня.',
            'prompt_tj' => '',
            'subcategory_id' => 7
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Курьер для выполнения покупок и доставки товаров.',
            'prompt_tj' => '',
            'subcategory_id' => 7
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Курьер для сопровождения и выполнения личных поручений.',
            'prompt_tj' => '',
            'subcategory_id' => 7
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Курьер для выполнения офисных задач и поручений.',
            'prompt_tj' => '',
            'subcategory_id' => 7
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Курьер для доставки еды и продуктов на регулярной основе.',
            'prompt_tj' => '',
            'subcategory_id' => 7
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Курьер для работы на временных или сезонных проектах.',
            'prompt_tj' => '',
            'subcategory_id' => 7
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Курьер для обслуживания мероприятий и торжеств.',
            'prompt_tj' => '',
            'subcategory_id' => 7
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Курьер для доставки подарков и сюрпризов.',
            'prompt_tj' => '',
            'subcategory_id' => 7
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Курьер для выполнения специальных поручений и задач.',
            'prompt_tj' => '',
            'subcategory_id' => 7
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка нестандартных и крупных грузов.',
            'prompt_tj' => '',
            'subcategory_id' => 8
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка специализированных товаров и оборудования.',
            'prompt_tj' => '',
            'subcategory_id' => 8
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка документов и посылок по междугородним маршрутам.',
            'prompt_tj' => '',
            'subcategory_id' => 8
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка деликатных и хрупких грузов.',
            'prompt_tj' => '',
            'subcategory_id' => 8
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка посылок в труднодоступные районы.',
            'prompt_tj' => '',
            'subcategory_id' => 8
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка товаров для бизнеса и производства.',
            'prompt_tj' => '',
            'subcategory_id' => 8
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка медицинских препаратов и оборудования.',
            'prompt_tj' => '',
            'subcategory_id' => 8
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка спортивного инвентаря и оборудования.',
            'prompt_tj' => '',
            'subcategory_id' => 8
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка мебели и предметов интерьера.',
            'prompt_tj' => '',
            'subcategory_id' => 8
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Доставка ценных грузов с соблюдением мер безопасности.',
            'prompt_tj' => '',
            'subcategory_id' => 8
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Быстрое решение мелких бытовых проблем и задач по дому.',
            'prompt_tj' => '',
            'subcategory_id' => 9
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Ремонт и замена сантехники.',
            'prompt_tj' => '',
            'subcategory_id' => 9
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Электромонтажные работы.',
            'prompt_tj' => '',
            'subcategory_id' => 9
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Мелкий ремонт мебели.',
            'prompt_tj' => '',
            'subcategory_id' => 9
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Установка и настройка бытовой техники.',
            'prompt_tj' => '',
            'subcategory_id' => 9
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Мелкие малярные работы.',
            'prompt_tj' => '',
            'subcategory_id' => 9
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Ремонт замков и дверей.',
            'prompt_tj' => '',
            'subcategory_id' => 9
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Установка полок и карнизов.',
            'prompt_tj' => '',
            'subcategory_id' => 9
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Мелкий ремонт окон и дверей.',
            'prompt_tj' => '',
            'subcategory_id' => 9
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Настройка и ремонт электроники.',
            'prompt_tj' => '',
            'subcategory_id' => 9
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Комплексный ремонт квартир и домов.',
            'prompt_tj' => '',
            'subcategory_id' => 10
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Разработка дизайн-проекта.',
            'prompt_tj' => '',
            'subcategory_id' => 10
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Полный спектр ремонтных работ.',
            'prompt_tj' => '',
            'subcategory_id' => 10
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Сантехнические работы.',
            'prompt_tj' => '',
            'subcategory_id' => 10
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Электромонтажные работы.',
            'prompt_tj' => '',
            'subcategory_id' => 10
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Отделочные работы.',
            'prompt_tj' => '',
            'subcategory_id' => 10
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Установка дверей и окон.',
            'prompt_tj' => '',
            'subcategory_id' => 10
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Укладка полов и плитки.',
            'prompt_tj' => '',
            'subcategory_id' => 10
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Монтаж потолков.',
            'prompt_tj' => '',
            'subcategory_id' => 10
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Фасадные работы.',
            'prompt_tj' => '',
            'subcategory_id' => 10
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Установка и замена сантехнического оборудования.',
            'prompt_tj' => '',
            'subcategory_id' => 11
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Ремонт водопроводных труб и систем.',
            'prompt_tj' => '',
            'subcategory_id' => 11
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Устранение засоров и протечек.',
            'prompt_tj' => '',
            'subcategory_id' => 11
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Монтаж и ремонт отопительных систем.',
            'prompt_tj' => '',
            'subcategory_id' => 11
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Установка и настройка водонагревателей.',
            'prompt_tj' => '',
            'subcategory_id' => 11
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Монтаж систем водоочистки.',
            'prompt_tj' => '',
            'subcategory_id' => 11
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Установка и замена смесителей и кранов.',
            'prompt_tj' => '',
            'subcategory_id' => 11
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Ремонт и замена санузлов и ванной комнаты.',
            'prompt_tj' => '',
            'subcategory_id' => 11
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Прокладка новых трубопроводов.',
            'prompt_tj' => '',
            'subcategory_id' => 11
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Диагностика и профилактика сантехнических систем.',
            'prompt_tj' => '',
            'subcategory_id' => 11
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Установка и замена электрических розеток и выключателей.',
            'prompt_tj' => '',
            'subcategory_id' => 12
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Монтаж электропроводки в жилых и коммерческих помещениях.',
            'prompt_tj' => '',
            'subcategory_id' => 12
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Установка и подключение светильников и люстр.',
            'prompt_tj' => '',
            'subcategory_id' => 12
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Монтаж и ремонт электрических щитов и автоматов.',
            'prompt_tj' => '',
            'subcategory_id' => 12
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Установка и настройка систем умного дома.',
            'prompt_tj' => '',
            'subcategory_id' => 12
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Устранение коротких замыканий и неисправностей.',
            'prompt_tj' => '',
            'subcategory_id' => 12
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Монтаж системы заземления.',
            'prompt_tj' => '',
            'subcategory_id' => 12
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Прокладка кабельных каналов и проводов.',
            'prompt_tj' => '',
            'subcategory_id' => 12
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Установка и подключение бытовой техники.',
            'prompt_tj' => '',
            'subcategory_id' => 12
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Диагностика и проверка электрических систем.',
            'prompt_tj' => '',
            'subcategory_id' => 12
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Покраска стен и потолков.',
            'prompt_tj' => '',
            'subcategory_id' => 13
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Поклейка обоев и настенных покрытий.',
            'prompt_tj' => '',
            'subcategory_id' => 13
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Штукатурные и шпаклевочные работы.',
            'prompt_tj' => '',
            'subcategory_id' => 13
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Монтаж гипсокартонных конструкций.',
            'prompt_tj' => '',
            'subcategory_id' => 13
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Декоративная отделка стен и потолков.',
            'prompt_tj' => '',
            'subcategory_id' => 13
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Укладка плитки и мозаики.',
            'prompt_tj' => '',
            'subcategory_id' => 13
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Монтаж напольных покрытий.',
            'prompt_tj' => '',
            'subcategory_id' => 13
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Отделка балконов и лоджий.',
            'prompt_tj' => '',
            'subcategory_id' => 13
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Установка плинтусов и молдингов.',
            'prompt_tj' => '',
            'subcategory_id' => 13
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Ремонт и отделка фасадов.',
            'prompt_tj' => '',
            'subcategory_id' => 13
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Монтаж натяжных потолков.',
            'prompt_tj' => '',
            'subcategory_id' => 14
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Установка подвесных потолков.',
            'prompt_tj' => '',
            'subcategory_id' => 14
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Покраска и шпаклевка потолков.',
            'prompt_tj' => '',
            'subcategory_id' => 14
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Монтаж гипсокартонных потолков.',
            'prompt_tj' => '',
            'subcategory_id' => 14
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Установка светильников и подсветки.',
            'prompt_tj' => '',
            'subcategory_id' => 14
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Ремонт и замена потолочных плит.',
            'prompt_tj' => '',
            'subcategory_id' => 14
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Монтаж потолочных карнизов.',
            'prompt_tj' => '',
            'subcategory_id' => 14
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Декоративная отделка потолков.',
            'prompt_tj' => '',
            'subcategory_id' => 14
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Утепление потолков.',
            'prompt_tj' => '',
            'subcategory_id' => 14
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Очистка и покраска потолочных балок.',
            'prompt_tj' => '',
            'subcategory_id' => 14
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Укладка ламината и паркета.',
            'prompt_tj' => '',
            'subcategory_id' => 15
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Монтаж керамической плитки и керамогранита.',
            'prompt_tj' => '',
            'subcategory_id' => 15
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Укладка ковровых покрытий и линолеума.',
            'prompt_tj' => '',
            'subcategory_id' => 15
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Монтаж теплых полов.',
            'prompt_tj' => '',
            'subcategory_id' => 15
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Ремонт и замена полов.',
            'prompt_tj' => '',
            'subcategory_id' => 15
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Шлифовка и лакировка деревянных полов.',
            'prompt_tj' => '',
            'subcategory_id' => 15
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Укладка наливных полов.',
            'prompt_tj' => '',
            'subcategory_id' => 15
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Монтаж плин',
            'prompt_tj' => '',
            'subcategory_id' => 15
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Выравнивание полов.',
            'prompt_tj' => '',
            'subcategory_id' => 15
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Укладка пробковых покрытий.',
            'prompt_tj' => '',
            'subcategory_id' => 15
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Укладка керамической плитки в ванной и кухне.",
            'prompt_tj' => '',
            'subcategory_id' => 16
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Монтаж мозаичных покрытий.",
            'prompt_tj' => '',
            'subcategory_id' => 16
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Ремонт и замена старой плитки.",
            'prompt_tj' => '',
            'subcategory_id' => 16
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Укладка плитки на полы и стены.",
            'prompt_tj' => '',
            'subcategory_id' => 16
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Подготовка поверхности перед укладкой плитки.",
            'prompt_tj' => '',
            'subcategory_id' => 16
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Гидроизоляция и затирка швов.",
            'prompt_tj' => '',
            'subcategory_id' => 16
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Укладка плитки в санузлах и душевых.",
            'prompt_tj' => '',
            'subcategory_id' => 16
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Укладка декоративной плитки и панно.",
            'prompt_tj' => '',
            'subcategory_id' => 16
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Реставрация и ремонт плиточных покрытий.",
            'prompt_tj' => '',
            'subcategory_id' => 16
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Укладка плитки в общественных и коммерческих помещениях.",
            'prompt_tj' => '',
            'subcategory_id' => 16
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Сборка новой мебели из магазина.",
            'prompt_tj' => '',
            'subcategory_id' => 17
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Ремонт и реставрация старой мебели.",
            'prompt_tj' => '',
            'subcategory_id' => 17
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Перетяжка и ремонт мягкой мебели.",
            'prompt_tj' => '',
            'subcategory_id' => 17
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Установка кухонных гарнитуров.",
            'prompt_tj' => '',
            'subcategory_id' => 17
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Сборка шкафов и гардеробных.",
            'prompt_tj' => '',
            'subcategory_id' => 17
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Ремонт и замена фурнитуры.",
            'prompt_tj' => '',
            'subcategory_id' => 17
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Установка встроенной мебели.",
            'prompt_tj' => '',
            'subcategory_id' => 17
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Ремонт и сборка офисной мебели.",
            'prompt_tj' => '',
            'subcategory_id' => 17
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Монтаж и ремонт дверей шкафов.",
            'prompt_tj' => '',
            'subcategory_id' => 17
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Изготовление мебели на заказ.",
            'prompt_tj' => '',
            'subcategory_id' => 17
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Установка новых дверей.",
            'prompt_tj' => '',
            'subcategory_id' => 18
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Ремонт и регулировка дверных замков.",
            'prompt_tj' => '',
            'subcategory_id' => 18
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Установка межкомнатных дверей.",
            'prompt_tj' => '',
            'subcategory_id' => 18
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Установка входных металлических дверей.",
            'prompt_tj' => '',
            'subcategory_id' => 18
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Ремонт дверных ручек и петель.",
            'prompt_tj' => '',
            'subcategory_id' => 18
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Установка дверных доводчиков.",
            'prompt_tj' => '',
            'subcategory_id' => 18
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Утепление дверей и дверных проемов.",
            'prompt_tj' => '',
            'subcategory_id' => 18
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Установка раздвижных дверей.",
            'prompt_tj' => '',
            'subcategory_id' => 18
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Ремонт и замена замков.",
            'prompt_tj' => '',
            'subcategory_id' => 18
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Монтаж и установка дверных коробок.",
            'prompt_tj' => '',
            'subcategory_id' => 18
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Установка пластиковых окон.",
            'prompt_tj' => '',
            'subcategory_id' => 19
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Ремонт и регулировка оконных конструкций.",
            'prompt_tj' => '',
            'subcategory_id' => 19
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Утепление и остекление балконов.",
            'prompt_tj' => '',
            'subcategory_id' => 19
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Установка деревянных окон.",
            'prompt_tj' => '',
            'subcategory_id' => 19
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Монтаж и установка подоконников.",
            'prompt_tj' => '',
            'subcategory_id' => 19
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Установка москитных сеток.",
            'prompt_tj' => '',
            'subcategory_id' => 19
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Замена стеклопакетов.",
            'prompt_tj' => '',
            'subcategory_id' => 19
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Ремонт оконных рам и уплотнителей.",
            'prompt_tj' => '',
            'subcategory_id' => 19
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Остекление террас и лоджий.",
            'prompt_tj' => '',
            'subcategory_id' => 19
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Установка жалюзи и роллет.",
            'prompt_tj' => '',
            'subcategory_id' => 19
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Монтаж и ремонт кровли.",
            'prompt_tj' => '',
            'subcategory_id' => 20
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Утепление фасадов.",
            'prompt_tj' => '',
            'subcategory_id' => 20
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Ремонт и замена водостоков.",
            'prompt_tj' => '',
            'subcategory_id' => 20
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Монтаж фасадных панелей.",
            'prompt_tj' => '',
            'subcategory_id' => 20
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Гидроизоляция кровли и фасадов.",
            'prompt_tj' => '',
            'subcategory_id' => 20
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Покраска и ремонт фасадов.",
            'prompt_tj' => '',
            'subcategory_id' => 20
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Установка кровельных окон и люков.",
            'prompt_tj' => '',
            'subcategory_id' => 20
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Монтаж софитов и карнизов.",
            'prompt_tj' => '',
            'subcategory_id' => 20
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Ремонт и обслуживание мягкой кровли.",
            'prompt_tj' => '',
            'subcategory_id' => 20
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Монтаж систем антиобледенения.",
            'prompt_tj' => '',
            'subcategory_id' => 20
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Монтаж и ремонт систем отопления.",
            'prompt_tj' => '',
            'subcategory_id' => 21
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Установка и замена радиаторов.",
            'prompt_tj' => '',
            'subcategory_id' => 21
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Монтаж систем водоснабжения.",
            'prompt_tj' => '',
            'subcategory_id' => 21
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Ремонт и прочистка канализационных систем.",
            'prompt_tj' => '',
            'subcategory_id' => 21
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Установка водонагревателей и бойлеров.",
            'prompt_tj' => '',
            'subcategory_id' => 21
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Монтаж теплых полов.",
            'prompt_tj' => '',
            'subcategory_id' => 21
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Установка и замена водосчетчиков.",
            'prompt_tj' => '',
            'subcategory_id' => 21
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Диагностика и ремонт утечек.",
            'prompt_tj' => '',
            'subcategory_id' => 21
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Монтаж насосных станций.",
            'prompt_tj' => '',
            'subcategory_id' => 21
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Установка систем фильтрации воды.",
            'prompt_tj' => '',
            'subcategory_id' => 21
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Утепление стен и потолков.",
            'prompt_tj' => '',
            'subcategory_id' => 22
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Шумоизоляция помещений.",
            'prompt_tj' => '',
            'subcategory_id' => 22
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Гидроизоляция подвалов и фундаментов.",
            'prompt_tj' => '',
            'subcategory_id' => 22
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Утепление полов и чердаков.",
            'prompt_tj' => '',
            'subcategory_id' => 22
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Монтаж изоляционных материалов.",
            'prompt_tj' => '',
            'subcategory_id' => 22
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Утепление фасадов.",
            'prompt_tj' => '',
            'subcategory_id' => 22
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Изоляция труб и коммуникаций.",
            'prompt_tj' => '',
            'subcategory_id' => 22
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Утепление и гидроизоляция кровли.",
            'prompt_tj' => '',
            'subcategory_id' => 22
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Установка пароизоляции.",
            'prompt_tj' => '',
            'subcategory_id' => 22
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Диагностика и ремонт изоляционных покрытий.",
            'prompt_tj' => '',
            'subcategory_id' => 22
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Возведение стен и перегородок.",
            'prompt_tj' => '',
            'subcategory_id' => 23
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Монтаж перекрытий и лестниц.",
            'prompt_tj' => '',
            'subcategory_id' => 23
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Строительство гаражей и хозпостроек.",
            'prompt_tj' => '',
            'subcategory_id' => 23
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Монтаж каркасных конструкций.",
            'prompt_tj' => '',
            'subcategory_id' => 23
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Установка и ремонт заборов и ворот.",
            'prompt_tj' => '',
            'subcategory_id' => 23
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Строительство беседок и террас.",
            'prompt_tj' => '',
            'subcategory_id' => 23
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Монтаж и демонтаж строительных лесов.",
            'prompt_tj' => '',
            'subcategory_id' => 23
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Установка металлоконструкций.",
            'prompt_tj' => '',
            'subcategory_id' => 23
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Монтаж временных зданий и сооружений.",
            'prompt_tj' => '',
            'subcategory_id' => 23
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Строительство фундаментов.",
            'prompt_tj' => '',
            'subcategory_id' => 23
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Строительство жилых домов и коттеджей.",
            'prompt_tj' => '',
            'subcategory_id' => 24
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Строительство многоэтажных зданий.",
            'prompt_tj' => '',
            'subcategory_id' => 24
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Возведение промышленных объектов.",
            'prompt_tj' => '',
            'subcategory_id' => 24
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Строительство складских помещений.",
            'prompt_tj' => '',
            'subcategory_id' => 24
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Строительство коммерческой недвижимости.",
            'prompt_tj' => '',
            'subcategory_id' => 24
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Монолитное строительство.",
            'prompt_tj' => '',
            'subcategory_id' => 24
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Строительство спортивных объектов.",
            'prompt_tj' => '',
            'subcategory_id' => 24
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Строительство социальных объектов.",
            'prompt_tj' => '',
            'subcategory_id' => 24
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Строительство торговых центров.",
            'prompt_tj' => '',
            'subcategory_id' => 24
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Управление строительными проектами.",
            'prompt_tj' => '',
            'subcategory_id' => 24
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Установка охранных сигнализаций.",
            'prompt_tj' => '',
            'subcategory_id' => 25
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Монтаж видеонаблюдения.",
            'prompt_tj' => '',
            'subcategory_id' => 25
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Установка домофонов и видеодомофонов.",
            'prompt_tj' => '',
            'subcategory_id' => 25
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Монтаж систем контроля доступа.",
            'prompt_tj' => '',
            'subcategory_id' => 25
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Установка пожарных сигнализаций.",
            'prompt_tj' => '',
            'subcategory_id' => 25
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Ремонт и обслуживание охранных систем.",
            'prompt_tj' => '',
            'subcategory_id' => 25
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Монтаж датчиков движения и охранных зон.",
            'prompt_tj' => '',
            'subcategory_id' => 25
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Установка тревожных кнопок.",
            'prompt_tj' => '',
            'subcategory_id' => 25
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Монтаж систем автоматического оповещения.",
            'prompt_tj' => '',
            'subcategory_id' => 25
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Установка и настройка умных замков.",
            'prompt_tj' => '',
            'subcategory_id' => 25
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Вскрытие замков без повреждений.",
            'prompt_tj' => '',
            'subcategory_id' => 26
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Замена и ремонт замков после вскрытия.",
            'prompt_tj' => '',
            'subcategory_id' => 26
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Открытие автомобильных замков.",
            'prompt_tj' => '',
            'subcategory_id' => 26
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Вскрытие сейфов и банковских ячеек.",
            'prompt_tj' => '',
            'subcategory_id' => 26
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Вскрытие дверей и гаражных замков.",
            'prompt_tj' => '',
            'subcategory_id' => 26
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Изготовление дубликатов ключей.",
            'prompt_tj' => '',
            'subcategory_id' => 26
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Установка временных замков.",
            'prompt_tj' => '',
            'subcategory_id' => 26
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Консультация по безопасности замков.",
            'prompt_tj' => '',
            'subcategory_id' => 26
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Аварийное вскрытие замков.",
            'prompt_tj' => '',
            'subcategory_id' => 26
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Установка новых замков после вскрытия.",
            'prompt_tj' => '',
            'subcategory_id' => 26
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Консультации по ремонту и строительству.",
            'prompt_tj' => '',
            'subcategory_id' => 27
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Сметы и расчеты стоимости работ.",
            'prompt_tj' => '',
            'subcategory_id' => 27
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Управление строительными проектами.",
            'prompt_tj' => '',
            'subcategory_id' => 27
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Технический надзор за строительством.",
            'prompt_tj' => '',
            'subcategory_id' => 27
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Поставки строительных материалов.",
            'prompt_tj' => '',
            'subcategory_id' => 27
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Аренда строительной техники и оборудования.",
            'prompt_tj' => '',
            'subcategory_id' => 27
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Разработка архитектурных проектов.",
            'prompt_tj' => '',
            'subcategory_id' => 27
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Юридическое сопровождение строительных работ.",
            'prompt_tj' => '',
            'subcategory_id' => 27
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Экспертиза и оценка качества строительных работ.",
            'prompt_tj' => '',
            'subcategory_id' => 27
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Подготовка и согласование проектной документации.",
            'prompt_tj' => '',
            'subcategory_id' => 27
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Организация квартирных и офисных переездов.",
            'prompt_tj' => '',
            'subcategory_id' => 28
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Упаковка и транспортировка мебели и вещей.",
            'prompt_tj' => '',
            'subcategory_id' => 28
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Перевозка крупногабаритных и тяжёлых предметов.",
            'prompt_tj' => '',
            'subcategory_id' => 28
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Услуги по разборке и сборке мебели.",
            'prompt_tj' => '',
            'subcategory_id' => 28
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Предоставление упаковочных материалов.",
            'prompt_tj' => '',
            'subcategory_id' => 28
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Организация переезда 'под ключ'.",
            'prompt_tj' => '',
            'subcategory_id' => 28
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Перевозка антиквариата и ценных предметов.",
            'prompt_tj' => '',
            'subcategory_id' => 28
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Транспортировка бытовой техники.",
            'prompt_tj' => '',
            'subcategory_id' => 28
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Оформление и сопровождение документов на перевозку.",
            'prompt_tj' => '',
            'subcategory_id' => 28
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Услуги грузчиков при переезде.",
            'prompt_tj' => '',
            'subcategory_id' => 28
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Организация корпоративных трансферов.",
            'prompt_tj' => '',
            'subcategory_id' => 29
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Перевозка пассажиров на мероприятия и праздники.",
            'prompt_tj' => '',
            'subcategory_id' => 29
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Трансферы в аэропорты и вокзалы.",
            'prompt_tj' => '',
            'subcategory_id' => 29
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Аренда микроавтобусов с водителем.",
            'prompt_tj' => '',
            'subcategory_id' => 29
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Перевозка детей и школьных групп.",
            'prompt_tj' => '',
            'subcategory_id' => 29
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Экскурсионные перевозки.",
            'prompt_tj' => '',
            'subcategory_id' => 29
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Трансферы для туристических групп.",
            'prompt_tj' => '',
            'subcategory_id' => 29
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Перевозка сотрудников компаний.",
            'prompt_tj' => '',
            'subcategory_id' => 29
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Организация междугородных пассажирских перевозок.",
            'prompt_tj' => '',
            'subcategory_id' => 29
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Транспортное сопровождение VIP-персон.",
            'prompt_tj' => '',
            'subcategory_id' => 29
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Транспортировка строительных материалов на объект.",
            'prompt_tj' => '',
            'subcategory_id' => 30
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Перевозка строительного оборудования и техники.",
            'prompt_tj' => '',
            'subcategory_id' => 30
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Доставка бетона и цемента на стройплощадки.",
            'prompt_tj' => '',
            'subcategory_id' => 30
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Перевозка арматуры и металлических конструкций.",
            'prompt_tj' => '',
            'subcategory_id' => 30
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Доставка кирпича и блоков.",
            'prompt_tj' => '',
            'subcategory_id' => 30
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Перевозка крупногабаритных строительных конструкций.",
            'prompt_tj' => '',
            'subcategory_id' => 30
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Услуги манипулятора для погрузки и разгрузки.",
            'prompt_tj' => '',
            'subcategory_id' => 30
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Перевозка строительных лесов и опалубки.",
            'prompt_tj' => '',
            'subcategory_id' => 30
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Транспортировка отделочных материалов.",
            'prompt_tj' => '',
            'subcategory_id' => 30
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Доставка инструментов и мелкой строительной техники.",
            'prompt_tj' => '',
            'subcategory_id' => 30
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Вывоз строительного мусора после ремонта.",
            'prompt_tj' => '',
            'subcategory_id' => 31
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Вывоз бытового мусора и старой мебели.",
            'prompt_tj' => '',
            'subcategory_id' => 31
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Организация вывоза крупногабаритного мусора.",
            'prompt_tj' => '',
            'subcategory_id' => 31
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Услуги по уборке и вывозу мусора с территорий.",
            'prompt_tj' => '',
            'subcategory_id' => 31
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Аренда контейнеров для вывоза мусора.",
            'prompt_tj' => '',
            'subcategory_id' => 31
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Вывоз промышленных отходов.",
            'prompt_tj' => '',
            'subcategory_id' => 31
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Утилизация строительных материалов и отходов.",
            'prompt_tj' => '',
            'subcategory_id' => 31
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Вывоз мусора после сноса зданий и сооружений.",
            'prompt_tj' => '',
            'subcategory_id' => 31
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Услуги по сортировке и переработке мусора.",
            'prompt_tj' => '',
            'subcategory_id' => 31
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Организация регулярного вывоза мусора.",
            'prompt_tj' => '',
            'subcategory_id' => 31
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Эвакуация автомобилей после ДТП.",
            'prompt_tj' => '',
            'subcategory_id' => 32
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Перевозка неисправных и аварийных автомобилей.",
            'prompt_tj' => '',
            'subcategory_id' => 32
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Транспортировка спецтехники и оборудования.",
            'prompt_tj' => '',
            'subcategory_id' => 32
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Эвакуация автомобилей на штрафстоянку.",
            'prompt_tj' => '',
            'subcategory_id' => 32
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Услуги эвакуатора для легковых и грузовых автомобилей.",
            'prompt_tj' => '',
            'subcategory_id' => 32
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Эвакуация автомобилей из труднодоступных мест.",
            'prompt_tj' => '',
            'subcategory_id' => 32
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Транспортировка мотоциклов и скутеров.",
            'prompt_tj' => '',
            'subcategory_id' => 32
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Перевозка автомобилей на длинные расстояния.",
            'prompt_tj' => '',
            'subcategory_id' => 32
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Эвакуация автомобилей с пробитыми колесами.",
            'prompt_tj' => '',
            'subcategory_id' => 32
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Услуги эвакуатора при переезде.",
            'prompt_tj' => '',
            'subcategory_id' => 32
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Транспортировка грузов между городами.",
            'prompt_tj' => '',
            'subcategory_id' => 33
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Организация междугородных переездов.",
            'prompt_tj' => '',
            'subcategory_id' => 33
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Перевозка товаров для бизнеса между регионами.",
            'prompt_tj' => '',
            'subcategory_id' => 33
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Услуги по доставке строительных материалов.",
            'prompt_tj' => '',
            'subcategory_id' => 33
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Перевозка продуктов питания на длинные расстояния.",
            'prompt_tj' => '',
            'subcategory_id' => 33
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Междугородные перевозки мебели и техники.",
            'prompt_tj' => '',
            'subcategory_id' => 33
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Транспортировка промышленного оборудования.",
            'prompt_tj' => '',
            'subcategory_id' => 33
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Доставка грузов по графику и в срок.",
            'prompt_tj' => '',
            'subcategory_id' => 33
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Услуги по упаковке и страхованию грузов.",
            'prompt_tj' => '',
            'subcategory_id' => 33
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Транспортное сопровождение междугородных перевозок.",
            'prompt_tj' => '',
            'subcategory_id' => 33
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Погрузка и разгрузка грузов.",
            'prompt_tj' => '',
            'subcategory_id' => 34
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Услуги грузчиков при переезде.",
            'prompt_tj' => '',
            'subcategory_id' => 34
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Разгрузка строительных материалов.",
            'prompt_tj' => '',
            'subcategory_id' => 34
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Погрузка и разгрузка контейнеров.",
            'prompt_tj' => '',
            'subcategory_id' => 34
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Услуги грузчиков на складах и базах.",
            'prompt_tj' => '',
            'subcategory_id' => 34
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Подъём тяжёлых предметов на этажи.",
            'prompt_tj' => '',
            'subcategory_id' => 34
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Разгрузка товаров в магазинах и супермаркетах.",
            'prompt_tj' => '',
            'subcategory_id' => 34
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Погрузка и разгрузка мебели и техники.",
            'prompt_tj' => '',
            'subcategory_id' => 34
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Услуги грузчиков на строительных объектах.",
            'prompt_tj' => '',
            'subcategory_id' => 34
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Сборка и разборка мебели при переезде.",
            'prompt_tj' => '',
            'subcategory_id' => 34
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Транспортировка свежих овощей и фруктов.",
            'prompt_tj' => '',
            'subcategory_id' => 35
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Перевозка охлаждённых и замороженных продуктов.",
            'prompt_tj' => '',
            'subcategory_id' => 35
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Доставка мясных и рыбных продуктов.",
            'prompt_tj' => '',
            'subcategory_id' => 35
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Перевозка молочных продуктов и сыра.",
            'prompt_tj' => '',
            'subcategory_id' => 35
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Доставка хлебобулочных изделий и выпечки.",
            'prompt_tj' => '',
            'subcategory_id' => 35
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Транспортировка кондитерских изделий.",
            'prompt_tj' => '',
            'subcategory_id' => 35
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Перевозка напитков и соков.",
            'prompt_tj' => '',
            'subcategory_id' => 35
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Доставка продуктов в супермаркеты и магазины.",
            'prompt_tj' => '',
            'subcategory_id' => 35
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Транспортировка продуктов для ресторанов и кафе.",
            'prompt_tj' => '',
            'subcategory_id' => 35
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Перевозка продуктов на длительные расстояния.",
            'prompt_tj' => '',
            'subcategory_id' => 35
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Погрузка и разгрузка тяжёлых и крупногабаритных грузов.",
            'prompt_tj' => '',
            'subcategory_id' => 36
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Транспортировка строительных материалов с манипулятором.",
            'prompt_tj' => '',
            'subcategory_id' => 36
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Перевозка контейнеров и модульных конструкций.",
            'prompt_tj' => '',
            'subcategory_id' => 36
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Погрузка и разгрузка оборудования и техники.",
            'prompt_tj' => '',
            'subcategory_id' => 36
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Транспортировка металлических конструкций.",
            'prompt_tj' => '',
            'subcategory_id' => 36
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Услуги манипулятора для перевозки бетона и цемента.",
            'prompt_tj' => '',
            'subcategory_id' => 36
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Перевозка строительных блоков и кирпича.",
            'prompt_tj' => '',
            'subcategory_id' => 36
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Погрузка и разгрузка лесоматериалов.",
            'prompt_tj' => '',
            'subcategory_id' => 36
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Транспортировка промышленного оборудования.",
            'prompt_tj' => '',
            'subcategory_id' => 36
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Услуги манипулятора для вывоза мусора.",
            'prompt_tj' => '',
            'subcategory_id' => 36
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Перевозка нестандартных и крупногабаритных грузов.",
            'prompt_tj' => '',
            'subcategory_id' => 37
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Транспортировка специализированных товаров и оборудования.",
            'prompt_tj' => '',
            'subcategory_id' => 37
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Доставка деликатных и хрупких грузов.",
            'prompt_tj' => '',
            'subcategory_id' => 37
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Перевозка опасных и химических материалов.",
            'prompt_tj' => '',
            'subcategory_id' => 37
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Транспортировка выставочных и музейных экспонатов.",
            'prompt_tj' => '',
            'subcategory_id' => 37
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Перевозка сельскохозяйственной техники и оборудования.",
            'prompt_tj' => '',
            'subcategory_id' => 37
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Доставка крупногабаритной мебели и декора.",
            'prompt_tj' => '',
            'subcategory_id' => 37
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Транспортировка медицинского оборудования.",
            'prompt_tj' => '',
            'subcategory_id' => 37
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Перевозка спортивного инвентаря и оборудования.",
            'prompt_tj' => '',
            'subcategory_id' => 37
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Транспортировка крупной бытовой техники и электроники.",
            'prompt_tj' => '',
            'subcategory_id' => 37
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Ежедневная уборка жилых помещений.",
            'prompt_tj' => '',
            'subcategory_id' => 38
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Поддержание чистоты в офисных помещениях.",
            'prompt_tj' => '',
            'subcategory_id' => 38
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Сухая и влажная уборка поверхностей.",
            'prompt_tj' => '',
            'subcategory_id' => 38
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Удаление пыли и загрязнений с мебели.",
            'prompt_tj' => '',
            'subcategory_id' => 38
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Мытьё полов и чистка ковров.",
            'prompt_tj' => '',
            'subcategory_id' => 38
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Уборка ванных комнат и туалетов.",
            'prompt_tj' => '',
            'subcategory_id' => 38
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Чистка кухни и бытовой техники.",
            'prompt_tj' => '',
            'subcategory_id' => 38
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Полировка зеркал и стёкол.",
            'prompt_tj' => '',
            'subcategory_id' => 38
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Вынос мусора и замена мусорных пакетов.",
            'prompt_tj' => '',
            'subcategory_id' => 38
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Проветривание помещений.",
            'prompt_tj' => '',
            'subcategory_id' => 38
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Комплексная уборка жилых и офисных помещений.",
            'prompt_tj' => '',
            'subcategory_id' => 39
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Мытьё окон и рам.",
            'prompt_tj' => '',
            'subcategory_id' => 39
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Чистка ковров и мягкой мебели.",
            'prompt_tj' => '',
            'subcategory_id' => 39
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Удаление сложных загрязнений и пятен.",
            'prompt_tj' => '',
            'subcategory_id' => 39
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Мытьё стен и потолков.",
            'prompt_tj' => '',
            'subcategory_id' => 39
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Чистка вентиляционных решёток и кондиционеров.",
            'prompt_tj' => '',
            'subcategory_id' => 39
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Дезинфекция ванных комнат и санузлов.",
            'prompt_tj' => '',
            'subcategory_id' => 39
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Чистка кухонных плит и вытяжек.",
            'prompt_tj' => '',
            'subcategory_id' => 39
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Обработка полов и покрытий защитными средствами.",
            'prompt_tj' => '',
            'subcategory_id' => 39
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Уборка после ремонта.",
            'prompt_tj' => '',
            'subcategory_id' => 39
        ]);

        DB::table('task_prompts')->insert([
            'prompt' =>  "Мытьё окон в квартирах и домах.",
            'prompt_tj' => '',
            'subcategory_id' => 40
        ]);

        DB::table('task_prompts')->insert([
            'prompt' =>  "Чистка окон в офисных зданиях.",
            'prompt_tj' => '',
            'subcategory_id' => 40
        ]);

        DB::table('task_prompts')->insert([
            'prompt' =>  "Удаление загрязнений с оконных рам и подоконников.",
            'prompt_tj' => '',
            'subcategory_id' => 40
        ]);

        DB::table('task_prompts')->insert([
            'prompt' =>  "Полировка стёкол до блеска.",
            'prompt_tj' => '',
            'subcategory_id' => 40
        ]);

        DB::table('task_prompts')->insert([
            'prompt' =>  "Мытьё оконных стёкол с двух сторон.",
            'prompt_tj' => '',
            'subcategory_id' => 40
        ]);

        DB::table('task_prompts')->insert([
            'prompt' =>  "Чистка витрин и стеклянных дверей.",
            'prompt_tj' => '',
            'subcategory_id' => 40
        ]);

        DB::table('task_prompts')->insert([
            'prompt' =>  "Удаление следов краски и строительной пыли.",
            'prompt_tj' => '',
            'subcategory_id' => 40
        ]);

        DB::table('task_prompts')->insert([
            'prompt' =>  "Мытьё окон на высоте (альпинистские работы).",
            'prompt_tj' => '',
            'subcategory_id' => 40
        ]);

        DB::table('task_prompts')->insert([
            'prompt' =>  "Использование профессиональных моющих средств.",
            'prompt_tj' => '',
            'subcategory_id' => 40
        ]);

        DB::table('task_prompts')->insert([
            'prompt' =>  "Уход за оконными уплотнителями и фурнитурой.",
            'prompt_tj' => '',
            'subcategory_id' => 40
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Ежедневный вынос бытового мусора.",
            'prompt_tj' => '',
            'subcategory_id' => 41
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Удаление крупногабаритного мусора.",
            'prompt_tj' => '',
            'subcategory_id' => 41
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Вынос строительного мусора после ремонта.",
            'prompt_tj' => '',
            'subcategory_id' => 41
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Организация вывоза старой мебели и техники.",
            'prompt_tj' => '',
            'subcategory_id' => 41
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Вывоз садового мусора и веток.",
            'prompt_tj' => '',
            'subcategory_id' => 41
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Сортировка и переработка мусора.",
            'prompt_tj' => '',
            'subcategory_id' => 41
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Вынос мусора после мероприятий и праздников.",
            'prompt_tj' => '',
            'subcategory_id' => 41
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Организация контейнеров для вывоза мусора.",
            'prompt_tj' => '',
            'subcategory_id' => 41
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Вывоз опасных отходов.",
            'prompt_tj' => '',
            'subcategory_id' => 41
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Регулярный вывоз мусора в частных домах.",
            'prompt_tj' => '',
            'subcategory_id' => 41
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Ремонт и подгонка одежды по фигуре.",
            'prompt_tj' => '',
            'subcategory_id' => 42
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Пошив штор и занавесок.",
            'prompt_tj' => '',
            'subcategory_id' => 42
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Ремонт и замена молний на одежде.",
            'prompt_tj' => '',
            'subcategory_id' => 42
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Пошив постельного белья и текстиля для дома.",
            'prompt_tj' => '',
            'subcategory_id' => 42
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Изготовление чехлов для мебели.",
            'prompt_tj' => '',
            'subcategory_id' => 42
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Реставрация и переделка старой одежды.",
            'prompt_tj' => '',
            'subcategory_id' => 42
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Пошив костюмов и платьев на заказ.",
            'prompt_tj' => '',
            'subcategory_id' => 42
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Изготовление декоративных подушек и покрывал.",
            'prompt_tj' => '',
            'subcategory_id' => 42
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Ремонт и укрепление швов на одежде.",
            'prompt_tj' => '',
            'subcategory_id' => 42
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Пошив спецодежды и униформы.",
            'prompt_tj' => '',
            'subcategory_id' => 42
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Приготовление обедов и ужинов на заказ.",
            'prompt_tj' => '',
            'subcategory_id' => 43
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Составление меню и закупка продуктов.",
            'prompt_tj' => '',
            'subcategory_id' => 43
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Приготовление блюд для вечеринок и праздников.",
            'prompt_tj' => '',
            'subcategory_id' => 43
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Выпечка тортов и десертов.",
            'prompt_tj' => '',
            'subcategory_id' => 43
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Приготовление диетических и вегетарианских блюд.",
            'prompt_tj' => '',
            'subcategory_id' => 43
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Повар на один день или для длительного сотрудничества.",
            'prompt_tj' => '',
            'subcategory_id' => 43
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Обслуживание и сервировка столов.",
            'prompt_tj' => '',
            'subcategory_id' => 43
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Кулинарные мастер-классы на дому.",
            'prompt_tj' => '',
            'subcategory_id' => 43
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Приготовление блюд по семейным рецептам.",
            'prompt_tj' => '',
            'subcategory_id' => 43
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Организация фуршетов и банкетов.",
            'prompt_tj' => '',
            'subcategory_id' => 43
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Глажение постельного белья и полотенец.",
            'prompt_tj' => '',
            'subcategory_id' => 44
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Глажение одежды и текстиля.",
            'prompt_tj' => '',
            'subcategory_id' => 44
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Услуги по глажению штор и занавесок.",
            'prompt_tj' => '',
            'subcategory_id' => 44
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Глажение столового белья.",
            'prompt_tj' => '',
            'subcategory_id' => 44
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Обработка вещей паром для удаления складок.",
            'prompt_tj' => '',
            'subcategory_id' => 44
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Услуги по глажению деликатных тканей.",
            'prompt_tj' => '',
            'subcategory_id' => 44
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Глажение большого объёма белья после стирки.",
            'prompt_tj' => '',
            'subcategory_id' => 44
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Глажение одежды после химчистки.",
            'prompt_tj' => '',
            'subcategory_id' => 44
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Использование профессионального оборудования.",
            'prompt_tj' => '',
            'subcategory_id' => 44
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Обработка белья антистатиком.",
            'prompt_tj' => '',
            'subcategory_id' => 44
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Химчистка ковров и ковровых покрытий.",
            'prompt_tj' => '',
            'subcategory_id' => 45
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Чистка мягкой мебели и диванов.",
            'prompt_tj' => '',
            'subcategory_id' => 45
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Химчистка штор и занавесок.",
            'prompt_tj' => '',
            'subcategory_id' => 45
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Удаление пятен и загрязнений с одежды.",
            'prompt_tj' => '',
            'subcategory_id' => 45
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Чистка автомобильных салонов.",
            'prompt_tj' => '',
            'subcategory_id' => 45
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Химчистка кожаных изделий.",
            'prompt_tj' => '',
            'subcategory_id' => 45
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Профессиональная чистка пуховиков и пальто.",
            'prompt_tj' => '',
            'subcategory_id' => 45
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Чистка ковров на дому или в химчистке.",
            'prompt_tj' => '',
            'subcategory_id' => 45
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Услуги по чистке свадебных платьев.",
            'prompt_tj' => '',
            'subcategory_id' => 45
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Обработка тканей защитными средствами.",
            'prompt_tj' => '',
            'subcategory_id' => 45
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Выгул собак и уход за ними.",
            'prompt_tj' => '',
            'subcategory_id' => 46
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Кормление и уход за кошками.",
            'prompt_tj' => '',
            'subcategory_id' => 46
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Услуги по уходу за домашними питомцами на время отпуска.",
            'prompt_tj' => '',
            'subcategory_id' => 46
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Чистка клеток и вольеров.",
            'prompt_tj' => '',
            'subcategory_id' => 46
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Груминг и стрижка животных.",
            'prompt_tj' => '',
            'subcategory_id' => 46
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Услуги ветеринара на дому.",
            'prompt_tj' => '',
            'subcategory_id' => 46
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Организация временного приюта для животных.",
            'prompt_tj' => '',
            'subcategory_id' => 46
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Дрессировка и обучение собак.",
            'prompt_tj' => '',
            'subcategory_id' => 46
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Игры и общение с животными.",
            'prompt_tj' => '',
            'subcategory_id' => 46
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Консультации по уходу и содержанию питомцев.",
            'prompt_tj' => '',
            'subcategory_id' => 46
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Уход за садом и огородом.",
            'prompt_tj' => '',
            'subcategory_id' => 47
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Посадка и пересадка растений.",
            'prompt_tj' => '',
            'subcategory_id' => 47
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Обрезка и формировка кустарников и деревьев.",
            'prompt_tj' => '',
            'subcategory_id' => 47
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Полив и удобрение растений.",
            'prompt_tj' => '',
            'subcategory_id' => 47
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Уход за газонами и клумбами.",
            'prompt_tj' => '',
            'subcategory_id' => 47
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Уборка опавших листьев и мусора.",
            'prompt_tj' => '',
            'subcategory_id' => 47
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Создание и уход за цветниками.",
            'prompt_tj' => '',
            'subcategory_id' => 47
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Стрижка газонов и травы.",
            'prompt_tj' => '',
            'subcategory_id' => 47
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Установка и обслуживание систем полива.",
            'prompt_tj' => '',
            'subcategory_id' => 47
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Консультации по уходу за садом и огородом.",
            'prompt_tj' => '',
            'subcategory_id' => 47
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Уход за пожилыми людьми на дому.",
            'prompt_tj' => '',
            'subcategory_id' => 48
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Помощь в выполнении гигиенических процедур.",
            'prompt_tj' => '',
            'subcategory_id' => 48
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Приготовление пищи и кормление.",
            'prompt_tj' => '',
            'subcategory_id' => 48
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Сопровождение на прогулках и визитах к врачу.",
            'prompt_tj' => '',
            'subcategory_id' => 48
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Психологическая поддержка и общение.",
            'prompt_tj' => '',
            'subcategory_id' => 48
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Контроль приёма лекарств.",
            'prompt_tj' => '',
            'subcategory_id' => 48
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Услуги по уходу за лежачими больными.",
            'prompt_tj' => '',
            'subcategory_id' => 48
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Проведение медицинских процедур на дому.",
            'prompt_tj' => '',
            'subcategory_id' => 48
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Помощь в выполнении повседневных задач.",
            'prompt_tj' => '',
            'subcategory_id' => 48
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Организация досуга и занятий для подопечных.",
            'prompt_tj' => '',
            'subcategory_id' => 48
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Уход за детьми дошкольного возраста.",
            'prompt_tj' => '',
            'subcategory_id' => 49
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Помощь в выполнении домашних заданий.",
            'prompt_tj' => '',
            'subcategory_id' => 49
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Организация игр и развивающих занятий.",
            'prompt_tj' => '',
            'subcategory_id' => 49
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Приготовление пищи и кормление детей.",
            'prompt_tj' => '',
            'subcategory_id' => 49
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Сопровождение детей на прогулках и занятиях.",
            'prompt_tj' => '',
            'subcategory_id' => 49
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Услуги няни на вечер или выходные.",
            'prompt_tj' => '',
            'subcategory_id' => 49
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Организация и проведение детских праздников.",
            'prompt_tj' => '',
            'subcategory_id' => 49
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Помощь в выполнении гигиенических процедур.",
            'prompt_tj' => '',
            'subcategory_id' => 49
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Контроль режима дня и отдыха.",
            'prompt_tj' => '',
            'subcategory_id' => 49
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Обучение и развитие ребёнка.",
            'prompt_tj' => '',
            'subcategory_id' => 49
        ]);

        DB::table('task_prompts')->insert([
            'prompt' =>  "Дезинфекция помещений.",
            'prompt_tj' => '',
            'subcategory_id' => 50
        ]);

        DB::table('task_prompts')->insert([
            'prompt' =>  "Уборка и обработка поверхностей.",
            'prompt_tj' => '',
            'subcategory_id' => 50
        ]);

        DB::table('task_prompts')->insert([
            'prompt' =>  "Услуги по уничтожению насекомых и грызунов.",
            'prompt_tj' => '',
            'subcategory_id' => 50
        ]);

        DB::table('task_prompts')->insert([
            'prompt' =>  "Очистка вентиляционных систем.",
            'prompt_tj' => '',
            'subcategory_id' => 50
        ]);

        DB::table('task_prompts')->insert([
            'prompt' =>  "Дезинфекция санузлов и ванных комнат.",
            'prompt_tj' => '',
            'subcategory_id' => 50
        ]);

        DB::table('task_prompts')->insert([
            'prompt' =>  "Удаление плесени и грибка.",
            'prompt_tj' => '',
            'subcategory_id' => 50
        ]);

        DB::table('task_prompts')->insert([
            'prompt' =>  "Уборка после больных и инфекционных пациентов.",
            'prompt_tj' => '',
            'subcategory_id' => 50
        ]);

        DB::table('task_prompts')->insert([
            'prompt' =>  "Обработка помещений после ремонта.",
            'prompt_tj' => '',
            'subcategory_id' => 50
        ]);

        DB::table('task_prompts')->insert([
            'prompt' =>  "Использование специализированных моющих средств.",
            'prompt_tj' => '',
            'subcategory_id' => 50
        ]);

        DB::table('task_prompts')->insert([
            'prompt' =>  "Организация санитарных дней.",
            'prompt_tj' => '',
            'subcategory_id' => 50
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Услуги по уходу за бассейном.",
            'prompt_tj' => '',
            'subcategory_id' => 51
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Организация мелкого ремонта в доме.",
            'prompt_tj' => '',
            'subcategory_id' => 51
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Помощь в обустройстве и декорировании интерьера.",
            'prompt_tj' => '',
            'subcategory_id' => 51
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Услуги по установке и настройке бытовой техники.",
            'prompt_tj' => '',
            'subcategory_id' => 51
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Организация переезда и упаковка вещей.",
            'prompt_tj' => '',
            'subcategory_id' => 51
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Сборка и разборка мебели.",
            'prompt_tj' => '',
            'subcategory_id' => 51
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Услуги по охране и безопасности дома.",
            'prompt_tj' => '',
            'subcategory_id' => 51
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Помощь в планировании и организации мероприятий.",
            'prompt_tj' => '',
            'subcategory_id' => 51
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Консультации по бытовым вопросам.",
            'prompt_tj' => '',
            'subcategory_id' => 51
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => "Организация и проведение праздников на дому.",
            'prompt_tj' => '',
            'subcategory_id' => 51
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Использовать короткие и емкие заголовки для привлечения внимания.',
            'prompt_tj' => '',
            'subcategory_id' => 52
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Проверять текст на наличие орфографических и грамматических ошибок.',
            'prompt_tj' => '',
            'subcategory_id' => 52
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Использовать активный залог для большей убедительности.',
            'prompt_tj' => '',
            'subcategory_id' => 52
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Разбивать текст на абзацы для удобства чтения.',
            'prompt_tj' => '',
            'subcategory_id' => 52
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Применять подзаголовки для структурирования материала.',
            'prompt_tj' => '',
            'subcategory_id' => 52
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Избегать клише и избитых фраз.',
            'prompt_tj' => '',
            'subcategory_id' => 52
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Поддерживать стиль письма, соответствующий аудитории.',
            'prompt_tj' => '',
            'subcategory_id' => 52
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Использовать цифры и статистику для повышения доверия.',
            'prompt_tj' => '',
            'subcategory_id' => 52
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Интегрировать ключевые слова для SEO-оптимизации.',
            'prompt_tj' => '',
            'subcategory_id' => 52
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Завершать текст призывом к действию.',
            'prompt_tj' => '',
            'subcategory_id' => 52
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Подбирать переводчика, который хорошо знает тематику текста.',
            'prompt_tj' => '',
            'subcategory_id' => 53
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Обеспечивать переводчику доступ к оригинальным материалам.',
            'prompt_tj' => '',
            'subcategory_id' => 53
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Согласовывать терминологию перед началом работы.',
            'prompt_tj' => '',
            'subcategory_id' => 53
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Убедиться, что переводчик владеет культурными особенностями языка.',
            'prompt_tj' => '',
            'subcategory_id' => 53
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Проверять перевод на соответствие оригиналу.',
            'prompt_tj' => '',
            'subcategory_id' => 53
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Использовать специализированные программы для контроля качества.',
            'prompt_tj' => '',
            'subcategory_id' => 53
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Предоставлять переводчику достаточно времени для работы.',
            'prompt_tj' => '',
            'subcategory_id' => 53
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Запрашивать образцы предыдущих работ переводчика.',
            'prompt_tj' => '',
            'subcategory_id' => 53
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Регулярно проверять прогресс выполнения работы.',
            'prompt_tj' => '',
            'subcategory_id' => 53
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Организовывать процесс ревизии перевода.',
            'prompt_tj' => '',
            'subcategory_id' => 53
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Использовать надежные источники для сбора информации.',
            'prompt_tj' => '',
            'subcategory_id' => 54
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Сохранять ссылки на все использованные ресурсы.',
            'prompt_tj' => '',
            'subcategory_id' => 54
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Организовывать информацию в удобной для чтения форме.',
            'prompt_tj' => '',
            'subcategory_id' => 54
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Проверять факты и данные из разных источников.',
            'prompt_tj' => '',
            'subcategory_id' => 54
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Учитывать дату публикации информации для актуальности.',
            'prompt_tj' => '',
            'subcategory_id' => 54
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Делать заметки и выделять ключевые моменты.',
            'prompt_tj' => '',
            'subcategory_id' => 54
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Использовать специализированные поисковые операторы.',
            'prompt_tj' => '',
            'subcategory_id' => 54
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Фильтровать информацию для удаления ненужных данных.',
            'prompt_tj' => '',
            'subcategory_id' => 54
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Создавать структуры для презентации данных.',
            'prompt_tj' => '',
            'subcategory_id' => 54
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Проверять информацию на достоверность перед использованием.',
            'prompt_tj' => '',
            'subcategory_id' => 54
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Убедиться в точности вводимых данных.',
            'prompt_tj' => '',
            'subcategory_id' => 55
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Использовать таблицы и диаграммы для визуализации данных.',
            'prompt_tj' => '',
            'subcategory_id' => 55
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Применять формулы и функции для автоматизации расчетов.',
            'prompt_tj' => '',
            'subcategory_id' => 55
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Проверять данные на наличие ошибок и аномалий.',
            'prompt_tj' => '',
            'subcategory_id' => 55
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Регулярно сохранять результаты работы.',
            'prompt_tj' => '',
            'subcategory_id' => 55
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Использовать сводные таблицы для анализа данных.',
            'prompt_tj' => '',
            'subcategory_id' => 55
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Обеспечивать резервное копирование данных.',
            'prompt_tj' => '',
            'subcategory_id' => 55
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Устанавливать форматирование для удобства чтения.',
            'prompt_tj' => '',
            'subcategory_id' => 55
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Применять статистические методы для анализа данных.',
            'prompt_tj' => '',
            'subcategory_id' => 55
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Проверять данные на соответствие исходным источникам.',
            'prompt_tj' => '',
            'subcategory_id' => 55
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Создавать четкую структуру презентации.',
            'prompt_tj' => '',
            'subcategory_id' => 56
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Использовать минималистичный дизайн для акцента на контенте.',
            'prompt_tj' => '',
            'subcategory_id' => 56
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Подбирать соответствующие шрифты и цвета.',
            'prompt_tj' => '',
            'subcategory_id' => 56
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Включать визуальные элементы для поддержки текста.',
            'prompt_tj' => '',
            'subcategory_id' => 56
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Проверять орфографию и грамматику.',
            'prompt_tj' => '',
            'subcategory_id' => 56
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Делать короткие и информативные слайды.',
            'prompt_tj' => '',
            'subcategory_id' => 56
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Учитывать аудиторию при подготовке контента.',
            'prompt_tj' => '',
            'subcategory_id' => 56
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Репетировать выступление перед презентацией.',
            'prompt_tj' => '',
            'subcategory_id' => 56
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Использовать графики и диаграммы для иллюстрации данных.',
            'prompt_tj' => '',
            'subcategory_id' => 56
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Завершать презентацию четким выводом или призывом к действию.',
            'prompt_tj' => '',
            'subcategory_id' => 56
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Использовать качественное оборудование для записи.',
            'prompt_tj' => '',
            'subcategory_id' => 57
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Слушать запись несколько раз для точности расшифровки.',
            'prompt_tj' => '',
            'subcategory_id' => 57
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Использовать специализированные программы для расшифровки.',
            'prompt_tj' => '',
            'subcategory_id' => 57
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Проверять текст на наличие ошибок и пропусков.',
            'prompt_tj' => '',
            'subcategory_id' => 57
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Делать пометки на сложных местах для дальнейшей проверки.',
            'prompt_tj' => '',
            'subcategory_id' => 57
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Обеспечивать резервное копирование записей.',
            'prompt_tj' => '',
            'subcategory_id' => 57
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Учитывать контекст записи при расшифровке.',
            'prompt_tj' => '',
            'subcategory_id' => 57
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Использовать паузы и знаки препинания для структурирования текста.',
            'prompt_tj' => '',
            'subcategory_id' => 57
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Проверять расшифровку на соответствие оригиналу.',
            'prompt_tj' => '',
            'subcategory_id' => 57
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Уточнять непонятные моменты с заказчиком.',
            'prompt_tj' => '',
            'subcategory_id' => 57
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Подбирать площадки, соответствующие целевой аудитории.',
            'prompt_tj' => '',
            'subcategory_id' => 58
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Учитывать бюджет при выборе рекламных площадок.',
            'prompt_tj' => '',
            'subcategory_id' => 58
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Создавать привлекательные рекламные материалы.',
            'prompt_tj' => '',
            'subcategory_id' => 58
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Использовать A/B тестирование для оценки эффективности рекламы.',
            'prompt_tj' => '',
            'subcategory_id' => 58
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Мониторить результаты рекламных кампаний.',
            'prompt_tj' => '',
            'subcategory_id' => 58
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Регулярно обновлять рекламные материалы.',
            'prompt_tj' => '',
            'subcategory_id' => 58
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Использовать аналитические инструменты для оценки ROI.',
            'prompt_tj' => '',
            'subcategory_id' => 58
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Взаимодействовать с потенциальными клиентами через рекламу.',
            'prompt_tj' => '',
            'subcategory_id' => 58
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Проверять условия размещения рекламы на площадках.',
            'prompt_tj' => '',
            'subcategory_id' => 58
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Оптимизировать рекламу на основе полученных данных.',
            'prompt_tj' => '',
            'subcategory_id' => 58
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Анализировать целевую аудиторию перед началом работы.',
            'prompt_tj' => '',
            'subcategory_id' => 59
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Создавать контент-план для регулярных публикаций.',
            'prompt_tj' => '',
            'subcategory_id' => 59
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Использовать разнообразные форматы контента (фото, видео, текст).',
            'prompt_tj' => '',
            'subcategory_id' => 59
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Учитывать тренды и актуальные темы в публикациях.',
            'prompt_tj' => '',
            'subcategory_id' => 59
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Взаимодействовать с подписчиками через комментарии и сообщения.',
            'prompt_tj' => '',
            'subcategory_id' => 59
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Использовать хэштеги для увеличения охвата.',
            'prompt_tj' => '',
            'subcategory_id' => 59
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Анализировать результаты публикаций с помощью аналитических инструментов.',
            'prompt_tj' => '',
            'subcategory_id' => 59
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Применять таргетированную рекламу для увеличения аудитории.',
            'prompt_tj' => '',
            'subcategory_id' => 59
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Проводить конкурсы и розыгрыши для повышения вовлеченности.',
            'prompt_tj' => '',
            'subcategory_id' => 59
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Обеспечивать единый стиль и тональность в публикациях.',
            'prompt_tj' => '',
            'subcategory_id' => 59
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Анализировать конкурентов перед началом кампании.',
            'prompt_tj' => '',
            'subcategory_id' => 60
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Использовать различные каналы для продвижения (SEO, PPC, соцсети).',
            'prompt_tj' => '',
            'subcategory_id' => 60
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Создавать уникальные и запоминающиеся рекламные объявления.',
            'prompt_tj' => '',
            'subcategory_id' => 60
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Использовать ремаркетинг для привлечения повторных клиентов.',
            'prompt_tj' => '',
            'subcategory_id' => 60
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Мониторить эффективность рекламных кампаний.',
            'prompt_tj' => '',
            'subcategory_id' => 60
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Применять аналитические инструменты для отслеживания результатов.',
            'prompt_tj' => '',
            'subcategory_id' => 60
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Оптимизировать бюджет на основе данных о ROI.',
            'prompt_tj' => '',
            'subcategory_id' => 60
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Использовать целевые страницы для повышения конверсии.',
            'prompt_tj' => '',
            'subcategory_id' => 60
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Экспериментировать с разными форматами рекламы.',
            'prompt_tj' => '',
            'subcategory_id' => 60
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Постоянно обновлять и улучшать рекламные материалы.',
            'prompt_tj' => '',
            'subcategory_id' => 60
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Подготавливать сценарии для звонков.',
            'prompt_tj' => '',
            'subcategory_id' => 61
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Тренировать операторов перед началом кампании.',
            'prompt_tj' => '',
            'subcategory_id' => 61
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Убедиться в актуальности базы данных.',
            'prompt_tj' => '',
            'subcategory_id' => 61
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Использовать CRM-систему для учета результатов звонков.',
            'prompt_tj' => '',
            'subcategory_id' => 61
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Внимательно слушать собеседника и фиксировать его ответы.',
            'prompt_tj' => '',
            'subcategory_id' => 61
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Применять скрипты для преодоления возражений.',
            'prompt_tj' => '',
            'subcategory_id' => 61
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Анализировать результаты звонков и корректировать подход.',
            'prompt_tj' => '',
            'subcategory_id' => 61
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Соблюдать временные рамки для звонков.',
            'prompt_tj' => '',
            'subcategory_id' => 61
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Учитывать законодательные ограничения на обзвон.',
            'prompt_tj' => '',
            'subcategory_id' => 61
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Обеспечивать качественное техническое оснащение операторов.',
            'prompt_tj' => '',
            'subcategory_id' => 61
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Создавать список задач для ежедневного выполнения.',
            'prompt_tj' => '',
            'subcategory_id' => 62
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Управлять календарем и планировать встречи.',
            'prompt_tj' => '',
            'subcategory_id' => 62
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Вести учет расходов и доходов.',
            'prompt_tj' => '',
            'subcategory_id' => 62
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Организовывать деловую переписку и обработку документов.',
            'prompt_tj' => '',
            'subcategory_id' => 62
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Координировать командировки и поездки.',
            'prompt_tj' => '',
            'subcategory_id' => 62
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Проверять и фильтровать входящие звонки и сообщения.',
            'prompt_tj' => '',
            'subcategory_id' => 62
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Обеспечивать резервное копирование важных данных.',
            'prompt_tj' => '',
            'subcategory_id' => 62
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Управлять личными и деловыми контактами.',
            'prompt_tj' => '',
            'subcategory_id' => 62
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Соблюдать конфиденциальность и этику в работе.',
            'prompt_tj' => '',
            'subcategory_id' => 62
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Обеспечивать своевременное выполнение поручений.',
            'prompt_tj' => '',
            'subcategory_id' => 62
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Определить конкретные задачи и цели.',
            'prompt_tj' => '',
            'subcategory_id' => 63
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Провести анализ рынка для поиска лучших решений.',
            'prompt_tj' => '',
            'subcategory_id' => 63
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Использовать специализированные программы для выполнения задач.',
            'prompt_tj' => '',
            'subcategory_id' => 63
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Соблюдать сроки выполнения поручений.',
            'prompt_tj' => '',
            'subcategory_id' => 63
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Учитывать потребности и пожелания клиента.',
            'prompt_tj' => '',
            'subcategory_id' => 63
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Обеспечивать качество выполнения работ.',
            'prompt_tj' => '',
            'subcategory_id' => 63
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Регулярно отчитываться о ходе выполнения задач.',
            'prompt_tj' => '',
            'subcategory_id' => 63
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Соблюдать конфиденциальность информации.',
            'prompt_tj' => '',
            'subcategory_id' => 63
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Обеспечивать резервное копирование данных.',
            'prompt_tj' => '',
            'subcategory_id' => 63
        ]);

        DB::table('task_prompts')->insert([
            'prompt' => 'Постоянно совершенствовать свои навыки и знания.',
            'prompt_tj' => '',
            'subcategory_id' => 63
        ]);

        // DB::table('task_prompts')->insert([
        //     'prompt' => '',
        //     'prompt_tj' => '', 
        //     'subcategory_id' => 
        // ]);

    }
}
