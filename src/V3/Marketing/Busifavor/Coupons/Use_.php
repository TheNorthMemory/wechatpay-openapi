<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Busifavor\Coupons;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Use_
{
    /**
     * 核销用户券(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/busifavor/coupons/use
     */
    public function post(array $options = [
        'json' => [
            'coupon_code' => 'sxxe34343434',
            'stock_id' => '100088',
            'appid' => 'wx1234567889999',
            'use_time' => '2015-05-20T13:29:35+08:00',
            'use_request_no' => '1002600620019090123143254435',
            'openid' => 'xsd3434454567676',
            'out_trade_no' => '190000001',
            'mch_id' => '190000001',
            'transaction_id' => '4200000001856498491',
        ],
    ]): ResponseInterface;

    /**
     * 核销用户券(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/busifavor/coupons/use
     */
    public function postAsync(array $options = [
        'json' => [
            'coupon_code' => 'sxxe34343434',
            'stock_id' => '100088',
            'appid' => 'wx1234567889999',
            'use_time' => '2015-05-20T13:29:35+08:00',
            'use_request_no' => '1002600620019090123143254435',
            'openid' => 'xsd3434454567676',
            'out_trade_no' => '190000001',
            'mch_id' => '190000001',
            'transaction_id' => '4200000001856498491',
        ],
    ]): PromiseInterface;
}
