<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Apply4subject\Applyment\_business_code_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Cancel
{
    /**
     * 撤销商户开户意愿申请单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/applysubject/chapter5_2.shtml
     */
    public function post(array $options = [
        'business_code' => '',
    ]): ResponseInterface;

    /**
     * 撤销商户开户意愿申请单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/applysubject/chapter5_2.shtml#async
     */
    public function postAsync(array $options = [
        'business_code' => '',
    ]): PromiseInterface;
}
