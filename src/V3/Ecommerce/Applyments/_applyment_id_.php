<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Applyments;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface _applyment_id_
{
    /**
     * 通过申请单ID查询申请状态(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/ecommerce/applyments/chapter3_2.shtml
     */
    public function get(array $options = [
        'applyment_id' => '2000002124775691',
    ]): ResponseInterface;

    /**
     * 通过申请单ID查询申请状态(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/ecommerce/applyments/chapter3_2.shtml#async
     */
    public function getAsync(array $options = [
        'applyment_id' => '2000002124775691',
    ]): PromiseInterface;
}
