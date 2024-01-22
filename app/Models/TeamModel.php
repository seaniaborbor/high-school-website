<?php

namespace App\Models;

use CodeIgniter\Model;

class TeamModel extends Model
{
    protected $table      = 'team';
    protected $primaryKey = 'id';
    protected $allowedFields = [
    	'fullName',
    	'email',
    	'passwd',
    	'profession',
    	'fbHandle',
    	'xHandle',
    	'linkinHandle',
    	'profileImg'
    ];
  
    
}