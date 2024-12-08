<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Busifavor\Coupons;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Deactivate
{
    /**
     * 使券失效(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/busifavor/coupons/deactivate
     */
    public function post(array $options = [
        'json' => [
            'coupon_code' => 'sxxe34343434',
            'stock_id' => '1234567891',
            'deactivate_request_no' => '1002600620019090123143254436',
            'deactivate_reason' => '此券使用时间设置错误',
        ],
    ]): ResponseInterface;

    /**
     * 使券失效(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/busifavor/coupons/deactivate
     */
    public function postAsync(array $options = [
        'json' => [
            'coupon_code' => 'sxxe34343434',
            'stock_id' => '1234567891',
            'deactivate_request_no' => '1002600620019090123143254436',
            'deactivate_reason' => '此券使用时间设置错误',
        ],
    ]): PromiseInterface;
}
