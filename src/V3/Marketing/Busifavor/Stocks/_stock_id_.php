<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Busifavor\Stocks;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _stock_id_\Couponcodes $couponcodes
 * @property-read _stock_id_\Budget $budget
 */
interface _stock_id_
{
    /**
     * 查询商家券详情(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/busifavor/stocks/%7Bstock_id%7D
     */
    public function get(array $options = [
        'stock_id' => '1212',
    ]): ResponseInterface;

    /**
     * 查询商家券详情(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/busifavor/stocks/%7Bstock_id%7D
     */
    public function getAsync(array $options = [
        'stock_id' => '1212',
    ]): PromiseInterface;

    /**
     * 修改商家券基本信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/busifavor/stocks/%7Bstock_id%7D#patch
     */
    public function patch(array $options = [
        'stock_id' => '101156451224',
        'json' => [
            'custom_entrance' => [
                'mini_programs_info' => [
                    'mini_programs_appid' => 'wx234545656765876',
                    'mini_programs_path' => '/path/index/index',
                    'entrance_words' => '欢迎选购',
                    'guiding_words' => '获取更多优惠',
                ],
                'appid' => 'wx324345hgfhfghfg',
                'hall_id' => '233455656',
                'code_display_mode' => 'BARCODE',
            ],
            'stock_name' => '8月1日活动券',
            'comment' => '活动使用',
            'goods_name' => 'xxx商品使用',
            'out_request_no' => '6122352020010133287985742',
            'display_pattern_info' => [
                'description' => 'xxx门店可用',
                'merchant_logo_url' => 'https://xxx',
                'merchant_name' => '微信支付',
                'background_color' => 'Color020',
                'coupon_image_url' => 'https://qpic.cn/xxx',
                'finder_info' => [
                    'finder_id' => 'sph6Rngt2T4RlUf',
                    'finder_video_id' => 'sph6Rngt2T4RlUf',
                    'finder_video_cover_image_url' => 'https://wxpaylogo.qpic.cn/xxx',
                ],
            ],
            'coupon_use_rule' => [
                'use_method' => 'OFF_LINE',
                'mini_programs_appid' => 'wx23232232323',
                'mini_programs_path' => '/path/index/index',
            ],
            'stock_send_rule' => [
                'natural_person_limit' => true,
                'prevent_api_abuse' => true,
            ],
            'notify_config' => [
                'notify_appid' => 'wx23232232323',
            ],
            'subsidy' => true,
        ],
    ]): ResponseInterface;

    /**
     * 修改商家券基本信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/busifavor/stocks/%7Bstock_id%7D#patch
     */
    public function patchAsync(array $options = [
        'stock_id' => '101156451224',
        'json' => [
            'custom_entrance' => [
                'mini_programs_info' => [
                    'mini_programs_appid' => 'wx234545656765876',
                    'mini_programs_path' => '/path/index/index',
                    'entrance_words' => '欢迎选购',
                    'guiding_words' => '获取更多优惠',
                ],
                'appid' => 'wx324345hgfhfghfg',
                'hall_id' => '233455656',
                'code_display_mode' => 'BARCODE',
            ],
            'stock_name' => '8月1日活动券',
            'comment' => '活动使用',
            'goods_name' => 'xxx商品使用',
            'out_request_no' => '6122352020010133287985742',
            'display_pattern_info' => [
                'description' => 'xxx门店可用',
                'merchant_logo_url' => 'https://xxx',
                'merchant_name' => '微信支付',
                'background_color' => 'Color020',
                'coupon_image_url' => 'https://qpic.cn/xxx',
                'finder_info' => [
                    'finder_id' => 'sph6Rngt2T4RlUf',
                    'finder_video_id' => 'sph6Rngt2T4RlUf',
                    'finder_video_cover_image_url' => 'https://wxpaylogo.qpic.cn/xxx',
                ],
            ],
            'coupon_use_rule' => [
                'use_method' => 'OFF_LINE',
                'mini_programs_appid' => 'wx23232232323',
                'mini_programs_path' => '/path/index/index',
            ],
            'stock_send_rule' => [
                'natural_person_limit' => true,
                'prevent_api_abuse' => true,
            ],
            'notify_config' => [
                'notify_appid' => 'wx23232232323',
            ],
            'subsidy' => true,
        ],
    ]): PromiseInterface;
}
