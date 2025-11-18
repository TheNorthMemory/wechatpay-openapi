<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Brand\Card;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read CardLinks\BusinessCode $businessCode
 * @property-read CardLinks\CancelApplyment $cancelApplyment
 * @property-read CardLinks\UnbindCardLink $unbindCardLink
 */
interface CardLinks
{
    /**
     * 添加交易连接名片规则申请(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/card/card-links
     */
    public function post(array $options = [
        'json' => [
            'business_code' => '190001351110000',
            'brand_id' => '1004',
            'payment_scene' => 'MINI_PROGRAM',
            'appid' => 'wxea9c30890f48d5ae',
            'card_link_mchid' => '111222333',
            'service_id' => '00005000000000548218251086296300',
        ],
    ]): ResponseInterface;

    /**
     * 添加交易连接名片规则申请(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/card/card-links
     */
    public function postAsync(array $options = [
        'json' => [
            'business_code' => '190001351110000',
            'brand_id' => '1004',
            'payment_scene' => 'MINI_PROGRAM',
            'appid' => 'wxea9c30890f48d5ae',
            'card_link_mchid' => '111222333',
            'service_id' => '00005000000000548218251086296300',
        ],
    ]): PromiseInterface;

    /**
     * 查询已生效交易连接名片规则(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/card/card-links#get
     */
    public function get(array $options = [
        'query' => [
            'brand_id' => '120344',
            'payment_scene' => 'MINI_PROGRAM',
            'page_index' => 1,
            'page_size' => 50,
        ],
    ]): ResponseInterface;

    /**
     * 查询已生效交易连接名片规则(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/card/card-links#get
     */
    public function getAsync(array $options = [
        'query' => [
            'brand_id' => '120344',
            'payment_scene' => 'MINI_PROGRAM',
            'page_index' => 1,
            'page_size' => 50,
        ],
    ]): PromiseInterface;
}
