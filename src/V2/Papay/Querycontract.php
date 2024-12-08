<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Papay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Querycontract
{
    /**
     * 查询签约关系(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/papay/querycontract
     */
    public function post(array $options = [
        'xml' => [
            'appid' => 'wxcbda96de0b165486',
            'mch_id' => '10000098',
            'contract_id' => '100005698',
            'plan_id' => '123',
            'contract_code' => '1023658866',
            'version' => '1.0',
        ],
        'nonceless' => true,
    ]): ResponseInterface;

    /**
     * 查询签约关系(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/papay/querycontract
     */
    public function postAsync(array $options = [
        'xml' => [
            'appid' => 'wxcbda96de0b165486',
            'mch_id' => '10000098',
            'contract_id' => '100005698',
            'plan_id' => '123',
            'contract_code' => '1023658866',
            'version' => '1.0',
        ],
        'nonceless' => true,
    ]): PromiseInterface;
}
