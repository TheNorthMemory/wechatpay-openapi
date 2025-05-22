<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Pay\Partner\Transactions;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Exposure
{
    /**
     * 微信分付-支付方式前置服务(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/pay/partner/transactions/exposure
     */
    public function post(array $options = [
        'json' => [
            'sp_appid' => 'wx8888888888888888',
            'sp_mchid' => '1230000109',
            'sub_appid' => 'wxd678efh567hg6999',
            'sub_mchid' => '1900000109',
            'payer' => [
                'sp_openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
                'phone_number_hash' => 'ABDEF3445546456B',
            ],
            'out_trade_no' => '1217752501201407033233368018',
        ],
    ]): ResponseInterface;

    /**
     * 微信分付-支付方式前置服务(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/pay/partner/transactions/exposure
     */
    public function postAsync(array $options = [
        'json' => [
            'sp_appid' => 'wx8888888888888888',
            'sp_mchid' => '1230000109',
            'sub_appid' => 'wxd678efh567hg6999',
            'sub_mchid' => '1900000109',
            'payer' => [
                'sp_openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
                'phone_number_hash' => 'ABDEF3445546456B',
            ],
            'out_trade_no' => '1217752501201407033233368018',
        ],
    ]): PromiseInterface;
}
