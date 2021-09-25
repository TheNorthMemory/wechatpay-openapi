<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\MembercardOpen\Cards\_card_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Upgrade
{
    /**
     * 老会员卡模板升级(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter3_6.shtml
     */
    public function post(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        'json' => [
            'brand_id' => '1001622624',
            'appid' => 'wxea9c30890f48d5ae',
        ],
    ]): ResponseInterface;

    /**
     * 老会员卡模板升级(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter3_6.shtml#async
     */
    public function postAsync(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        'json' => [
            'brand_id' => '1001622624',
            'appid' => 'wxea9c30890f48d5ae',
        ],
    ]): PromiseInterface;
}
