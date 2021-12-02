<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\NewTaxControlFapiao\Merchant\_sub_mchid_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Check
{
    /**
     * 检查子商户开票功能状态(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/new-tax-control-fapiao/chapter3_1.shtml
     */
    public function post(array $options = [
        'sub_mchid' => '1900000109',
    ]): ResponseInterface;

    /**
     * 检查子商户开票功能状态(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/new-tax-control-fapiao/chapter3_1.shtml#async
     */
    public function postAsync(array $options = [
        'sub_mchid' => '1900000109',
    ]): PromiseInterface;
}
