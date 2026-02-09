<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Global_\MerchantService;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Complaints\_complaint_id_ $_complaint_id_
 */
interface Complaints
{
    /**
     * 查询投诉单列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/merchant-service/complaints
     */
    public function get(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'query' => [
            'limit' => 5,
            'offset' => 10,
            'begin_date' => '2019-01-01',
            'end_date' => '2019-01-01',
            'complainted_mchid' => '1900012181',
            'mch_language' => 'zh_CN',
        ],
    ]): ResponseInterface;

    /**
     * 查询投诉单列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/merchant-service/complaints
     */
    public function getAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'query' => [
            'limit' => 5,
            'offset' => 10,
            'begin_date' => '2019-01-01',
            'end_date' => '2019-01-01',
            'complainted_mchid' => '1900012181',
            'mch_language' => 'zh_CN',
        ],
    ]): PromiseInterface;
}
