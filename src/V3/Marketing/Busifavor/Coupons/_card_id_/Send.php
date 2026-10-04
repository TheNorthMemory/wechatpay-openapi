<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Busifavor\Coupons\_card_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Send
{
    /**
     * 发放消费卡(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/busifavor/coupons/%7Bcard_id%7D/send
     */
    public function post(array $options = [
        'card_id' => 'pIJMr5MMiIkO_93VtPyIiEk2DZ4w',
        'json' => [
            'appid' => 'wxc0b84a53ed8e8d29',
            'openid' => 'obLatjhnqgy2syxrXVM3MJirbkdI',
            'out_request_no' => 'oTYhjfdsahnssddj_0136',
            'send_time' => '2019-12-31T13:29:35.120+08:00',
        ],
    ]): ResponseInterface;

    /**
     * 发放消费卡(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/busifavor/coupons/%7Bcard_id%7D/send
     */
    public function postAsync(array $options = [
        'card_id' => 'pIJMr5MMiIkO_93VtPyIiEk2DZ4w',
        'json' => [
            'appid' => 'wxc0b84a53ed8e8d29',
            'openid' => 'obLatjhnqgy2syxrXVM3MJirbkdI',
            'out_request_no' => 'oTYhjfdsahnssddj_0136',
            'send_time' => '2019-12-31T13:29:35.120+08:00',
        ],
    ]): PromiseInterface;
}
