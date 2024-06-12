<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\MusicController;

// retorna informações de todas as músicas
Route::get('/music', [MusicController::class, 'get_all']);

// retorna informações de uma música com base no id
Route::get('/music/{id}', [MusicController::class, 'get_by_id']);

// retorna o arquivo mp3 com base no id
Route::get('/music/{id}/audio', [MusicController::class, 'get_audio_by_id']);

// retorna a imagem de capa com base no id
Route::get('/music/{id}/image', [MusicController::class, 'get_image_by_id']);

// adiciona nova música (path global para localizar arquivo)
Route::post('/music/add', [MusicController::class, 'add']);

// remove uma música ao fornecer o seu id
Route::delete('/music/remove', [MusicController::class, 'remove']);