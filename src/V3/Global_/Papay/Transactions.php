<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Global_\Papay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Transactions\OutTradeNo $outTradeNo
 * @property-read Transactions\_transaction_id_ $_transaction_id_
 */
interface Transactions
{
    /**
     * 支付扣款(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/papay/transactions
     */
    public function post(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'sp_appid' => 'wx8888888888888888',
            'sub_mchid' => '1230000109',
            'sub_appid' => 'wxcbda96de0b165484',
            'description' => 'image形象店-深圳腾大- QQ公仔',
            'attach' => '自定义数据',
            'notify_url' => 'https://www.weixin.qq.com/wxpay/pay.php',
            'out_trade_no' => '1217752501201407033233368018',
            'goods_tag' => 'WXG',
            'merchant_category_code' => '1011',
            'contract_id' => '100005698',
            'amount' => [
                'total' => 888,
                'currency' => 'HKD',
            ],
            'scene_info' => [
                'device_id' => '013467007045764',
                'device_ip' => '128.0.0.1',
            ],
        ],
    ]): ResponseInterface;

    /**
     * 支付扣款(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/papay/transactions
     */
    public function postAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'sp_appid' => 'wx8888888888888888',
            'sub_mchid' => '1230000109',
            'sub_appid' => 'wxcbda96de0b165484',
            'description' => 'image形象店-深圳腾大- QQ公仔',
            'attach' => '自定义数据',
            'notify_url' => 'https://www.weixin.qq.com/wxpay/pay.php',
            'out_trade_no' => '1217752501201407033233368018',
            'goods_tag' => 'WXG',
            'merchant_category_code' => '1011',
            'contract_id' => '100005698',
            'amount' => [
                'total' => 888,
                'currency' => 'HKD',
            ],
            'scene_info' => [
                'device_id' => '013467007045764',
                'device_ip' => '128.0.0.1',
            ],
        ],
    ]): PromiseInterface;
}
