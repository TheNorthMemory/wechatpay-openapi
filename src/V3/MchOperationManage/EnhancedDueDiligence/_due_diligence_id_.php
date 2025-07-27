<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MchOperationManage\EnhancedDueDiligence;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _due_diligence_id_\Submit $submit
 * @property-read _due_diligence_id_\Upload $upload
 */
interface _due_diligence_id_
{
    /**
     * 查询子商户强化尽调单信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/mch-operation-manage/enhanced-due-diligence/%7Bdue_diligence_id%7D
     */
    public function get(array $options = [
        'due_diligence_id' => '123000110_2_2190381dakdajois1283i12jo',
        'query' => [
            'sub_mchid' => '123000110',
        ],
    ]): ResponseInterface;

    /**
     * 查询子商户强化尽调单信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/mch-operation-manage/enhanced-due-diligence/%7Bdue_diligence_id%7D
     */
    public function getAsync(array $options = [
        'due_diligence_id' => '123000110_2_2190381dakdajois1283i12jo',
        'query' => [
            'sub_mchid' => '123000110',
        ],
    ]): PromiseInterface;
}
