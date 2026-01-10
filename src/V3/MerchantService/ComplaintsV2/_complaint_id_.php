<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MerchantService\ComplaintsV2;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _complaint_id_\Complete $complete
 * @property-read _complaint_id_\NegotiationHistorys $negotiationHistorys
 * @property-read _complaint_id_\ResponseImmediateService $responseImmediateService
 * @property-read _complaint_id_\Response $response
 * @property-read _complaint_id_\UpdateRefundProgress $updateRefundProgress
 */
interface _complaint_id_
{
    /**
     * 查询投诉单详情(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/merchant-service/complaints-v2/%7Bcomplaint_id%7D
     */
    public function get(array $options = [
        'complaint_id' => '200201820200101080076610000',
    ]): ResponseInterface;

    /**
     * 查询投诉单详情(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/merchant-service/complaints-v2/%7Bcomplaint_id%7D
     */
    public function getAsync(array $options = [
        'complaint_id' => '200201820200101080076610000',
    ]): PromiseInterface;
}
