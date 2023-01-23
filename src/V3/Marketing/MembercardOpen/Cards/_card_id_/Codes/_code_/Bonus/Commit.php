<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\MembercardOpen\Cards\_card_id_\Codes\_code_\Bonus;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Commit
{
    /**
     * 设置支付后展示的积分到账(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter10_2.shtml
     */
    public function post(array $options = [
        'card_id' => '478515832665',
        'code' => '478515832665',
        'json' => [
            'out_trade_no' => '1217752501201407033233368018',
            'mchid' => '1230000109',
            'sub_mchid' => '1900000109',
            'bonus_value' => 30,
        ],
    ]): ResponseInterface;

    /**
     * 设置支付后展示的积分到账(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter10_2.shtml#async
     */
    public function postAsync(array $options = [
        'card_id' => '478515832665',
        'code' => '478515832665',
        'json' => [
            'out_trade_no' => '1217752501201407033233368018',
            'mchid' => '1230000109',
            'sub_mchid' => '1900000109',
            'bonus_value' => 30,
        ],
    ]): PromiseInterface;
}
