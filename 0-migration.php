<?php
$table->increments('id');
$table->string('nome',255)->nullable(false);
$table->date('data_nascimento')->nullable(false);
$table->string('e-mail',60)->nullable(false)->unique();
$table->string('telefone',13)->nullable(false);
$table->string('celular',14)->nullable(true);
$table->timestamps();