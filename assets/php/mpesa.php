<?
// GEtting the MPESA-API Accesss Token in JSON format
$url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: Bearer cFJZcjZ6anEwaThMMXp6d1FETUxwWkIzeVBDa2hNc2M6UmYyMkJmWm9nMHFRR2xWOQ==']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// The JSON Response
$response = curl_exec($ch);
curl_close($ch);
echo $response;