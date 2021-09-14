<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Busifavor\Users\_openid_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 * @property-read Coupons\_coupon_code_ $_coupon_code_
 */
interface Coupons
{
    /**
     * 根据过滤条件查询用户券(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_2_5.shtml
     */
    public function get(array $options = [
        'openid' => '',
        'query' => [
            'appid' => '',
            'stock_id' => '',
            'coupon_state' => '',
            'creator_merchant' => '',
            'belong_merchant' => '',
            'sender_merchant' => '',
            'offset' => '',
            'limit' => '',
        ],
    ]): ResponseInterface;

    /**
     * 根据过滤条件查询用户券(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_2_5.shtml#async
     */
    public function getAsync(array $options = [
        'openid' => '',
        'query' => [
            'appid' => '',
            'stock_id' => '',
            'coupon_state' => '',
            'creator_merchant' => '',
            'belong_merchant' => '',
            'sender_merchant' => '',
            'offset' => '',
            'limit' => '',
        ],
    ]): PromiseInterface;
}
