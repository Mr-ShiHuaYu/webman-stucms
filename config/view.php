<?php
/**
 * This file is part of webman.
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the MIT-LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @author    walkor<walkor@workerman.net>
 * @copyright walkor<walkor@workerman.net>
 * @link      http://www.workerman.net/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

use support\view\Raw;
use support\view\Twig;
use support\view\Blade;
use support\view\ThinkPHP;

return [
    // 'handler' => Raw::class
    'handler' => Blade::class,
    // 'extension' => function (Jenssegers\Blade\Blade $blade) {
    //     // 给blade添加指令
    //     $blade->directive('mydate', function ($timestamp) {
    /*        return "<?php echo date('Y-m-d', $timestamp); ?>";*/
    //     });
    //
    //     $blade->directive("datetime",function ($expression){
    /*        return "<?php echo ($expression)->format('Y-m-d H:i:s'); ?>";*/
    //     });
    // }
];