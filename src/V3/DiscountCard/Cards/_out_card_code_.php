<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\DiscountCard\Cards;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 * @property-read _out_card_code_\AddUserRecords $addUserRecords
 */
interface _out_card_code_
{
    /**
     * 查询先享卡订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/discount-card/chapter3_3.shtml
     */
    public function get(array $options = [
        'out_card_code' => '',
    ]): ResponseInterface;

    /**
     * 查询先享卡订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/discount-card/chapter3_3.shtml#async
     */
    public function getAsync(array $options = [
        'out_card_code' => '',
    ]): PromiseInterface;
}
