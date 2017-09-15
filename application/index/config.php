<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    // +----------------------------------------------------------------------
    // | 模板设置
    // +----------------------------------------------------------------------
    'url_common_param'       => true,
    'template' => [
        'layout_on' => true,
        'layout_name' => 'layout/main',
        'type' => 'Think',
        // 模板路径
        'view_path' => '',
        // 模板后缀
        'view_suffix' => 'php',
        // 模板文件名分隔符
        'view_depr' => DS,
        // 模板引擎普通标签开始标记
        'tpl_begin' => '{',
        // 模板引擎普通标签结束标记
        'tpl_end' => '}',
        // 标签库标签开始标记
        'taglib_begin' => '{',
        // 标签库标签结束标记
        'taglib_end' => '}',
    ],
    //导航配置
    'nav' => [
        ['name' => '首页', 'link' => 'index/index','controller'=>'index','childs'=>[]],
        ['name' => '业务体系', 'link' => 'yewu/index','controller'=>'yewu',
            'childs' => [
                ['name' => '全案营销专家', 'link' => 'yewu/index',],
                ['name' => '金牌托管管家', 'link' => 'yewu/tuoguan',],
                ['name' => '轻应用联盟', 'link' => 'yewu/qyy',],
                //这个是外链
                ['name' => '云服务平台', 'link' => 'http://yfw.weilaihexun.com/', 'out' => true],

            ]
        ],
        ['name' => '品牌案例', 'link' => 'anli/index','controller'=>'anli',
        'childs' => [
                 /*   ['name' => '营销专家', 'link' => 'anli/yingxiao',],
                ['name' => '托管专家', 'link' => 'anli/guanjia',],
                ['name' => '网站建设', 'link' => 'anli/website',],
                ['name' => 'APP开发', 'link' => 'anli/app',],
                ['name' => '更多案例', 'link' => 'anli/index',],*/

            ]
        ],
        ['name' => '资讯中心', 'link' => 'news/index','controller'=>'news',
            'childs' => [
                ['name' => '媒体报道', 'link' => 'news/get_list?cate=1',],
                ['name' => '行业资讯', 'link' => 'news/get_list?cate=2',],
                ['name' => '企业动态', 'link' => 'news/get_list?cate=3',],
//                ['name' => '运营课堂', 'link' => 'news/chuangke',],

            ]
        ],
        ['name' => '渠道与招商', 'link' => 'channel/index','controller'=>'channel','childs'=>[]],
        ['name' => '关于我们', 'link' => 'about/index','controller'=>'about',
            'childs' => [
                ['name' => '公司简介', 'link' => 'about/index',],
                ['name' => '客户服务', 'link' => 'about/service',],
                ['name' => '法律声明', 'link' => 'about/law',],
                ['name' => '招贤纳士', 'link' => 'about/job',],
                ['name' => '联系我们', 'link' => 'about/contact',],

            ]
        ],
    ]

];
