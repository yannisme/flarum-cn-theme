<?php

/*
 * This file is part of yannisme/cntheme.
 *
 * Copyright (c) 2021 yannis.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Yannisme\CNTheme;

use Flarum\Extend;

return [
    (new Extend\Frontend('forum'))
        ->css(__DIR__.'/less/forum.less'),
];
