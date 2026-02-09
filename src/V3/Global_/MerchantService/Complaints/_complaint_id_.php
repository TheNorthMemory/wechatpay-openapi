<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Global_\MerchantService\Complaints;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _complaint_id_\Complete $complete
 * @property-read _complaint_id_\NegotiationHistorys $negotiationHistorys
 * @property-read _complaint_id_\Response $response
 */
interface _complaint_id_
{
    /**
     * 查询投诉单详情(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/merchant-service/complaints/%7Bcomplaint_id%7D
     */
    public function get(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'complaint_id' => '200201820200101080076610000',
        'query' => [
            'mch_language' => 'zh_CN',
        ],
    ]): ResponseInterface;

    /**
     * 查询投诉单详情(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/merchant-service/complaints/%7Bcomplaint_id%7D
     */
    public function getAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'complaint_id' => '200201820200101080076610000',
        'query' => [
            'mch_language' => 'zh_CN',
        ],
    ]): PromiseInterface;
}
