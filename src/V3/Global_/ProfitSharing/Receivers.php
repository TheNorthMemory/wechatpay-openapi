<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Global_\ProfitSharing;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Receivers\_account_ $_account_
 */
interface Receivers
{
    /**
     * 添加分账接收方(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api_external/ch/apis/chapter4_1_6.shtml
     */
    public function post(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'json' => [
            'sub_mchid' => '1900000109',
            'appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888889',
            'type' => 'MERCHANT_ID',
            'account' => '86693852',
            'name' => 'hu89ohu89ohu89o',
            'authorized' => true,
            'relation_type' => 'SERVICE_PROVIDER',
            'custom_relation' => '代理商',
            'scene' => '该分账接收方是境内税费服务提供方，帮助商户向境内海关代扣代缴税费。',
            'major_service' => '税务准备服务',
            'expected_ratio' => 2000,
            'application_file_id' => 'de851a06-5a38-9d31-a102-275a17c477de',
            'partnership_file_id' => 'de851a06-5a38-9d31-a102-275a17c477de',
        ],
    ]): ResponseInterface;

    /**
     * 添加分账接收方(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api_external/ch/apis/chapter4_1_6.shtml#async
     */
    public function postAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'json' => [
            'sub_mchid' => '1900000109',
            'appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888889',
            'type' => 'MERCHANT_ID',
            'account' => '86693852',
            'name' => 'hu89ohu89ohu89o',
            'authorized' => true,
            'relation_type' => 'SERVICE_PROVIDER',
            'custom_relation' => '代理商',
            'scene' => '该分账接收方是境内税费服务提供方，帮助商户向境内海关代扣代缴税费。',
            'major_service' => '税务准备服务',
            'expected_ratio' => 2000,
            'application_file_id' => 'de851a06-5a38-9d31-a102-275a17c477de',
            'partnership_file_id' => 'de851a06-5a38-9d31-a102-275a17c477de',
        ],
    ]): PromiseInterface;

    /**
     * 删除分账接收方(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api_external/ch/apis/chapter4_1_8.shtml
     */
    public function delete(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'json' => [
            'sub_mchid' => '1900000109',
            'appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888889',
            'type' => 'MERCHANT_ID',
            'account' => '86693852',
        ],
    ]): ResponseInterface;

    /**
     * 删除分账接收方(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api_external/ch/apis/chapter4_1_8.shtml#async
     */
    public function deleteAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'json' => [
            'sub_mchid' => '1900000109',
            'appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888889',
            'type' => 'MERCHANT_ID',
            'account' => '86693852',
        ],
    ]): PromiseInterface;
}
