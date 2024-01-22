<?php

namespace App\Models;

use CodeIgniter\Model;

class StaffModel extends Model
{
    protected $table      = 'staff';
    protected $primaryKey = 'id';
    protected $allowedFields = ['fullName', 'fullName', 'email', 'position', 'posCategory', 'profileSummary', 'profileImg'];
    
}