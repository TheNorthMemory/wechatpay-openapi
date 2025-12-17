<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Brand\Card;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read CardConfigs\CancelApplyment $cancelApplyment
 * @property-read CardConfigs\PreviewUrl $previewUrl
 * @property-read CardConfigs\Publish $publish
 */
interface CardConfigs
{
    /**
     * 提交商家名片配置申请(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/card/card-configs
     */
    public function post(array $options = [
        'json' => [
            'business_code' => '190001351110000',
            'brand_id' => '1004',
            'brand_mini_program_info' => [
                'appid' => 'wx1234567890abcdef',
                'default_jump_path' => 'pages/shop/index',
            ],
            'brand_customer_service' => [
                'customer_service_type' => 'MINI_PROGRAM',
                'customer_service_phone' => '12345678900',
                'customer_service_path' => 'pages/service/index',
                'appid' => 'wx1234567890abcdef',
            ],
            'service_list' => [[
                'service_classify_name' => '会员服务',
                'service_name' => '会员中心',
                'service_jump_type' => 'JUMP_MINI_PROGRAM',
                'service_jump_path' => 'pages/shop/index',
                'appid' => 'wx1234567890abcdef',
            ],],
        ],
    ]): ResponseInterface;

    /**
     * 提交商家名片配置申请(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/card/card-configs
     */
    public function postAsync(array $options = [
        'json' => [
            'business_code' => '190001351110000',
            'brand_id' => '1004',
            'brand_mini_program_info' => [
                'appid' => 'wx1234567890abcdef',
                'default_jump_path' => 'pages/shop/index',
            ],
            'brand_customer_service' => [
                'customer_service_type' => 'MINI_PROGRAM',
                'customer_service_phone' => '12345678900',
                'customer_service_path' => 'pages/service/index',
                'appid' => 'wx1234567890abcdef',
            ],
            'service_list' => [[
                'service_classify_name' => '会员服务',
                'service_name' => '会员中心',
                'service_jump_type' => 'JUMP_MINI_PROGRAM',
                'service_jump_path' => 'pages/shop/index',
                'appid' => 'wx1234567890abcdef',
            ],],
        ],
    ]): PromiseInterface;

    /**
     * 查询商家名片配置申请状态(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/card/card-configs#get
     */
    public function get(array $options = [
        'query' => [
            'business_code' => '190001351110000',
            'applyment_id' => '1111111111',
            'brand_id' => '120344',
        ],
    ]): ResponseInterface;

    /**
     * 查询商家名片配置申请状态(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/card/card-configs#get
     */
    public function getAsync(array $options = [
        'query' => [
            'business_code' => '190001351110000',
            'applyment_id' => '1111111111',
            'brand_id' => '120344',
        ],
    ]): PromiseInterface;
}
