<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Papay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface H5entrustweb
{
    /**
     * H5纯签约(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/papay/h5entrustweb
     */
    public function get(array $options = []): ResponseInterface;

    /**
     * H5纯签约(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/papay/h5entrustweb
     */
    public function getAsync(array $options = []): PromiseInterface;
}
