<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Busifavor\Coupons;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Return_
{
    /**
     * 申请退券(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_2_13.shtml
     */
    public function post(array $options = [
        'json' => [
            'coupon_code' => 'sxxe34343434',
            'stock_id' => '1234567891',
            'return_request_no' => '1002600620019090123143254436',
        ],
    ]): ResponseInterface;

    /**
     * 申请退券(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_2_13.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'coupon_code' => 'sxxe34343434',
            'stock_id' => '1234567891',
            'return_request_no' => '1002600620019090123143254436',
        ],
    ]): PromiseInterface;
}
