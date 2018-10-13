<?php
//redis key存放到这里 方便统计

    return [
        'class' => 'yii\redis\Connection',
        'hostname' => 'redis', //非持久
        'port' => 6379,
        'database' => 0,
    ];


