<?php
/**
 * Created by PhpStorm.
 * User: terleckiygp
 * Date: 08.11.19
 * Time: 12:45
 */

namespace App\Core\Services;

use App\Core\Interfaces\DataInterface;
use App\Model\News;


class DatabaseNewsAdapter implements DataInterface
{
    protected static $array = [
        [
            'id' => '1',
            'user_id' => '1',
            "game_id" => 4,
            "img" => "1.jpeg",
            "meta_title" => "meta_title",
            "meta_description" => "meta_description",
            "viewed" => 841,
            "created_at" => "2019-08-16 12:23:29",
            "updated_at" => "2019-08-16 12:23:29",
            'title' => 'В War Thunder добавили поддержку технологии Nvidia Ansel',
            'text' => 'Создатели War Thunder объявили о появлении в своей игре новой технологии Nvidia Ansel. Передовая система позволит фанатам игры сделать захватывающие панорамные скриншоты с возможностью просмотра в 360 градусов. Как стало известно, игроки смогут в любой момент ...',
            'view' => '3',
        ],
        [
            'id' => '2',
            'user_id' => '1',
            "game_id" => 4,
            "img" => "1.jpeg",
            "meta_title" => "meta_title",
            "meta_description" => "meta_description",
            "viewed" => 841,
            "created_at" => "2019-08-16 12:23:29",
            "updated_at" => "2019-08-16 12:23:29",
            'title' => 'В Titanfall 2 предлагают сыграть бесплатно',
            'text' => 'Компания Electronic Arts открывает бесплатный доступ к своему шутеруTitanfall 2. Все желающие смогут включиться в игру, чтобы познать мистическую связь пилота с титаном, не потратив ни гроша. Как стало известно , акцию организуют на протяжении ограниченного ...',
            'view' => '4',
        ],
        [
            'id' => '3',
            'user_id' => '1',
            "game_id" => 4,
            "img" => "1.jpeg",
            "meta_title" => "meta_title",
            "meta_description" => "meta_description",
            "viewed" => 841,
            "created_at" => "2019-08-16 12:23:29",
            "updated_at" => "2019-08-16 12:23:29",
            'title' => 'Возвращение в Каражан - World of Warcraft: Legion',
            'text' => 'Blizzard Entertainment спешит напомнить, что буквально накануне World of Warcraft, не так давно дополненная при помощи Legion, пережила обновление, которое открыло пользователям доступ к свежему контенту.В частности, «Возвращение в Каражан» подарило ...',
            'view' => '13',
        ],
        [
            'id' => '4',
            'user_id' => '1',
            "game_id" => 4,
            "img" => "1.jpeg",
            "meta_title" => "meta_title",
            "meta_description" => "meta_description",
            "viewed" => 841,
            "created_at" => "2019-08-16 12:23:29",
            "updated_at" => "2019-08-16 12:23:29",
            'title' => 'Розыгрыш в стиле Fallout 4 предлагает получить место в Убежище',
            'text' => 'Доброе утро! Я здесь, чтобы поговорить о вашем будущем и Vault-Tec! Нет-нет, стойте, не закрывайте вкладку — я знаю, что перед выходом Fallout 4 вы слышали это название слишком часто, но все, что мне нужно — это всего лишь пять минут вашего времени! Вы все еще здесь? ...',
            'view' => '2313',
        ],
        [
            'id' => '5',
            'user_id' => '1',
            "game_id" => 4,
            "img" => "1.jpeg",
            "meta_title" => "meta_title",
            "meta_description" => "meta_description",
            "viewed" => 841,
            "created_at" => "2019-08-16 12:23:29",
            "updated_at" => "2019-08-16 12:23:29",
            'title' => 'Хакеры обошли последнюю защиту Microsoft',
            'text' => 'Пользователь Infogram сумел обойти последнюю антипиратскую защиту Microsoft, которая использовалась в играх Halo 5: Forge и Forza Horizon 3. Новинки были зашифрованы в формате appx таким образом, что модифицировать файлы игры было нельзя, а расшифровка происходила пр помощи ...',
            'view' => '333',
        ],
        [
            'id' => '6',
            'user_id' => '1',
            "game_id" => 4,
            "img" => "1.jpeg",
            "meta_title" => "meta_title",
            "meta_description" => "meta_description",
            "viewed" => 841,
            "created_at" => "2019-08-16 12:23:29",
            "updated_at" => "2019-08-16 12:23:29",
            'title' => 'Раскрытие таинственного дела цареубийства в For The King',
            'text' => 'Король умер, и королева ищет ответы. Кто бы мог помочь ей найти ответы на все вопросы? For The King - ролевая игра с основным сюжетом убийство короля и множества отвитлений, увлекающая большим игровым миром который предстоит вам исследовать. Первое решение ...',
            'view' => '132',
        ],
        [
            'id' => '7',
            'user_id' => '1',
            "game_id" => 4,
            "img" => "1.jpeg",
            "meta_title" => "meta_title",
            "meta_description" => "meta_description",
            "viewed" => 841,
            "created_at" => "2019-08-16 12:23:29",
            "updated_at" => "2019-08-16 12:23:29",
            'title' => 'odin7',
            'text' => '',
            'view' => '332',
        ],
        [
            'id' => '8',
            'user_id' => '1',
            "game_id" => 4,
            "img" => "1.jpeg",
            "meta_title" => "meta_title",
            "meta_description" => "meta_description",
            "viewed" => 841,
            "created_at" => "2019-08-16 12:23:29",
            "updated_at" => "2019-08-16 12:23:29",
            'title' => 'odin8',
            'text' => '',
            'view' => '3',
        ],
        [
            'id' => '9',
            'user_id' => '1',
            "game_id" => 4,
            "img" => "1.jpeg",
            "meta_title" => "meta_title",
            "meta_description" => "meta_description",
            "viewed" => 841,
            "created_at" => "2019-08-16 12:23:29",
            "updated_at" => "2019-08-16 12:23:29",
            'title' => 'odin9',
            'text' => '',
            'view' => '3',
        ],
        [
            'id' => '10',
            'user_id' => '1',
            "game_id" => 4,
            "img" => "1.jpeg",
            "meta_title" => "meta_title",
            "meta_description" => "meta_description",
            "viewed" => 841,
            "created_at" => "2019-08-16 12:23:29",
            "updated_at" => "2019-08-16 12:23:29",
            'title' => 'odin10',
            'text' => '',
            'view' => '3',
        ],
        [
            'id' => '11',
            'user_id' => '1',
            "game_id" => 4,
            "img" => "1.jpeg",
            "meta_title" => "meta_title",
            "meta_description" => "meta_description",
            "viewed" => 841,
            "created_at" => "2019-08-16 12:23:29",
            "updated_at" => "2019-08-16 12:23:29",
            'title' => 'odin10',
            'text' => '',
            'view' => '3',
        ],
        [
            'id' => '12',
            'user_id' => '1',
            "game_id" => 4,
            "img" => "1.jpeg",
            "meta_title" => "meta_title",
            "meta_description" => "meta_description",
            "viewed" => 841,
            "created_at" => "2019-08-16 12:23:29",
            "updated_at" => "2019-08-16 12:23:29",
            'title' => 'odin10',
            'text' => '',
            'view' => '3',
        ],
        [
            'id' => '13',
            'user_id' => '1',
            "game_id" => 4,
            "img" => "1.jpeg",
            "meta_title" => "meta_title",
            "meta_description" => "meta_description",
            "viewed" => 841,
            "created_at" => "2019-08-16 12:23:29",
            "updated_at" => "2019-08-16 12:23:29",
            'title' => 'odin10',
            'text' => '',
            'view' => '3',
        ],
        [
            'id' => '14',
            'user_id' => '1',
            "game_id" => 4,
            "img" => "1.jpeg",
            "meta_title" => "meta_title",
            "meta_description" => "meta_description",
            "viewed" => 841,
            "created_at" => "2019-08-16 12:23:29",
            "updated_at" => "2019-08-16 12:23:29",
            'title' => 'odin10',
            'text' => '',
            'view' => '3',
        ],
        [
            'id' => '15',
            'user_id' => '1',
            "game_id" => 4,
            "img" => "1.jpeg",
            "meta_title" => "meta_title",
            "meta_description" => "meta_description",
            "viewed" => 841,
            "created_at" => "2019-08-16 12:23:29",
            "updated_at" => "2019-08-16 12:23:29",
            'title' => 'odin10',
            'text' => '',
            'view' => '3',
        ],
        [
            'id' => '16',
            'user_id' => '1',
            "game_id" => 4,
            "img" => "1.jpeg",
            "meta_title" => "meta_title",
            "meta_description" => "meta_description",
            "viewed" => 841,
            "created_at" => "2019-08-16 12:23:29",
            "updated_at" => "2019-08-16 12:23:29",
            'title' => 'odin10',
            'text' => '',
            'view' => '3',
        ],
        [
            'id' => '17',
            'user_id' => '1',
            "game_id" => 4,
            "img" => "1.jpeg",
            "meta_title" => "meta_title",
            "meta_description" => "meta_description",
            "viewed" => 841,
            "created_at" => "2019-08-16 12:23:29",
            "updated_at" => "2019-08-16 12:23:29",
            'title' => 'odin10',
            'text' => '',
            'view' => '3',
        ],
        [
            'id' => '18',
            'user_id' => '1',
            "game_id" => 4,
            "img" => "1.jpeg",
            "meta_title" => "meta_title",
            "meta_description" => "meta_description",
            "viewed" => 841,
            "created_at" => "2019-08-16 12:23:29",
            "updated_at" => "2019-08-16 12:23:29",
            'title' => 'odin10',
            'text' => '',
            'view' => '3',
        ],
        [
            'id' => '19',
            'user_id' => '1',
            "game_id" => 4,
            "img" => "1.jpeg",
            "meta_title" => "meta_title",
            "meta_description" => "meta_description",
            "viewed" => 841,
            "created_at" => "2019-08-16 12:23:29",
            "updated_at" => "2019-08-16 12:23:29",
            'title' => 'odin10',
            'text' => '',
            'view' => '3',
        ],
        [
            'id' => '20',
            'user_id' => '1',
            "game_id" => 4,
            "img" => "1.jpeg",
            "meta_title" => "meta_title",
            "meta_description" => "meta_description",
            "viewed" => 841,
            "created_at" => "2019-08-16 12:23:29",
            "updated_at" => "2019-08-16 12:23:29",
            'title' => 'odin10',
            'text' => '',
            'view' => '3',
        ],
        [
            'id' => '21',
            'user_id' => '1',
            "game_id" => 4,
            "img" => "1.jpeg",
            "meta_title" => "meta_title",
            "meta_description" => "meta_description",
            "viewed" => 841,
            "created_at" => "2019-08-16 12:23:29",
            "updated_at" => "2019-08-16 12:23:29",
            'title' => 'odin10',
            'text' => '',
            'view' => '3',
        ],
        [
            'id' => '109',
            'user_id' => '1',
            "game_id" => 4,
            "img" => "1.jpeg",
            "meta_title" => "meta_title",
            "meta_description" => "meta_description",
            "viewed" => 841,
            "created_at" => "2019-08-16 12:23:29",
            "updated_at" => "2019-08-16 12:23:29",
            'title' => 'odin10',
            'text' => '',
            'view' => '3',
        ],
    ];

    public static function findOrFail($id)
    {
        foreach (self::$array as $item) {
            if ($item['id'] == $id) return $item;
        }
        return [];
    }

    public static function all()
    {
        return self::$array;
    }

    public static function count()
    {
        return count(self::$array);
    }

    public static function create($id)
    {
        return $id;
    }

    public static function update($id)
    {
        return $id;
    }

    public static function destroy($id)
    {
        return $id;
    }
}