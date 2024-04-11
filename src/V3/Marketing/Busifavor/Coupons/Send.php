<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Busifavor\Coupons;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Send
{
    /**
     * 向用户发券(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/products/merchant-exclusive-coupon/introduction.html
     */
    public function post(array $options = [
        'json' => [
            'openid' => 'xsd3434454567676',
            'appid' => 'wx1234567889999',
            'stock_id' => '100088',
            'out_request_no' => '1002600620019090123143254435',
            'coupon_code' => 'sxxe34343434',
        ],
    ]): ResponseInterface;

    /**
     * 向用户发券(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/products/merchant-exclusive-coupon/introduction.html#async
     */
    public function postAsync(array $options = [
        'json' => [
            'openid' => 'xsd3434454567676',
            'appid' => 'wx1234567889999',
            'stock_id' => '100088',
            'out_request_no' => '1002600620019090123143254435',
            'coupon_code' => 'sxxe34343434',
        ],
    ]): PromiseInterface;
}
