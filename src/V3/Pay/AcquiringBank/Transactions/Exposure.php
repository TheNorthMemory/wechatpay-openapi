<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Pay\AcquiringBank\Transactions;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Exposure
{
    /**
     * 微信分付-支付方式前置服务(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/pay/acquiring-bank/transactions/exposure
     */
    public function post(array $options = [
        'json' => [
            'acquiring_bank_id' => '1356485',
            'acquiring_bank_appid' => 'wx8888888888888888',
            'merchant_id' => '1900000109',
            'merchant_appid' => 'wxd678efh567hg6999',
            'channel_id' => '20001111',
            'payer' => [
                'acquiring_bank_openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
                'phone_number_hash' => 'ABDEF3445546456B',
            ],
            'out_trade_no' => '1217752501201407033233368018',
        ],
    ]): ResponseInterface;

    /**
     * 微信分付-支付方式前置服务(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/pay/acquiring-bank/transactions/exposure
     */
    public function postAsync(array $options = [
        'json' => [
            'acquiring_bank_id' => '1356485',
            'acquiring_bank_appid' => 'wx8888888888888888',
            'merchant_id' => '1900000109',
            'merchant_appid' => 'wxd678efh567hg6999',
            'channel_id' => '20001111',
            'payer' => [
                'acquiring_bank_openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
                'phone_number_hash' => 'ABDEF3445546456B',
            ],
            'out_trade_no' => '1217752501201407033233368018',
        ],
    ]): PromiseInterface;
}
