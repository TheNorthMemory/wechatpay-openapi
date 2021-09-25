<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Bank\Packages\_package_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
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
     * $media->setMeta(\json_encode(['filename' => $json->filename, 'sha256' => $json->sha256, 'bank_type' => 'your_bank_id']));
     * $options = ['body' => $media->getStream(), 'headers' => ['Content-type' => $media->getContentType()]];
     * ```
     *
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_8_1.shtml
     */
    public function post(array $options = [
        'package_id' => '',
    ]): ResponseInterface;

    /**
     * 导入定向用户协议号(异步模式)
     *
     * ```php
     * // available since wechatpay/wechatpay:>=1.3.2
     * $media = new \WeChatPay\Util\MediaUtil('file:///path/to/active_user.csv');
     * $json  = \json_decode($media->getMeta());
     * $media->setMeta(\json_encode(['filename' => $json->filename, 'sha256' => $json->sha256, 'bank_type' => 'your_bank_id']));
     * $options = ['body' => $media->getStream(), 'headers' => ['Content-type' => $media->getContentType()]];
     * ```
     *
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_8_1.shtml#async
     */
    public function postAsync(array $options = [
        'package_id' => '',
    ]): PromiseInterface;

    /**
     * 查询上传任务列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter9_8_2.shtml
     */
    public function get(array $options = [
        'package_id' => '',
        'query' => [
            'status' => '',
            'filename' => '',
            'offset' => 0,
            'limit' => 0,
        ],
    ]): ResponseInterface;

    /**
     * 查询上传任务列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter9_8_2.shtml#async
     */
    public function getAsync(array $options = [
        'package_id' => '',
        'query' => [
            'status' => '',
            'filename' => '',
            'offset' => 0,
            'limit' => 0,
        ],
    ]): PromiseInterface;
}
