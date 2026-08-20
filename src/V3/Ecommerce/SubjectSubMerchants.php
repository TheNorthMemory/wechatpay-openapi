<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface SubjectSubMerchants
{
    /**
     * 查询指定主体子商户列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/subject-sub-merchants
     */
    public function get(array $options = [
        'query' => [
            'organization_type' => 'SUBJECT_TYPE_ENTERPRISE',
            'cert_number' => 'Iuas%2BxWj7ma0t%',
            'limit' => 20,
            'offset' => 0,
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 查询指定主体子商户列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/subject-sub-merchants
     */
    public function getAsync(array $options = [
        'query' => [
            'organization_type' => 'SUBJECT_TYPE_ENTERPRISE',
            'cert_number' => 'Iuas%2BxWj7ma0t%',
            'limit' => 20,
            'offset' => 0,
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
