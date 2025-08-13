<?php
namespace App\Models;

use CodeIgniter\Model;

class Product_AttributeModel extends Model
{
    protected $table = 'product_attributes';
    protected $primaryKey = 'id';
    protected $allowedFields = ['product_id', 'length', 'diameter', 'blade_length', 'tip_value'];
}
