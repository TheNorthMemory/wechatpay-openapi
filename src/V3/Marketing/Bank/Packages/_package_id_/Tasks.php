<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Bank\Packages\_package_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Tasks
{
    /**
     * 导入定向用户协议号(同步模式)
     *
     * ```php
     * // available since wechatpay/wechatpay:>=1.3.2
     * $media = new \WeChatPay\Util\MediaUtil('file:///path/to/active_user.csv');
     * $json  = \json_decode($media->getMeta());
     * $json->bank_type = 'your_bank_id';
     * $media->setMeta(\json_encode($json));
     * $options = [
     *     'package_id' => '',
     *     'body'       => $media->getStream(),
     *     'headers'    => ['Content-type' => $media->getContentType()]
     * ];
     * ```
     *
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/bank/packages/%7Bpackage_id%7D/tasks
     */
    public function post(array $options = []): ResponseInterface;

    /**
     * 导入定向用户协议号(异步模式)
     *
     * ```php
     * // available since wechatpay/wechatpay:>=1.3.2
     * $media = new \WeChatPay\Util\MediaUtil('file:///path/to/active_user.csv');
     * $json  = \json_decode($media->getMeta());
     * $json->bank_type = 'your_bank_id';
     * $media->setMeta(\json_encode($json));
     * $options = [
     *     'package_id' => '',
     *     'body'       => $media->getStream(),
     *     'headers'    => ['Content-type' => $media->getContentType()]
     * ];
     * ```
     *
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/bank/packages/%7Bpackage_id%7D/tasks
     */
    public function postAsync(array $options = []): PromiseInterface;

    /**
     * 查询上传任务列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/bank/packages/%7Bpackage_id%7D/tasks#get
     */
    public function get(array $options = [
        'package_id' => '8473295',
        'query' => [
            'status' => 'PROCESSING',
            'filename' => 'active_user.csv',
            'offset' => 0,
            'limit' => 20,
        ],
    ]): ResponseInterface;

    /**
     * 查询上传任务列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/bank/packages/%7Bpackage_id%7D/tasks#get
     */
    public function getAsync(array $options = [
        'package_id' => '8473295',
        'query' => [
            'status' => 'PROCESSING',
            'filename' => 'active_user.csv',
            'offset' => 0,
            'limit' => 20,
        ],
    ]): PromiseInterface;
}
