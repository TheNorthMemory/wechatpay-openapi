<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\ShoppingReceipt;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Customentrances\_brand_id_ $_brand_id_
 */
interface Customentrances
{
    /**
     * 创建自定义入口(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/shopping-receipt/customentrances
     */
    public function post(array $options = [
        'json' => [
            'custom_entrance_type' => 'MERCHANT_ACTIVITY',
            'subtitle' => '双十一8折活动',
            'goods_thumbnail_url' => 'https://qpic.cn/xxx',
            'start_time' => '2015-05-20T13:29:35+08:00',
            'end_time' => '2015-05-20T13:29:35+08:00',
            'custom_entrance_state' => 'ONLINE',
            'brand_id' => '1014',
            'out_request_no' => '6122352020010133287985742',
            'jump_link' => [
                'mini_programs_appid' => 'wxea9c30a90fs8d3fe',
                'mini_programs_path' => '/pages/bonus/bonus',
            ],
        ],
    ]): ResponseInterface;

    /**
     * 创建自定义入口(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/shopping-receipt/customentrances
     */
    public function postAsync(array $options = [
        'json' => [
            'custom_entrance_type' => 'MERCHANT_ACTIVITY',
            'subtitle' => '双十一8折活动',
            'goods_thumbnail_url' => 'https://qpic.cn/xxx',
            'start_time' => '2015-05-20T13:29:35+08:00',
            'end_time' => '2015-05-20T13:29:35+08:00',
            'custom_entrance_state' => 'ONLINE',
            'brand_id' => '1014',
            'out_request_no' => '6122352020010133287985742',
            'jump_link' => [
                'mini_programs_appid' => 'wxea9c30a90fs8d3fe',
                'mini_programs_path' => '/pages/bonus/bonus',
            ],
        ],
    ]): PromiseInterface;
}
