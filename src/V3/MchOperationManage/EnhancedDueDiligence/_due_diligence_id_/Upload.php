<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MchOperationManage\EnhancedDueDiligence\_due_diligence_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Upload
{
    /**
     * 上传尽调资料文件(同步模式)
     *
     * ```php
     * // available since wechatpay/wechatpay:>=1.3.2
     * $media = new \WeChatPay\Util\MediaUtil('file:///path/to/image.jpg');
     * $json  = [
     *     'file_name'   => 'image.jpg',
     *     'file_digest' => 'your_image_file_sha256_string',
     *     'sub_mchid'   => '1230001104',
     *     'item_id'     => 130013,
     * ];
     * $media->setMeta(\json_encode($json));
     * $options = [
     *     'due_diligence_id' => '123000110_2_2190381dakdajois1283i12jo',
     *     'body'             => $media->getStream(),
     *     'headers'          => ['Content-type' => $media->getContentType()]
     * ];
     * ```
     *
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/mch-operation-manage/enhanced-due-diligence/%7Bdue_diligence_id%7D/upload
     */
    public function post(array $options = []): ResponseInterface;

    /**
     * 上传尽调资料文件(异步模式)
     *
     * ```php
     * // available since wechatpay/wechatpay:>=1.3.2
     * $media = new \WeChatPay\Util\MediaUtil('file:///path/to/image.jpg');
     * $json  = [
     *     'file_name'   => 'image.jpg',
     *     'file_digest' => 'your_image_file_sha256_string',
     *     'sub_mchid'   => '1230001104',
     *     'item_id'     => 130013,
     * ];
     * $media->setMeta(\json_encode($json));
     * $options = [
     *     'due_diligence_id' => '123000110_2_2190381dakdajois1283i12jo',
     *     'body'             => $media->getStream(),
     *     'headers'          => ['Content-type' => $media->getContentType()]
     * ];
     * ```
     *
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/mch-operation-manage/enhanced-due-diligence/%7Bdue_diligence_id%7D/upload
     */
    public function postAsync(array $options = []): PromiseInterface;
}
