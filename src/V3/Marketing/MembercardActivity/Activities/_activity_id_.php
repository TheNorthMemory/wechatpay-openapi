<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\MembercardActivity\Activities;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 * @property-read _activity_id_\Terminate $terminate
 */
interface _activity_id_
{
    /**
     * 查询活动详情(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter8_4.shtml
     */
    public function get(array $options = [
        'activity_id' => '',
    ]): ResponseInterface;

    /**
     * 查询活动详情(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter8_4.shtml#async
     */
    public function getAsync(array $options = [
        'activity_id' => '',
    ]): PromiseInterface;
}