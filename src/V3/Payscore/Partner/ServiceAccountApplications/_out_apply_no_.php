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
     * @link https://wechatpay.im/openapi/v3/payscore/partner/service-account-applications/%7Bout_apply_no%7D
     */
    public function get(array $options = [
        'out_apply_no' => '1234323JKHDFE1243252',
    ]): ResponseInterface;

    /**
     * 查询收付通子商户服务绑定结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/partner/service-account-applications/%7Bout_apply_no%7D
     */
    public function getAsync(array $options = [
        'out_apply_no' => '1234323JKHDFE1243252',
    ]): PromiseInterface;
}
