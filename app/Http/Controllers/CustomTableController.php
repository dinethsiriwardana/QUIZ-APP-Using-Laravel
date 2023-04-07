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
            $table->id('quiz_no');
            $table->unsignedBigInteger('quiz_id');
            $table->foreign('quiz_id')->references('quiz_id')->on('quiz');
            $table->string('question');
            $table->string('answer_1');
            $table->string('answer_2');
            $table->string('answer_3');
            $table->string('answer_4');
            $table->string('quiz_correct');
            $table->timestamps();
        });
        
        return 'Table '.$tableName.' created successfully';
    }
    
}
