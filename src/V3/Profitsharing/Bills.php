<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Profitsharing;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Bills
{
    /**
     * 申请分账账单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter8_1_11.shtml
     */
    public function get(array $options = [
        'query' => [
            'sub_mchid' => '',
            'bill_date' => '',
            'tar_type' => '',
        ],
    ]): ResponseInterface;

    /**
     * 申请分账账单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter8_1_11.shtml#async
     */
    public function getAsync(array $options = [
        'query' => [
            'sub_mchid' => '',
            'bill_date' => '',
            'tar_type' => '',
        ],
    ]): PromiseInterface;
}
