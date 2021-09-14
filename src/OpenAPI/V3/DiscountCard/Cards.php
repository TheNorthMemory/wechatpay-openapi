<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\DiscountCard;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 * @property-read Cards\_out_card_code_ $_out_card_code_
 */
interface Cards
{
    /**
     * 预受理领卡请求(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/discount-card/chapter3_1.shtml
     */
    public function post(array $options = [
        'json' => [
            'out_card_code' => '',
            'card_template_id' => '',
            'appid' => '',
            'notify_url' => '',
        ],
    ]): ResponseInterface;

    /**
     * 预受理领卡请求(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/discount-card/chapter3_1.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'out_card_code' => '',
            'card_template_id' => '',
            'appid' => '',
            'notify_url' => '',
        ],
    ]): PromiseInterface;
}
