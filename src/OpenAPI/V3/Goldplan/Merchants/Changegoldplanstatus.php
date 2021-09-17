<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Goldplan\Merchants;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Changegoldplanstatus
{
    /**
     * 点金计划管理(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/goldplan/chapter3_1.shtml
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1234567890',
            'operation_type' => '',
        ],
    ]): ResponseInterface;

    /**
     * 点金计划管理(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/goldplan/chapter3_1.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1234567890',
            'operation_type' => '',
        ],
    ]): PromiseInterface;
}
