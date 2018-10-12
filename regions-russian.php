<?php
$arr = [
    'Золотое колько России' => [
        'Сергиев Посад',
        'Переславль-Залесский',
        'Ростов Великий',
        'Ярославль',
        'Кострома',
        'Иваново',
        'Суздаль',
        'Владимир',
    ],
    'Московская область' => [
        'Подольск',
        'Балашиха',
        'Красногорск',
        'Дмитров',
        'Коломна',
        'Химки',
        'Серпухов',
        'Клин',
    ],
];
?><!doctype html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body><?php
        foreach ($arr as $regions => $value):
            echo $regions; ?>
            <ul><?php
            if (is_array($value)) :
                foreach ($value as $city) : ?>
                    <li>
                    <?php echo $city; ?>
                    </li><?php
                endforeach;
            endif; ?>
            </ul><?php
        endforeach; ?>
    </body>
    </html>