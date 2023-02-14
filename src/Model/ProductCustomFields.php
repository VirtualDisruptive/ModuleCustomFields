<?php

namespace PrestaShop\Module\Democustomfields17\Model;

use ObjectModel;
use DbQuery;
use Db;

class ProductCustomFields extends ObjectModel {
    /** @var int ID */
    public $id;

    /** @var int product ID */
    public $id_product;

    /** @var string  */
    public $shipmark;

    /** @var string  */
      public $airplane;

    /** @var string  */
    public $ship;

    /** @var string  */
      public $ordered_products;

    /** @var string  */
    public $order_date;

    /** @var string  */
    public $my_translatable_text_field_example;

    /** @var bool  */
    public $my_switch_field_example;

    /** @var string Object creation date */
    public $date_add;

    /** @var string Object last modification date */
    public $date_upd;

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = [
        'table' => 'democustomfields17',
        'primary' => 'id_democustomfields17',
        'multilang' => true,
        'multilang_shop' => true,
        'fields' => [
            'id_product' => [
                'type' => self::TYPE_INT,
                'validate' => 'isUnsignedId'
            ],
            'shipmark' => [
                'type' => self::TYPE_HTML,
                'validate' => 'isCleanHtml'
            ],
            'airplane' => [
                'type' => self::TYPE_HTML,
                'validate' => 'isCleanHtml'
            ],
            'ship' => [
                'type' => self::TYPE_HTML,
                'validate' => 'isCleanHtml'
            ],
            'ordered_products' => [
                'type' => self::TYPE_HTML,
                'validate' => 'isCleanHtml'
            ],
            'order_date' => [
                'type' => self::TYPE_HTML,
                'validate' => 'isCleanHtml'
            ],
          
            'my_translatable_text_field_example' => [
                'type' => self::TYPE_HTML,
                'lang' => true,
                'shop' => true,
                'validate' => 'isCleanHtml'
            ],
            'my_switch_field_example' => [
                'type' => self::TYPE_BOOL
            ],
            'date_add' => [
                'type' => self::TYPE_DATE,
                'validate' => 'isDate'
            ],
            'date_upd' => [
                'type' => self::TYPE_DATE,
                'validate' => 'isDate'
            ],
        ],
    ];

    public static function getInstanceByProductId(
        int $idProduct,
        ?int $idLang = null,
        ?int $idShop = null
    ) : self
    {
        $sql = new DbQuery();
        $sql->select(self::$definition['primary']);
        $sql->from(self::$definition['table'], 'b');
        $sql->where('b.id_product = '.(int)$idProduct);

        $idObject = (int)Db::getInstance()->getValue($sql);

        return (new self($idObject, $idLang, $idShop));
    }
}