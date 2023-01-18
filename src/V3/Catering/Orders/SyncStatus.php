<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Catering\Orders;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface SyncStatus
{
    /**
     * 点餐订单信息同步（渠道商/服务商）(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/catering.php?chapter=26_1
     */
    public function post(array $options = [
        'json' => [
            'sp_mchid' => '1900000100',
            'sp_appid' => 'wx8888888888888888',
            'channel_id' => '1900000109',
            'sub_mchid' => '1900000100',
            'sub_appid' => 'wx8888888888888888',
            'out_shop_no' => '6895',
            'sub_openid' => 'oYobu0Dmn6TdodZnFWKOEkqoRbI8',
            'login_token' => '071oYFSN19sCH31AyNSN15QDSN1oYFSA',
            'order_entry' => 'http://www.example.com',
            'total_amount' => 1000,
            'discount_amount' => 100,
            'user_amount' => 900,
            'status' => 'CREATE_DEAL',
            'action_time' => '2018-06-08T10:34:56+08:00',
            'pay_time' => '2018-06-08T10:34:56+08:00',
            'transaction_id' => '1009660380201506130728806387',
            'out_trade_no' => '20150806125346',
            'out_order_no' => '20150806125346',
            'out_table_no' => '1',
            'people_count' => 2,
            'dish_list' => [[
                'out_dish_no' => '1',
                'name' => '清汤锅底',
                'price' => 1,
                'unit' => 'BY_SHARE',
                'count' => 1.5,
                'discount' => 100,
                'type' => 'FAST_FOOD',
                'priority' => 1,
                'properties' => [
                    'taste' => '辣',
                    'cuisine' => '炒',
                    'main_material' => '猪肝',
                    'ingredients' => '青椒 | 辣椒 | 葱 | 八角',
                    'others' => '有机 | 农家',
                ],
            ],],
        ],
    ]): ResponseInterface;

    /**
     * 点餐订单信息同步（渠道商/服务商）(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/catering.php?chapter=26_1#async
     */
    public function postAsync(array $options = [
        'json' => [
            'sp_mchid' => '1900000100',
            'sp_appid' => 'wx8888888888888888',
            'channel_id' => '1900000109',
            'sub_mchid' => '1900000100',
            'sub_appid' => 'wx8888888888888888',
            'out_shop_no' => '6895',
            'sub_openid' => 'oYobu0Dmn6TdodZnFWKOEkqoRbI8',
            'login_token' => '071oYFSN19sCH31AyNSN15QDSN1oYFSA',
            'order_entry' => 'http://www.example.com',
            'total_amount' => 1000,
            'discount_amount' => 100,
            'user_amount' => 900,
            'status' => 'CREATE_DEAL',
            'action_time' => '2018-06-08T10:34:56+08:00',
            'pay_time' => '2018-06-08T10:34:56+08:00',
            'transaction_id' => '1009660380201506130728806387',
            'out_trade_no' => '20150806125346',
            'out_order_no' => '20150806125346',
            'out_table_no' => '1',
            'people_count' => 2,
            'dish_list' => [[
                'out_dish_no' => '1',
                'name' => '清汤锅底',
                'price' => 1,
                'unit' => 'BY_SHARE',
                'count' => 1.5,
                'discount' => 100,
                'type' => 'FAST_FOOD',
                'priority' => 1,
                'properties' => [
                    'taste' => '辣',
                    'cuisine' => '炒',
                    'main_material' => '猪肝',
                    'ingredients' => '青椒 | 辣椒 | 葱 | 八角',
                    'others' => '有机 | 农家',
                ],
            ],],
        ],
    ]): PromiseInterface;
}
