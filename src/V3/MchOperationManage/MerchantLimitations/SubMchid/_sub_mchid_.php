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
     * @link https://wechatpay.im/openapi/v3/mch-operation-manage/merchant-limitations/sub-mchid/%7Bsub_mchid%7D
     */
    public function get(array $options = [
        'sub_mchid' => '123000110',
    ]): ResponseInterface;

    /**
     * 查询子商户管控情况(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/mch-operation-manage/merchant-limitations/sub-mchid/%7Bsub_mchid%7D
     */
    public function getAsync(array $options = [
        'sub_mchid' => '123000110',
    ]): PromiseInterface;
}
