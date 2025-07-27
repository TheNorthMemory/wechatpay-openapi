<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MchOperationManage\EnhancedDueDiligence\_due_diligence_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Submit
{
    /**
     * 提交尽调资料(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/mch-operation-manage/enhanced-due-diligence/%7Bdue_diligence_id%7D/submit
     */
    public function post(array $options = [
        'due_diligence_id' => '123000110_2_2190381dakdajois1283i12jo',
        'json' => [
            'sub_mchid' => '123000110',
            'submit_data' => \json_encode([
                'record_fields' => [[
                    'item_id' => '',
                    'field_name' => '',
                    'name' => '',
                    'type' => 0,
                    'tips' => '',
                    'placeholder' => '',
                    'tooltip' => '',
                    'required' => 0,
                    'check_rule' => [
                        'min_length' => 0,
                        'max_length' => 0,
                        'enum_file_exts' => ['png'],
                        'max_file_size' => 0,
                        'enum_keys' => [1],
                        'enum_values' => ['string'],
                    ],
                    'relations' => [[
                        'source_key' => 0,
                        'source_value' => '',
                    ],],
                    'need_encrypt' => true,
                ],],
            ]),
        ],
    ]): ResponseInterface;

    /**
     * 提交尽调资料(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/mch-operation-manage/enhanced-due-diligence/%7Bdue_diligence_id%7D/submit
     */
    public function postAsync(array $options = [
        'due_diligence_id' => '123000110_2_2190381dakdajois1283i12jo',
        'json' => [
            'sub_mchid' => '123000110',
            'submit_data' => \json_encode([
                'record_fields' => [[
                    'item_id' => '',
                    'field_name' => '',
                    'name' => '',
                    'type' => 0,
                    'tips' => '',
                    'placeholder' => '',
                    'tooltip' => '',
                    'required' => 0,
                    'check_rule' => [
                        'min_length' => 0,
                        'max_length' => 0,
                        'enum_file_exts' => ['png'],
                        'max_file_size' => 0,
                        'enum_keys' => [1],
                        'enum_values' => ['string'],
                    ],
                    'relations' => [[
                        'source_key' => 0,
                        'source_value' => '',
                    ],],
                    'need_encrypt' => true,
                ],],
            ]),
        ],
    ]): PromiseInterface;
}
