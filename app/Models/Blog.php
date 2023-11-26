<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin;


// app/Models/Blog.php
// app/Models/Blog.php
class Blog extends Model {
    public function admin() {
        return $this->belongsTo(Admin::class, 'admin_id');
    }
}

