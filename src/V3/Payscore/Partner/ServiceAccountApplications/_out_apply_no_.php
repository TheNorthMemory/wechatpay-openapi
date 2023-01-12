<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Partner\ServiceAccountApplications;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_apply_no_
{
    /**
     * 查询收付通子商户服务绑定结果(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter6_2_14.shtml
     */
    public function get(array $options = [
        'out_order_no' => '1234323JKHDFE1243252',
    ]): ResponseInterface;

    /**
     * 查询收付通子商户服务绑定结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter6_2_14.shtml#async
     */
    public function getAsync(array $options = [
        'out_order_no' => '1234323JKHDFE1243252',
    ]): PromiseInterface;
}
