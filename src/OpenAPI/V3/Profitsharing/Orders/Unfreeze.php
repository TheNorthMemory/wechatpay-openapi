<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Profitsharing\Orders;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Unfreeze
{
    /**
     * 解冻剩余资金(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter8_1_5.shtml
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '',
            'transaction_id' => '',
            'out_order_no' => '',
            'description' => '',
        ],
    ]): ResponseInterface;

    /**
     * 解冻剩余资金(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter8_1_5.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '',
            'transaction_id' => '',
            'out_order_no' => '',
            'description' => '',
        ],
    ]): PromiseInterface;
}
