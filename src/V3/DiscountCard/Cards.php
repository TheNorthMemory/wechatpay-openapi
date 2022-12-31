<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\DiscountCard;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
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
            'out_card_code' => '6e8369071cd942c0476613f9d1ce9ca3',
            'card_template_id' => '87789b2f25177433bcbf407e8e471f95',
            'appid' => 'wxd678efh567hg6787',
            'notify_url' => 'https://api.test.com',
        ],
    ]): ResponseInterface;

    /**
     * 预受理领卡请求(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/discount-card/chapter3_1.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'out_card_code' => '6e8369071cd942c0476613f9d1ce9ca3',
            'card_template_id' => '87789b2f25177433bcbf407e8e471f95',
            'appid' => 'wxd678efh567hg6787',
            'notify_url' => 'https://api.test.com',
        ],
    ]): PromiseInterface;
}
