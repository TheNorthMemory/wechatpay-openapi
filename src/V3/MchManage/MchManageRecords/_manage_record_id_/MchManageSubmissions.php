<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MchManage\MchManageRecords\_manage_record_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface MchManageSubmissions
{
    /**
     * 对指定商户管理记录提交资料(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/mch-manage/mch-manage-records/%7Bmanage_record_id%7D/mch-manage-submissions
     */
    public function post(array $options = [
        'manage_record_id' => 'M1210999900435123451697535102441',
        'json' => [
            'sub_mchid' => '123000110',
            'submit_data' => \json_encode([
                'record_fields' => [[
                    'item_id' => '',
                    'field_name' => '',
                    'name' => '',
                    'type' => 0,
                    'repeated_field_data' => \json_encode([[
                        'longitude' => '',
                        'latitude' => '',
                        'province' => '',
                        'city' => '',
                        'area' => '',
                        'street' => '',
                        'address' => '',
                        'name' => '',
                        'wechat_order_id' => '',
                        'merchant_order_id' => '',
                        'trade_time' => '',
                        'trade_money_amount' => '',
                        'trade_goods' => '',
                        'logistic_flag' => 0,
                        'evidence_img_list' => ['凭证图片1'],
                    ],]),
                    'tips' => '',
                    'placeholder' => '',
                    'tooltip' => '',
                    'required' => 0,
                    'need_encrypt' => true,
                    'string_check_rule' => [
                        'min_string_length' => 0,
                        'max_string_length' => 0,
                        'validator' => 'number | phone | idcard | url',
                    ],
                    'enum_check_rule' => [
                        'min_list_length' => 0,
                        'max_list_length' => 0,
                        'enum_values' => ['string'],
                    ],
                    'file_check_rule' => [
                        'min_list_length' => 0,
                        'max_list_length' => 0,
                        'enum_file_exts' => ['png'],
                        'max_file_size' => 0,
                    ],
                    'time_interval_check_rule' => [
                        'min_list_length' => 2,
                        'max_list_length' => 2,
                    ],
                    'order_interval_check_rule' => [
                        'min_list_length' => 0,
                        'max_list_length' => 0,
                        'enum_file_exts' => ['png'],
                        'max_file_size' => 0,
                    ],
                    'relations' => [[
                        'source_key' => 0,
                        'source_value' => '',
                    ],],
                ],],
            ]),
        ],
    ]): ResponseInterface;

    /**
     * 对指定商户管理记录提交资料(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/mch-manage/mch-manage-records/%7Bmanage_record_id%7D/mch-manage-submissions
     */
    public function postAsync(array $options = [
        'manage_record_id' => 'M1210999900435123451697535102441',
        'json' => [
            'sub_mchid' => '123000110',
            'submit_data' => \json_encode([
                'record_fields' => [[
                    'item_id' => '',
                    'field_name' => '',
                    'name' => '',
                    'type' => 0,
                    'repeated_field_data' => \json_encode([[
                        'longitude' => '',
                        'latitude' => '',
                        'province' => '',
                        'city' => '',
                        'area' => '',
                        'street' => '',
                        'address' => '',
                        'name' => '',
                        'wechat_order_id' => '',
                        'merchant_order_id' => '',
                        'trade_time' => '',
                        'trade_money_amount' => '',
                        'trade_goods' => '',
                        'logistic_flag' => 0,
                        'evidence_img_list' => ['凭证图片1'],
                    ],]),
                    'tips' => '',
                    'placeholder' => '',
                    'tooltip' => '',
                    'required' => 0,
                    'need_encrypt' => true,
                    'string_check_rule' => [
                        'min_string_length' => 0,
                        'max_string_length' => 0,
                        'validator' => 'number | phone | idcard | url',
                    ],
                    'enum_check_rule' => [
                        'min_list_length' => 0,
                        'max_list_length' => 0,
                        'enum_values' => ['string'],
                    ],
                    'file_check_rule' => [
                        'min_list_length' => 0,
                        'max_list_length' => 0,
                        'enum_file_exts' => ['png'],
                        'max_file_size' => 0,
                    ],
                    'time_interval_check_rule' => [
                        'min_list_length' => 2,
                        'max_list_length' => 2,
                    ],
                    'order_interval_check_rule' => [
                        'min_list_length' => 0,
                        'max_list_length' => 0,
                        'enum_file_exts' => ['png'],
                        'max_file_size' => 0,
                    ],
                    'relations' => [[
                        'source_key' => 0,
                        'source_value' => '',
                    ],],
                ],],
            ]),
        ],
    ]): PromiseInterface;
}
