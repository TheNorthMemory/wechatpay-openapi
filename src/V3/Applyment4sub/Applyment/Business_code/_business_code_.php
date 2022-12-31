<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Applyment4sub\Applyment\Business_code;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _business_code_
{
    /**
     * 通过业务申请编号查询申请状态(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/tool/applyment4sub/chapter3_2.shtml
     */
    public function get(array $options = [
        'business_code' => '',
    ]): ResponseInterface;

    /**
     * 通过业务申请编号查询申请状态(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/tool/applyment4sub/chapter3_2.shtml#async
     */
    public function getAsync(array $options = [
        'business_code' => '',
    ]): PromiseInterface;
}
