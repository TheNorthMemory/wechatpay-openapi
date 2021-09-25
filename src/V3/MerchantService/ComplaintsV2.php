<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MerchantService;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 * @property-read ComplaintsV2\_complaint_id_ $_complaint_id_
 */
interface ComplaintsV2
{
    /**
     * 查询投诉单列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter10_2_11.shtml
     */
    public function get(array $options = [
        'query' => [
            'limit' => 5,
            'offset' => 10,
            'begin_date' => '2019-01-01',
            'end_date' => '2019-01-01',
            'complainted_mchid' => '1900012181',
        ],
    ]): ResponseInterface;

    /**
     * 查询投诉单列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter10_2_11.shtml#async
     */
    public function getAsync(array $options = [
        'query' => [
            'limit' => 5,
            'offset' => 10,
            'begin_date' => '2019-01-01',
            'end_date' => '2019-01-01',
            'complainted_mchid' => '1900012181',
        ],
    ]): PromiseInterface;
}
