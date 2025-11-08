<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Account\ApplyCancelWithdraw\ValidateCancel;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _sub_mchid_
{
    /**
     * 商户注销资格校验(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/account/apply-cancel-withdraw/validate-cancel/%7Bsub_mchid%7D
     */
    public function get(array $options = [
        'sub_mchid' => '1900000109',
    ]): ResponseInterface;

    /**
     * 商户注销资格校验(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/account/apply-cancel-withdraw/validate-cancel/%7Bsub_mchid%7D
     */
    public function getAsync(array $options = [
        'sub_mchid' => '1900000109',
    ]): PromiseInterface;
}
