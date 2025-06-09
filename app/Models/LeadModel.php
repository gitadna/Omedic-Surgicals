<?php

namespace App\Models;

use CodeIgniter\Model;

class LeadModel extends Model
{
    protected $table = 'leads';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'mobile', 'email', 'note', 'created_at'];
    protected $useTimestamps = false;
}
