<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\MembercardOpen\Cards\_card_id_\Codes\_code_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Activate
{
    /**
     * 激活会员卡（跳转型激活）(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter3_10.shtml
     */
    public function post(array $options = [
        'card_id' => '',
        'code' => '',
        'json' => [
            'membership_number' => '316510891298',
        ],
    ]): ResponseInterface;

    /**
     * 激活会员卡（跳转型激活）(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter3_10.shtml#async
     */
    public function postAsync(array $options = [
        'card_id' => '',
        'code' => '',
        'json' => [
            'membership_number' => '316510891298',
        ],
    ]): PromiseInterface;
}
