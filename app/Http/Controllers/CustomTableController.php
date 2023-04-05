<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CustomTableController extends Controller
{
    public function createUserTable(string $tableName)
    {
        
        Schema::create($tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();
        });
        
        // return 'Table '.$tableName.' created successfully';
    }
}
