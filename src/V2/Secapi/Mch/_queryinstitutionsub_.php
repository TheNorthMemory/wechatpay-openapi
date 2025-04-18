<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Secapi\Mch;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _queryinstitutionsub_
{
    /**
     * 查询子商户(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/secapi/mch/queryInstitutionsub
     */
    public function post(array $options = [
        'queryinstitutionsub' => 'queryInstitutionsub', // 固定参数(URI上有大写字符)
        'xml' => [
            'app_id' => 'wx8888888888888888',
            'mch_id' => '3200000001',
            'sub_mch_id' => '20000100',
        ],
        'nonceless' => true,
        'security' => true,
    ]): ResponseInterface;

    /**
     * 查询子商户(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/secapi/mch/queryInstitutionsub
     */
    public function postAsync(array $options = [
        'queryinstitutionsub' => 'queryInstitutionsub', // 固定参数(URI上有大写字符)
        'xml' => [
            'app_id' => 'wx8888888888888888',
            'mch_id' => '3200000001',
            'sub_mch_id' => '20000100',
        ],
        'nonceless' => true,
        'security' => true,
    ]): PromiseInterface;
}
