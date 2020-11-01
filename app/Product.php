<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $product_sku
 * @property string $product_name
 * @property string $product_description
 * @property string $raw_price
 * @property string $tax
 * @property boolean $is_service
 * @property boolean $is_fragile
 * @property string $created_at
 * @property string $updated_at
 */
class Product extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['product_sku', 'product_name', 'product_description', 'raw_price', 'tax', 'is_service', 'is_fragile', 'created_at', 'updated_at'];

}
