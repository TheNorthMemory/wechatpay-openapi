<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\DiscountCard\Cards;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _out_card_code_\AddUserRecords $addUserRecords
 */
interface _out_card_code_
{
    /**
     * 查询先享卡订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/discount-card/cards/%7Bout_card_code%7D
     */
    public function get(array $options = [
        'out_card_code' => '6e8369071cd942c0476613f9d1ce9ca3',
    ]): ResponseInterface;

    /**
     * 查询先享卡订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/discount-card/cards/%7Bout_card_code%7D
     */
    public function getAsync(array $options = [
        'out_card_code' => '6e8369071cd942c0476613f9d1ce9ca3',
    ]): PromiseInterface;
}
