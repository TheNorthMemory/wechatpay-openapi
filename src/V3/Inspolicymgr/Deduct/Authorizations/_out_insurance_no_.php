<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Inspolicymgr\Deduct\Authorizations;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_insurance_no_
{
    /**
     * 查询保单授权信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/inspolicymgr/deduct/authorizations/%7Bout_insurance_no%7D
     */
    public function get(array $options = [
        'out_insurance_no' => 'Auisihsiahishishi4hihsid123418id',
    ]): ResponseInterface;

    /**
     * 查询保单授权信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/inspolicymgr/deduct/authorizations/%7Bout_insurance_no%7D
     */
    public function getAsync(array $options = [
        'out_insurance_no' => 'Auisihsiahishishi4hihsid123418id',
    ]): PromiseInterface;
}
