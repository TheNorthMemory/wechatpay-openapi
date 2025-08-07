<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MchManage\SubmissionFiles\SubMchid\_sub_mchid_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Upload
{
    /**
     * 上传商户提交资料文件(同步模式)
     *
     * ```php
     * // available since wechatpay/wechatpay:>=1.3.2
     * $media = new \WeChatPay\Util\MediaUtil('file:///path/to/filea.jpg');
     * $json  = [
     *     'file_name'   => 'filea.jpg',
     *     'file_digest' => 'B94D27B9934D3E08A52E52D7DA7DABFAC484EFE37A5380EE9088F7ACE2EFCDE9',
     *     'item_id'     => 56,
     * ];
     * $media->setMeta(\json_encode($json));
     * $options = [
     *     'sub_mchid' => '123000110',
     *     'body'      => $media->getStream(),
     *     'headers'   => ['Content-type' => $media->getContentType()]
     * ];
     * ```
     *
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/mch-manage/submission-files/sub-mchid/%7Bsub_mchid%7D/upload
     */
    public function post(array $options = []): ResponseInterface;

    /**
     * 上传商户提交资料文件(异步模式)
     *
     * ```php
     * // available since wechatpay/wechatpay:>=1.3.2
     * $media = new \WeChatPay\Util\MediaUtil('file:///path/to/filea.jpg');
     * $json  = [
     *     'file_name'   => 'filea.jpg',
     *     'file_digest' => 'B94D27B9934D3E08A52E52D7DA7DABFAC484EFE37A5380EE9088F7ACE2EFCDE9',
     *     'item_id'     => 56,
     * ];
     * $media->setMeta(\json_encode($json));
     * $options = [
     *     'sub_mchid' => '123000110',
     *     'body'      => $media->getStream(),
     *     'headers'   => ['Content-type' => $media->getContentType()]
     * ];
     * ```
     *
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/mch-manage/submission-files/sub-mchid/%7Bsub_mchid%7D/upload
     */
    public function postAsync(array $options = []): PromiseInterface;
}
