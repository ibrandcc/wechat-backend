<?php

/*
 * This file is part of ibrand/wechat-backend.
 *
 * (c) iBrand <https://www.ibrand.cc>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace iBrand\Wechat\Backend\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WechatBackendTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $lastOrder = DB::table(config('admin.database.menu_table'))->max('order');

        $parent = DB::table(config('admin.database.menu_table'))->insertGetId([
            'parent_id' => 0,
            'order' => $lastOrder++,
            'title' => '微信管理',
            'icon' => 'fa-tasks',
            'blank' => 1,
            'uri' => 'wechat/account',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        $second = DB::table(config('admin.database.menu_table'))->insertGetId([
            'parent_id' => $parent,
            'order' => $lastOrder++,
            'title' => '公众号管理',
            'icon' => 'fa-wechat',
            'blank' => 0,
            'uri' => '',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table(config('admin.database.menu_table'))->insertGetId([
            'parent_id' => $second,
            'order' => $lastOrder++,
            'title' => '公众号列表',
            'icon' => 'fa-list-ol',
            'blank' => 1,
            'uri' => 'wechat/account',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table(config('admin.database.menu_table'))->insertGetId([
            'parent_id' => $second,
            'order' => $lastOrder++,
            'title' => '微信设置',
            'icon' => 'fa-expeditedssl',
            'blank' => 1,
            'uri' => 'wechat/init',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        $basic = DB::table(config('admin.database.menu_table'))->insertGetId([
            'parent_id' => $parent,
            'order' => $lastOrder++,
            'title' => '基础功能',
            'icon' => 'fa-archive',
            'blank' => 0,
            'uri' => '',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table(config('admin.database.menu_table'))->insertGetId([
            'parent_id' => $basic,
            'order' => $lastOrder++,
            'title' => '自定义菜单',
            'icon' => 'fa-align-justify',
            'blank' => 1,
            'uri' => 'wechat/base/menu',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table(config('admin.database.menu_table'))->insertGetId([
            'parent_id' => $basic,
            'order' => $lastOrder++,
            'title' => '自动回复',
            'icon' => 'fa-comment-o',
            'blank' => 1,
            'uri' => 'wechat/base/events',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        $fans = DB::table(config('admin.database.menu_table'))->insertGetId([
            'parent_id' => $parent,
            'order' => $lastOrder++,
            'title' => '粉丝管理',
            'icon' => 'fa-heart',
            'blank' => 0,
            'uri' => '',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table(config('admin.database.menu_table'))->insertGetId([
            'parent_id' => $fans,
            'order' => $lastOrder++,
            'title' => '粉丝列表',
            'icon' => 'fa-user-md',
            'blank' => 1,
            'uri' => 'wechat/fans',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        $material = DB::table(config('admin.database.menu_table'))->insertGetId([
            'parent_id' => $parent,
            'order' => $lastOrder++,
            'title' => '素材管理',
            'icon' => 'fa-clone',
            'blank' => 0,
            'uri' => '',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table(config('admin.database.menu_table'))->insertGetId([
            'parent_id' => $material,
            'order' => $lastOrder++,
            'title' => '图片素材',
            'icon' => 'fa-clone',
            'blank' => 1,
            'uri' => 'wechat/material?type=1',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table(config('admin.database.menu_table'))->insertGetId([
            'parent_id' => $material,
            'order' => $lastOrder++,
            'title' => '视频素材',
            'icon' => 'fa-video-camera',
            'blank' => 1,
            'uri' => 'wechat/material?type=2',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table(config('admin.database.menu_table'))->insertGetId([
            'parent_id' => $material,
            'order' => $lastOrder++,
            'title' => '图文素材',
            'icon' => 'fa-file-text',
            'blank' => 1,
            'uri' => 'wechat/material?type=4',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table(config('admin.database.menu_table'))->insertGetId([
            'parent_id' => $material,
            'order' => $lastOrder++,
            'title' => '文本素材',
            'icon' => 'fa-file-text-o',
            'blank' => 1,
            'uri' => 'wechat/material?type=5',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        $notice = DB::table(config('admin.database.menu_table'))->insertGetId([
            'parent_id' => $parent,
            'order' => $lastOrder++,
            'title' => '模板消息',
            'icon' => 'fa-external-link',
            'blank' => 0,
            'uri' => '',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table(config('admin.database.menu_table'))->insertGetId([
            'parent_id' => $notice,
            'order' => $lastOrder++,
            'title' => '我的模板',
            'icon' => 'fa-sitemap',
            'blank' => 1,
            'uri' => 'wechat/notice',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        $qr_code = DB::table(config('admin.database.menu_table'))->insertGetId([
            'parent_id' => $parent,
            'order' => $lastOrder++,
            'title' => '二维码管理',
            'icon' => 'fa-bookmark',
            'blank'=> 0,
            'uri' => '',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table(config('admin.database.menu_table'))->insertGetId([
            'parent_id' => $qr_code,
            'order' => $lastOrder++,
            'title' => '二维码列表',
            'icon' => 'fa-qrcode',
            'blank' => 1,
            'uri' => 'wechat/QRCode',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table(config('admin.database.menu_table'))->insertGetId([
            'parent_id' => $qr_code,
            'order' => $lastOrder++,
            'title' => '扫码统计',
            'icon' => 'fa-ambulance',
            'blank' => 1,
            'uri' => 'wechat/QRCode/count/scans',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);
    }
}
