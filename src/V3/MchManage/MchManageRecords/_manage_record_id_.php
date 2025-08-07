<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MchManage\MchManageRecords;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _manage_record_id_\MchManageSubmissions $mchManageSubmissions
 */
interface _manage_record_id_
{
    /**
     * 查询子商户下指定商户管理记录(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/mch-manage/mch-manage-records/%7Bmanage_record_id%7D
     */
    public function get(array $options = [
        'manage_record_id' => 'M1210999900435123451697535102441',
        'query' => [
            'sub_mchid' => '123000110',
        ],
    ]): ResponseInterface;

    /**
     * 查询子商户下指定商户管理记录(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/mch-manage/mch-manage-records/%7Bmanage_record_id%7D
     */
    public function getAsync(array $options = [
        'manage_record_id' => 'M1210999900435123451697535102441',
        'query' => [
            'sub_mchid' => '123000110',
        ],
    ]): PromiseInterface;
}
