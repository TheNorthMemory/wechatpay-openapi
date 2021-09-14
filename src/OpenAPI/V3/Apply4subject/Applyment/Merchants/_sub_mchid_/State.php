<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Apply4subject\Applyment\Merchants\_sub_mchid_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface State
{
    /**
     * 获取商户开户意愿确认状态(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/applysubject/chapter5_4.shtml
     */
    public function get(array $options = [
        'sub_mchid' => '',
    ]): ResponseInterface;

    /**
     * 获取商户开户意愿确认状态(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/applysubject/chapter5_4.shtml#async
     */
    public function getAsync(array $options = [
        'sub_mchid' => '',
    ]): PromiseInterface;
}
