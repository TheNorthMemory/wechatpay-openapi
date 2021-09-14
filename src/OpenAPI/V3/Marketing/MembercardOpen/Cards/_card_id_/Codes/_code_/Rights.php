<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\MembercardOpen\Cards\_card_id_\Codes\_code_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Rights
{
    /**
     * 设置会员权益(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter5_2.shtml
     */
    public function patch(array $options = [
        'card_id' => '',
        'code' => '',
        'json' => [
            'before_bonus_value' => 0,
            'bonus_value' => 0,
            'add_bonus_value' => 0,
            'out_request_no' => '',
        ],
    ]): ResponseInterface;

    /**
     * 设置会员权益(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter5_2.shtml#async
     */
    public function patchAsync(array $options = [
        'card_id' => '',
        'code' => '',
        'json' => [
            'before_bonus_value' => 0,
            'bonus_value' => 0,
            'add_bonus_value' => 0,
            'out_request_no' => '',
        ],
    ]): PromiseInterface;
}
