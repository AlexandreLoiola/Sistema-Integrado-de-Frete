<?php

require_once('vendor/autoload.php');

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
$client = new \GuzzleHttp\Client();

$cep = $_POST['cep'];

//23812310

$data = array(
    "from" => array(
        "postal_code" => "49010-660"
    ),
    "to" => array(
        "postal_code" => $cep
    ),
    "products" => array(
        array(
            "id" => 1,
            "width" => 11,
            "height" => 17,
            "length" => 11,
            "weight" => 13,
            "insurance_value" => 8.1,
            "quantity" => 1
        )
    ),
    "options" => array(
        "receipt" => false,
        "own_hand" => false
    ),
    "services" => ""
);

$response = $client->request('POST', 'https://sandbox.melhorenvio.com.br/api/v2/me/shipment/calculate', [
  'body' => json_encode($data),
  'headers' => [
    'Accept' => 'application/json',
    'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI5NTYiLCJqdGkiOiI3NjNlNDBkMDA0MzkwYmZiYWJmYzZlZjMzN2JiYjE1MTNkMGIzMDM0NWI4MjAwYzkxYjNlYjFhMzRhZWUxMTNlM2FiMzRjMWQ1MjBkOTA2NCIsImlhdCI6MTcwNzQzNjAyNy44Nzc0NDEsIm5iZiI6MTcwNzQzNjAyNy44Nzc0NDMsImV4cCI6MTczOTA1ODQyNy44NjgxOTgsInN1YiI6IjliNDYwMjgwLTZiNDAtNDFiNS1hNjhjLTY1MTljNWE5Mzc3MCIsInNjb3BlcyI6WyJjYXJ0LXJlYWQiLCJjYXJ0LXdyaXRlIiwiY29tcGFuaWVzLXJlYWQiLCJjb21wYW5pZXMtd3JpdGUiLCJjb3Vwb25zLXJlYWQiLCJjb3Vwb25zLXdyaXRlIiwibm90aWZpY2F0aW9ucy1yZWFkIiwib3JkZXJzLXJlYWQiLCJwcm9kdWN0cy1yZWFkIiwicHJvZHVjdHMtZGVzdHJveSIsInByb2R1Y3RzLXdyaXRlIiwicHVyY2hhc2VzLXJlYWQiLCJzaGlwcGluZy1jYWxjdWxhdGUiLCJzaGlwcGluZy1jYW5jZWwiLCJzaGlwcGluZy1jaGVja291dCIsInNoaXBwaW5nLWNvbXBhbmllcyIsInNoaXBwaW5nLWdlbmVyYXRlIiwic2hpcHBpbmctcHJldmlldyIsInNoaXBwaW5nLXByaW50Iiwic2hpcHBpbmctc2hhcmUiLCJzaGlwcGluZy10cmFja2luZyIsImVjb21tZXJjZS1zaGlwcGluZyIsInRyYW5zYWN0aW9ucy1yZWFkIiwidXNlcnMtcmVhZCIsInVzZXJzLXdyaXRlIiwid2ViaG9va3MtcmVhZCIsIndlYmhvb2tzLXdyaXRlIiwid2ViaG9va3MtZGVsZXRlIiwidGRlYWxlci13ZWJob29rIl19.NwXg8PZ8xDJ1GvGYSYX9S-cFPJhtwDRrmcHtBsam57SoYuHA4n9jykh16u4ihhTdO5cWAidekADFjkGsdiUynNBeyADHOx-NmTg5LHkqhOOvRurwl18ZB_9_npsAR0lZnbziA2dRvntrI7fANIzT9UvvMCh5R2lK92G_NaRf4ut5OKA_nPuB0f2cIFuEIVnhA9VsVwLQbMSY0URPxByihXvBDSCdzB-KjhXiyThwRCdaMAgWKBDMWEuh_ZqQ-zZZzLwADyAwusReiQt6tJIUHfgsiAHWCm3-K5jtm044ekqSZtSH09QqTU_CL3yQpujiohN3UEbV4d8qQPKePhX--o5gCIc2cBGYSPc8EU4N-JQiGLc5UPMFL_Wl1JltFo34s5GMOhaeAXjVdI0bjGZXx5zmQbUHv5W3RpilubDHLaTHTtXJzmzbMPVMladUs7fS3Si-Nf4y7dagbcj3mKGBzwLGl2diftRL4Sn-01mJi711S5IY9TggBanTcXwm9M92adeQQb83zD3Uob_NS0qqXu-DwWJ3gfJ-5_l5A35Y7fj2pQUOJT_lcSWw6u2cHbxhczocNxerzk_tJ3BDRDC_3C5Ad3bxt6jL_AE6gOZsm32ghuMOXVSNz9mtU3uQaEVQHBl-d8fv1KUC8PnsUXpgwUPPDShDgFyyidc0dpN2oKM',
    'Content-Type' => 'application/json',
    'User-Agent' => 'alexandre.loiola.741@gmail.com',
  ],
]);
    $body = (string) $response->getBody();
    echo $body;
}

ob_end_flush();
?>