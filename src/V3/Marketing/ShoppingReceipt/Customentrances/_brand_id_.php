<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\ShoppingReceipt\Customentrances;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _brand_id_
{
    /**
     * 查询自定义入口(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/shopping-receipt/customentrances/%7Bbrand_id%7D
     */
    public function get(array $options = [
        'brand_id' => '1014',
    ]): ResponseInterface;

    /**
     * 查询自定义入口(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/shopping-receipt/customentrances/%7Bbrand_id%7D
     */
    public function getAsync(array $options = [
        'brand_id' => '1014',
    ]): PromiseInterface;

    /**
     * 更新自定义入口(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/shopping-receipt/customentrances/%7Bbrand_id%7D#patch
     */
    public function patch(array $options = [
        'brand_id' => '1014',
        'json' => [
            'custom_entrance_type' => 'MERCHANT_ACTIVITY',
            'subtitle' => '双十一8折活动',
            'goods_thumbnail_url' => 'https://qpic.cn/xxx',
            'custom_entrance_state' => 'ONLINE',
            'start_time' => '2015-05-20T13:29:35+08:00',
            'end_time' => '2019-12-31T13:29:35.120+08:00',
            'out_request_no' => '100002322019090134234sfdf',
            'jump_link' => [
                'mini_programs_appid' => 'wxea9c30a90fs8d3fe',
                'mini_programs_path' => '/pages/bonus/bonus',
            ],
        ],
    ]): ResponseInterface;

    /**
     * 更新自定义入口(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/shopping-receipt/customentrances/%7Bbrand_id%7D#patch
     */
    public function patchAsync(array $options = [
        'brand_id' => '1014',
        'json' => [
            'custom_entrance_type' => 'MERCHANT_ACTIVITY',
            'subtitle' => '双十一8折活动',
            'goods_thumbnail_url' => 'https://qpic.cn/xxx',
            'custom_entrance_state' => 'ONLINE',
            'start_time' => '2015-05-20T13:29:35+08:00',
            'end_time' => '2019-12-31T13:29:35.120+08:00',
            'out_request_no' => '100002322019090134234sfdf',
            'jump_link' => [
                'mini_programs_appid' => 'wxea9c30a90fs8d3fe',
                'mini_programs_path' => '/pages/bonus/bonus',
            ],
        ],
    ]): PromiseInterface;
}
