<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subcategories')->insert([
            'name' => 'Услуги пешего курьера',
            'tj_name' => 'Хизматрасонии хаткашонҳои пиёдагард',
            'categories_id' => 1
        ]);
        
        DB::table('subcategories')->insert([
            'name' => 'Услуги курьера на легковом авто',
            'tj_name' => 'Хидматрасонии курьерӣ барои мошинҳои сабукрав',
            'categories_id' => 1
        ]);
        
        DB::table('subcategories')->insert([
            'name' => 'Купить и доставить',
            'tj_name' => 'Хариду расонидан',
            'categories_id' => 1
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Срочная доставка",
            'tj_name' => 'Экспресс интиқол',
            'categories_id' => 1
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Доставка продуктов",
            'tj_name' => 'Интиқоли маҳсулот',
            'categories_id' => 1
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Доставка еды из ресторанов",
            'tj_name' => 'Интиқоли ғизо аз тарабхонаҳо',
            'categories_id' => 1
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Курьер на день",
            'tj_name' => 'Курер барои рӯз',
            'categories_id' => 1
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Другая посылка",
            'tj_name' => 'Бастаи дигар',
            'categories_id' => 1
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Мастер на час",
            'tj_name' => 'Устод барои як соат',
            'categories_id' => 2
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Ремонт под ключ",
            'tj_name' => 'Таъмири калидӣ',
            'categories_id' => 2
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Сантехнические работы",
            'tj_name' => 'Корхои сантехникй',
            'categories_id' => 2
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Электромонтажные работы",
            'tj_name' => 'Корҳои монтажи барқ',
            'categories_id' => 2
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Отделочные работы",
            'tj_name' => 'Корҳои анҷомдода',
            'categories_id' => 2
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Потолки",
            'tj_name' => 'Шифтҳо',
            'categories_id' => 2
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Полы",
            'tj_name' => 'Фаршҳо',
            'categories_id' => 2
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Плиточные работы",
            'tj_name' => 'Кори сафолӣ',
            'categories_id' => 2
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Сборка и ремонт мебели",
            'tj_name' => 'Монтаж ва таъмири мебел',
            'categories_id' => 2
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Установка и ремонт дверей, замков",
            'tj_name' => 'Монтаж ва таъмири дару кулфхо',
            'categories_id' => 2
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Окна, остекление, балконы",
            'tj_name' => 'Тирезаҳо, шишабандӣ, балконҳо',
            'categories_id' => 2
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Кровельные и фасадные работы",
            'tj_name' => 'Корҳои бомпӯшӣ ва фасадӣ',
            'categories_id' => 2
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Отопление, водоснабжение, канализация",
            'tj_name' => 'Гармкунй, водопровод, канализация',
            'categories_id' => 2
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Изоляционные работы",
            'tj_name' => 'Корҳои изолятсия',
            'categories_id' => 2
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Строительно-монтажные работы",
            'tj_name' => 'Корхои сохтмону монтаж',
            'categories_id' => 2
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Крупное строительство",
            'tj_name' => 'Сохтмони асосй',
            'categories_id' => 2
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Охранные системы",
            'tj_name' => 'Системаҳои бехатарӣ',
            'categories_id' => 2
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Вскрытие замков",
            'tj_name' => 'Кушодани қуфлҳо',
            'categories_id' => 2
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Что-то другое",
            'tj_name' => 'Чизи дигар',
            'categories_id' => 2
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Перевозка вещей, переезды",
            'tj_name' => 'Интиқоли ашё, интиқол',
            'categories_id' => 3
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Пассажирские перевозки",
            'tj_name' => 'Интиқоли мусофирон',
            'categories_id' => 3
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Строительные грузы и оборудование",
            'tj_name' => 'масолехи бинокорй ва тачхизот',
            'categories_id' => 3
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Вывоз мусора",
            'tj_name' => 'Хориҷ кардани партовҳо',
            'categories_id' => 3
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Эвакуаторы",
            'tj_name' => 'Мошинҳои эвакуаторӣ',
            'categories_id' => 3
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Междугородные перевозки",
            'tj_name' => 'Нақлиёти байнишаҳрӣ',
            'categories_id' => 3
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Услуги грузчиков",
            'tj_name' => 'Хизматрасонии боркунак',
            'categories_id' => 3
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Перевозка продуктов",
            'tj_name' => 'Интиқоли маҳсулот',
            'categories_id' => 3
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Услуги манипулятора",
            'tj_name' => 'Хизматрасонии манипуляторҳо',
            'categories_id' => 3
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Другой груз",
            'tj_name' => 'Дигар бор',
            'categories_id' => 3
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Поддерживающая уборка",
            'tj_name' => 'Тозакунии нигоҳубин',
            'categories_id' => 4
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Генеральная уборка",
            'tj_name' => 'тозакунии баҳорӣ',
            'categories_id' => 4
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Мытье окон",
            'tj_name' => 'Тозакунии тиреза',
            'categories_id' => 4
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Вынос мусора",
            'tj_name' => 'Баровардани партов',
            'categories_id' => 4
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Помощь швеи",
            'tj_name' => 'Кӯмак аз дӯзандагӣ',
            'categories_id' => 4
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Приготовление еды",
            'tj_name' => 'Пухтупаз',
            'categories_id' => 4
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Глажение белья",
            'tj_name' => 'Дарзмол кардан',
            'categories_id' => 4
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Химчистка",
            'tj_name' => 'Тозакунии хушк',
            'categories_id' => 4
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Уход за животными",
            'tj_name' => 'Нигоҳубини ҳайвонот',
            'categories_id' => 4
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Работы в саду, огороде, на участке",
            'tj_name' => 'Дар боғ, боғи сабзавот, дар сайт кор кунед',
            'categories_id' => 4
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Сиделки",
            'tj_name' => 'Ҳамшираҳои шафқат',
            'categories_id' => 4
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Няни",
            'tj_name' => 'Даяхо',
            'categories_id' => 4
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Санитарные работы",
            'tj_name' => 'Корҳои санитарӣ',
            'categories_id' => 4
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Что-то другое",
            'tj_name' => 'Чизи дигар',
            'categories_id' => 4
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Работа с текстом, копирайтинг",
            'tj_name' => 'Кор бо матн, копирайтинг',
            'categories_id' => 5
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Услуги переводчика",
            'tj_name' => 'Хизматрасонии тарҷума',
            'categories_id' => 5
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Поиск и обработка информации",
            'tj_name' => 'Ҷустуҷӯ ва коркарди иттилоот',
            'categories_id' => 5
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Работа с числовыми данными",
            'tj_name' => 'Кор бо маълумоти рақамӣ',
            'categories_id' => 5
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Подготовка презентаций",
            'tj_name' => 'Тайёр кардани презентатсияҳо',
            'categories_id' => 5
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Расшифровка аудио- и видеозаписей",
            'tj_name' => 'Транскриптсияи сабтҳои аудио ва видео',
            'categories_id' => 5
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Размещение на рекламных площадках",
            'tj_name' => 'Ҷойгиркунӣ дар платформаҳои таблиғотӣ',
            'categories_id' => 5
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Помощь SMM-специалиста",
            'tj_name' => 'Кӯмак аз мутахассиси SMM',
            'categories_id' => 5
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Реклама и продвижение в интернете",
            'tj_name' => 'Таблиғ ва таблиғ дар Интернет',
            'categories_id' => 5
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Обзвон по базе",
            'tj_name' => 'Даъват ба базаи маълумот',
            'categories_id' => 5
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Услуги личного помощника",
            'tj_name' => 'Хизматрасонии ёрдамчии шахсӣ',
            'categories_id' => 5
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Что-то другое",
            'tj_name' => 'Чизи дигар',
            'categories_id' => 5
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Ремонт компьютеров и ноутбуков",
            'tj_name' => 'Таъмири компютер ва ноутбук',
            'categories_id' => 6
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Установка и настройка операц. систем, программ",
            'tj_name' => 'Насб ва конфигуратсияи системаи оператсионӣ. системахо, программахо',
            'categories_id' => 6
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Удаление вирусов",
            'tj_name' => 'Бартараф кардани вирусҳо',
            'categories_id' => 6
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Настройка интернета и Wi-Fi",
            'tj_name' => 'Танзимоти интернет ва Wi-Fi',
            'categories_id' => 6
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Ремонт и замена комплектующих",
            'tj_name' => 'Таъмир ва иваз кардани ҷузъҳо',
            'categories_id' => 6
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Восстановление данных",
            'tj_name' => 'Барқарорсозии маълумот',
            'categories_id' => 6
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Настройка и ремонт оргтехники",
            'tj_name' => 'Ташкил ва таъмири таҷҳизоти идоравӣ',
            'categories_id' => 6
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Консультация и обучение",
            'tj_name' => 'Машварат ва омӯзиш',
            'categories_id' => 6
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Что-то другое",
            'tj_name' => 'Чизи дигар',
            'categories_id' => 6
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Помощь в проведении мероприятий",
            'tj_name' => 'Кӯмак дар рӯйдодҳо',
            'categories_id' => 7
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Раздача промо-материалов",
            'tj_name' => 'Паҳн кардани маводҳои таблиғотӣ',
            'categories_id' => 7
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Тайный покупатель",
            'tj_name' => 'Харидори махфӣ',
            'categories_id' => 7
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Разнорабочий",
            'tj_name' => 'Корманд',
            'categories_id' => 7
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Промоутер",
            'tj_name' => 'Промоутер',
            'categories_id' => 7
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Тамада, ведущий, аниматор",
            'tj_name' => 'Тостмейстер, баранда, аниматор',
            'categories_id' => 7
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Промо-модель",
            'tj_name' => 'Модели таблиғотӣ',
            'categories_id' => 7
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Мерчендайзеры",
            'tj_name' => 'Фурӯшандагон',
            'categories_id' => 7
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Комплектовщики",
            'tj_name' => 'Интихобкунандагон',
            'categories_id' => 7
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Что-то другое",
            'tj_name' => 'Чизи дигар',
            'categories_id' => 7
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Фирменный стиль, логотипы, визитки",
            'tj_name' => 'Шиносоии корпоративӣ, логотипҳо, кортҳои тиҷорӣ',
            'categories_id' => 8
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Полиграфический дизайн",
            'tj_name' => 'Тарҳрезии чоп',
            'categories_id' => 8
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Иллюстрации, живопись, граффити",
            'tj_name' => 'Расмҳо, расмҳо, граффити',
            'categories_id' => 8
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Дизайн сайтов и приложений",
            'tj_name' => 'Тарҳрезии вебсайт ва барнома',
            'categories_id' => 8
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Интернет-баннеры, оформление соц.сетей",
            'tj_name' => 'Баннерҳои интернетӣ, тарҳрезии шабакаҳои иҷтимоӣ',
            'categories_id' => 8
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "3d-графика, анимация",
            'tj_name' => 'Графикаи 3D, аниматсия',
            'categories_id' => 8
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Инфографика, презентации, иконки",
            'tj_name' => 'Инфографика, презентатсияҳо, нишонаҳо',
            'categories_id' => 8
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Наружная реклама, стенды, pos-материалы",
            'tj_name' => 'Рекламаи беруна, стендҳо, маводҳои POS',
            'categories_id' => 8
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Архитектура, интерьер, ландшафт",
            'tj_name' => 'Меъморӣ, дохилӣ, ландшафт',
            'categories_id' => 8
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Дизайн одежды",
            'tj_name' => 'Тарҳрезии либос',
            'categories_id' => 8
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Что-то другое",
            'tj_name' => 'Чизи дигар',
            'categories_id' => 8
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Сайт под ключ",
            'tj_name' => 'Вебсайти калиди',
            'categories_id' => 9
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Разработка мобильных приложений",
            'tj_name' => 'Таҳияи барномаҳои мобилӣ',
            'categories_id' => 9
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Программирование",
            'tj_name' => 'Барномасозӣ',
            'categories_id' => 9
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Доработка и поддержка сайта",
            'tj_name' => 'Таҳия ва дастгирии вебсайт',
            'categories_id' => 9
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Доработка и настройка 1С",
            'tj_name' => 'Такмил ва конфигуратсияи 1C',
            'categories_id' => 9
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Создание лендингов",
            'tj_name' => 'Эҷоди саҳифаи кушодашавӣ',
            'categories_id' => 9
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Верстка",
            'tj_name' => 'Тарҳ',
            'categories_id' => 9
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Скрипты и боты",
            'tj_name' => 'Скриптҳо ва ботҳо',
            'categories_id' => 9
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Что-то другое",
            'tj_name' => 'Чизи дигар',
            'categories_id' => 9
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Фотосъемка",
            'tj_name' => 'Суратгирй',
            'categories_id' => 10
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Видеосъемка",
            'tj_name' => 'Наворбардории видео',
            'categories_id' => 10
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Запись аудио",
            'tj_name' => 'Сабти аудио',
            'categories_id' => 10
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Обработка фотографий",
            'tj_name' => 'Коркарди акс',
            'categories_id' => 10
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Создание видео под ключ",
            'tj_name' => 'Эҷоди видеои калидӣ',
            'categories_id' => 10
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Модели для съемок",
            'tj_name' => 'Моделҳо барои наворбардорӣ',
            'categories_id' => 10
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Монтаж и цветокоррекция видео",
            'tj_name' => 'Таҳрири видео ва ислоҳи ранг',
            'categories_id' => 10
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Оцифровка",
            'tj_name' => 'Рақамсозӣ',
            'categories_id' => 10
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Что-то другое",
            'tj_name' => 'Чизи дигар',
            'categories_id' => 10
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Холодильники и морозильные камеры",
            'tj_name' => 'Яхдонхо ва яхдонхо',
            'categories_id' => 11
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Стиральные и сушильные машины",
            'tj_name' => 'Мошинхои чомашуй ва хушккунй',
            'categories_id' => 11
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Посудомоечные машины",
            'tj_name' => 'Мошинҳои табақшӯйӣ',
            'categories_id' => 11
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Электрические плиты и панели",
            'tj_name' => 'Плитахои электрики ва панельхо',
            'categories_id' => 11
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Газовые плиты",
            'tj_name' => 'Плитахои газ',
            'categories_id' => 11
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Духовые шкафы",
            'tj_name' => 'Танӯрҳо',
            'categories_id' => 11
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Вытяжки",
            'tj_name' => 'Сарпӯшҳо',
            'categories_id' => 11
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Климатическая техника",
            'tj_name' => 'Таҷҳизоти кондитсионер',
            'categories_id' => 11
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Водонагреватели, бойлеры, котлы, колонки",
            'tj_name' => 'Обгармкунакхо, дегхо, колоннахо',
            'categories_id' => 11
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Швейные машины",
            'tj_name' => 'Мошинҳои дарздузӣ',
            'categories_id' => 11
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Пылесосы и очистители",
            'tj_name' => 'Мошинхои чангкашак ва тозакунанда',
            'categories_id' => 11
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Утюги и уход за одеждой",
            'tj_name' => 'Нигоҳубини дарзмол ва либос',
            'categories_id' => 11
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Кофемашины",
            'tj_name' => 'Мошинҳои қаҳва',
            'categories_id' => 11
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "СВЧ печи",
            'tj_name' => 'печҳои микроволновка',
            'categories_id' => 11
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Мелкая кухонная техника",
            'tj_name' => 'Таҷҳизоти хурди ошхона',
            'categories_id' => 11
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Уход за телом и здоровьем",
            'tj_name' => 'Нигоҳдории бадан ва саломатӣ',
            'categories_id' => 11
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Строительная и садовая техника",
            'tj_name' => 'Таҷҳизоти сохтмонӣ ва боғдорӣ',
            'categories_id' => 11
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Что-то другое",
            'tj_name' => 'Чизи дигар',
            'categories_id' => 11
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Услуги косметолога",
            'tj_name' => 'Хидматрасонии косметолог',
            'categories_id' => 12
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Эпиляция",
            'tj_name' => 'Эпиляция',
            'categories_id' => 12
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Брови и ресницы",
            'tj_name' => 'абрӯвон ва абрӯвон',
            'categories_id' => 12
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Услуги визажиста",
            'tj_name' => 'Хизматрасонии рассоми ороиш',
            'categories_id' => 12
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Тату и пирсинг",
            'tj_name' => 'Татуировка ва пирсинг',
            'categories_id' => 12
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Парикмахерские услуги",
            'tj_name' => 'Хизматрасонии сартарошӣ',
            'categories_id' => 12
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Ногтевой сервис",
            'tj_name' => 'Маникюр',
            'categories_id' => 12
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Массаж",
            'tj_name' => 'Массаж',
            'categories_id' => 12
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Стилисты и имиджмейкеры",
            'tj_name' => 'Стилистҳо ва тасвирсозон',
            'categories_id' => 12
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Психологи и психотерапевты",
            'tj_name' => 'Психологҳо ва психотерапевтҳо',
            'categories_id' => 12
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Услуги медсестры",
            'tj_name' => 'Хизматрасонии ҳамшираи шафқат',
            'categories_id' => 12
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Персональный тренер",
            'tj_name' => 'Тренери шахсӣ',
            'categories_id' => 12
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Что-то другое",
            'tj_name' => 'Чизи дигар',
            'categories_id' => 12
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Планшеты и телефоны",
            'tj_name' => 'Планшетҳо ва телефонҳо',
            'categories_id' => 13
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Аудиотехника и системы",
            'tj_name' => 'Таҷҳизот ва системаҳои аудиоӣ',
            'categories_id' => 13
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Телевизоры и мониторы",
            'tj_name' => 'Телевизорҳо ва мониторҳо',
            'categories_id' => 13
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Автомобильная электроника",
            'tj_name' => 'Электроникаи автомобилӣ',
            'categories_id' => 13
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Видео/фототехника",
            'tj_name' => 'Таҷҳизоти видео/акс',
            'categories_id' => 13
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Игровые приставки",
            'tj_name' => 'Консолҳои бозӣ',
            'categories_id' => 13
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Спутниковые и эфирные антенны",
            'tj_name' => 'Антеннаҳои моҳвораӣ ва заминӣ',
            'categories_id' => 13
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Часы и хронометры",
            'tj_name' => 'Соатхо ва хронометрхо',
            'categories_id' => 13
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Что-то другое",
            'tj_name' => 'Чизи дигар',
            'categories_id' => 13
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Бухгалтерские услуги",
            'tj_name' => 'Хидматҳои ҳисобдорӣ',
            'categories_id' => 14
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Консультация специалиста по налогам",
            'tj_name' => 'Машварат бо мутахассиси андоз',
            'categories_id' => 14
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Нотариальные услуги",
            'tj_name' => 'Хизматҳои нотариалӣ',
            'categories_id' => 14
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Оформление документов",
            'tj_name' => 'Корҳои коғазӣ',
            'categories_id' => 14
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Услуги адвоката",
            'tj_name' => 'Хидматҳои қабат',
            'categories_id' => 14
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Регистрация, ликвидация компаний",
            'tj_name' => 'Бақайдгирӣ, барҳамдиҳии ширкатҳо',
            'categories_id' => 14
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Составление и подача жалоб, исков",
            'tj_name' => 'Тартиб додан ва пешниҳоди шикоятҳо ва даъвоҳо',
            'categories_id' => 14
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Составление и проверка договоров",
            'tj_name' => 'Тартиб додан ва тафтиш кардани шартномаҳо',
            'categories_id' => 14
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Юридическая консультация",
            'tj_name' => 'Машварати ҳуқуқӣ',
            'categories_id' => 14
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Юридическое сопровождение",
            'tj_name' => 'Дастгирии ҳуқуқӣ',
            'categories_id' => 14
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Тендеры",
            'tj_name' => 'Тендерҳо',
            'categories_id' => 14
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Делопроизводство и работа с кадрами",
            'tj_name' => 'Кори офис ва кори кадрҳо',
            'categories_id' => 14
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Что-то другое",
            'tj_name' => 'Чизи дигар',
            'categories_id' => 14
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Русский язык и литература",
            'tj_name' => 'забон ва адабиёти рус',
            'categories_id' => 15
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Английский язык",
            'tj_name' => 'забони Англисӣ',
            'categories_id' => 15
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Французский язык",
            'tj_name' => 'фаронсавӣ',
            'categories_id' => 15
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Немецкий язык",
            'tj_name' => 'олмонӣ',
            'categories_id' => 15
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Испанский язык",
            'tj_name' => 'испанӣ',
            'categories_id' => 15
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Другие иностранные языки",
            'tj_name' => 'Дигар забонҳои хориҷӣ',
            'categories_id' => 15
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Математика и физика",
            'tj_name' => 'математика ва физика',
            'categories_id' => 15
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Биология и химия",
            'tj_name' => 'Биология ва химия',
            'categories_id' => 15
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "История и обществознание",
            'tj_name' => 'Таърих ва ҷомеашиносӣ',
            'categories_id' => 15
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "География и экономика",
            'tj_name' => 'География ва иктисодиёт',
            'categories_id' => 15
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Информатика и программирование",
            'tj_name' => 'Илми компютерӣ ва барномасозӣ',
            'categories_id' => 15
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Подготовка к школе и младшие классы",
            'tj_name' => 'Тайёрӣ ба синфҳои мактабӣ ва наврасон',
            'categories_id' => 15
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Музыка, танцы, арт",
            'tj_name' => 'Мусиқӣ, рақс, санъат',
            'categories_id' => 15
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Помощь студентам",
            'tj_name' => 'Кӯмак ба донишҷӯён',
            'categories_id' => 15
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Логопеды",
            'tj_name' => 'Логопедҳо',
            'categories_id' => 15
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Спорт",
            'tj_name' => 'Варзиш',
            'categories_id' => 15
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Автоинструкторы",
            'tj_name' => 'Омӯзгорони ронандагӣ',
            'categories_id' => 15
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Что-то другое",
            'tj_name' => 'Чизи дигар',
            'categories_id' => 15
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Техническое обслуживание автомобиля",
            'tj_name' => 'Нигоҳдории мошин',
            'categories_id' => 16
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Диагностика и ремонт двигателя, КПП и ходовой части",
            'tj_name' => 'Диагностика ва таъмири муҳаррик, редуктор ва шасси',
            'categories_id' => 16
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Обслуживание системы кондиционирования",
            'tj_name' => 'Нигоҳдории системаи кондитсионер',
            'categories_id' => 16
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Кузовной ремонт",
            'tj_name' => 'Таъмири бадан',
            'categories_id' => 16
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Автоэлектрика",
            'tj_name' => 'Электрикҳои автомобилӣ',
            'categories_id' => 16
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Автостекла и тонировка",
            'tj_name' => 'Шишаи автомобилӣ ва рангкунӣ',
            'categories_id' => 16
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Шиномонтаж",
            'tj_name' => 'Хидмати шина',
            'categories_id' => 16
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Мойка и химчистка",
            'tj_name' => 'Шустан ва тозакунии хушк',
            'categories_id' => 16
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Тюнинг (внешний и внутренний)",
            'tj_name' => 'Танзим (берунӣ ва дохилӣ)',
            'categories_id' => 16
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Помощь на дороге",
            'tj_name' => 'Кӯмак дар канори роҳ',
            'categories_id' => 16
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Мотосервис",
            'tj_name' => 'Хизматрасонии мотоцикл',
            'categories_id' => 16
        ]);
        
        DB::table('subcategories')->insert([
            'name' => "Что-то другое",
            'tj_name' => 'Чизи дигар',
            'categories_id' => 16
        ]);
    }
}
