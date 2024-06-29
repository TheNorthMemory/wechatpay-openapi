<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MchOperationManage\MerchantLimitations\SubMchid;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _sub_mchid_
{
    /**
     * 查询子商户管控情况(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/limited-functions-and-reasons/mch-limitations/query-sub-mch-limitation.html
     */
    public function get(array $options = [
        'sub_mchid' => '123000110',
    ]): ResponseInterface;

    /**
     * 查询子商户管控情况(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/limited-functions-and-reasons/mch-limitations/query-sub-mch-limitation.html#async
     */
    public function getAsync(array $options = [
        'sub_mchid' => '123000110',
    ]): PromiseInterface;
}
