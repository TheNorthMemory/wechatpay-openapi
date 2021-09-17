<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Smartguide\Guides\_guide_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Assign
{
    /**
     * 服务人员分配(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/smartguide/chapter3_2.shtml
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
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/smartguide/chapter3_2.shtml#async
     */
    public function postAsync(array $options = [
        'guide_id' => '',
        'json' => [
            'sub_mchid' => '1234567890',
            'out_trade_no' => '20150806125346',
        ],
    ]): PromiseInterface;
}
