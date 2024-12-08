<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Mmpaymkttransfers\Promotion;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Querywwsptrans2pocket
{
    /**
     * 查询付款记录(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/mmpaymkttransfers/promotion/querywwsptrans2pocket
     */
    public function post(array $options = [
        'xml' => [
            'partner_trade_no' => '10000098201411111234567890',
            'mch_id' => '10000098',
            'appid' => 'wxe062425f740d30d8',
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 查询付款记录(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/mmpaymkttransfers/promotion/querywwsptrans2pocket
     */
    public function postAsync(array $options = [
        'xml' => [
            'partner_trade_no' => '10000098201411111234567890',
            'mch_id' => '10000098',
            'appid' => 'wxe062425f740d30d8',
        ],
        'security' => true,
    ]): PromiseInterface;
}
