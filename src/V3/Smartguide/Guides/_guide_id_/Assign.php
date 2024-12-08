<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Smartguide\Guides\_guide_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Assign
{
    /**
     * 服务人员分配(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/smartguide/guides/%7Bguide_id%7D/assign
     */
    public function post(array $options = [
        'guide_id' => '',
        'json' => [
            'sub_mchid' => '1234567890',
            'out_trade_no' => '20150806125346',
        ],
    ]): ResponseInterface;

    /**
     * 服务人员分配(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/smartguide/guides/%7Bguide_id%7D/assign
     */
    public function postAsync(array $options = [
        'guide_id' => '',
        'json' => [
            'sub_mchid' => '1234567890',
            'out_trade_no' => '20150806125346',
        ],
    ]): PromiseInterface;
}
