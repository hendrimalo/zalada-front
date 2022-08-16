<?php
use Illuminate\Support\Facades\Http;

function apiLoginUser($request) {
  $url = env('SERVICE_ZALADA').'login';

  try {
    $response = Http::post($url, $request);
    $data = $response->json();
    $data['http_code'] = $response->getStatusCode();
    setcookie('jwt', $data['token']);
    return $data;
  } catch (\Throwable $th) {
    return [
      'status' => 'error',
      'http_code' => 500,
      'message' => 'service zalada unavailable' 
    ];
  }
}

function apiRegisterUser($request) {
  $url = env('SERVICE_ZALADA').'register';

  try {
    $response = Http::post($url, $request);
    $data = $response->json();
    $data['http_code'] = $response->getStatusCode();
    return $data;
  } catch (\Throwable $th) {
    return [
      'status' => 'error',
      'http_code' => 500,
      'message' => 'service zalada unavailable' 
    ];
  }
}

function apiCreateProduct($request) {
  $url = env('SERVICE_PRODUCT').'register';

  try {
    $response = Http::timeout(10)->post($url, $request);
    $data = $response->json();
    $data['http_code'] = $response->getStatusCode();
    return $data;
  } catch (\Throwable $th) {
    return [
      'status' => 'error',
      'http_code' => 500,
      'message' => 'service zalada unavailable' 
    ];
  }
}

function apiGetAllProducts() {
  $url = env('SERVICE_ZALADA').'products/';

  try {
    $response = Http::timeout(10)->get($url);
    $data = $response->json();
    $data['http_code'] = $response->getStatusCode();
    return $data;
  } catch (\Throwable $th) {
    return [
      'status' => 'error',
      'http_code' => 500,
      'message' => 'service zalada unavailable' 
    ];
  }
}

function apiGetProductsById($params) {
  $url = env('SERVICE_ZALADA').'products/'.$params;

  try {
    $response = Http::timeout(10)->get($url);
    $data = $response->json();
    $data['http_code'] = $response->getStatusCode();
    return $data;
  } catch (\Throwable $th) {
    return [
      'status' => 'error',
      'http_code' => 500,
      'message' => 'service zalada unavailable' 
    ];
  }

  function apiDeleteProductById($params) {
    $url = env('SERVICE_ZALADA').'products/'.$params;

    try {
      $response = Http::timeout(10)->delete($url);
      $data = $response->json();
      $data['http_code'] = $response->getStatusCode();
    return $data;
    } catch (\Throwable $th) {
      return [
        'status' => 'error',
        'http_code' => 500,
        'message' => 'service zalada unavailable' 
      ];
    }
  }
}