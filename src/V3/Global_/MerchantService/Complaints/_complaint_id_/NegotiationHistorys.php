<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Global_\MerchantService\Complaints\_complaint_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface NegotiationHistorys
{
    /**
     * 查询投诉协商历史(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/merchant-service/complaints/%7Bcomplaint_id%7D/negotiation-historys
     */
    public function get(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'complaint_id' => '200201820200101080076610000',
        'query' => [
            'limit' => 50,
            'offset' => 10,
            'mch_language' => 'zh_CN',
        ],
    ]): ResponseInterface;

    /**
     * 查询投诉协商历史(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/merchant-service/complaints/%7Bcomplaint_id%7D/negotiation-historys
     */
    public function getAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'complaint_id' => '200201820200101080076610000',
        'query' => [
            'limit' => 50,
            'offset' => 10,
            'mch_language' => 'zh_CN',
        ],
    ]): PromiseInterface;
}
