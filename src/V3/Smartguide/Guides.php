<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Smartguide;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Guides\_guide_id_ $_guide_id_
 */
interface Guides
{
    /**
     * 服务人员注册(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/smartguide/guides
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '',
            'corpid' => '',
            'store_id' => 0,
            'userid' => '',
            'name' => '',
            'mobile' => '',
            'qr_code' => '',
            'avatar' => '',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 服务人员注册(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/smartguide/guides
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '',
            'corpid' => '',
            'store_id' => 0,
            'userid' => '',
            'name' => '',
            'mobile' => '',
            'qr_code' => '',
            'avatar' => '',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;

    /**
     * 服务人员查询(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/smartguide/guides#get
     */
    public function get(array $options = [
        'query' => [
            'sub_mchid' => '',
            'store_id' => 0,
            'userid' => '',
            'mobile' => '',
            'work_id' => '',
            'limit' => 0,
            'offset' => 0,
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 服务人员查询(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/smartguide/guides#get
     */
    public function getAsync(array $options = [
        'query' => [
            'sub_mchid' => '',
            'store_id' => 0,
            'userid' => '',
            'mobile' => '',
            'work_id' => '',
            'limit' => 0,
            'offset' => 0,
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
