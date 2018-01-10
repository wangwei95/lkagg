<?php
return [
    'ok' => ['state' => 0, 'msg' => '成功'],
    'err' => ['state' => 999, 'msg' => '系统错误'],
    'emailOnly' => ['state' => 601, 'msg' => '邮箱已存在，请更换邮箱再操作！'],
    'nouser' => ['state' => 602, 'msg' => '用户名或密码错误'],
    'num' => ['state' => 701, 'msg' => '数量应该大于0'],
    'price' => ['state' => 702, 'msg' => '价格应该大于0'],
    'ddno' => ['state' => 703, 'msg' => '蛋蛋数量不够'],
    'lkno' => ['state' => 704, 'msg' => '链链数量不够'],
];
