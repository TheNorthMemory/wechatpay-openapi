<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\MembercardOpen\Cards\_card_id_\Codes\_code_\Bonus;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Prepare
{
    /**
     * 支付结果页展示会员积分(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-open/cards/%7Bcard_id%7D/codes/%7Bcode%7D/bonus/prepare
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
     * 支付结果页展示会员积分(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-open/cards/%7Bcard_id%7D/codes/%7Bcode%7D/bonus/prepare
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
