<?php

$params = $_POST;

$foto = '';
if ($_FILES['foto']['name']) {
    $upload_dir = './colab/test/';

    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0755, true);
    }

    $temp_file = $_FILES['foto']['tmp_name'];
    $original_file = $_FILES['foto']['name'];

    $unique_filename = uniqid() . '_' . $original_file;
    if (move_uploaded_file($temp_file, $upload_dir . $unique_filename)) {
        $req_arr = [
            'image' => $unique_filename
        ];
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://localhost:7000/klasifikasi-coral',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($req_arr),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $response_arr = json_decode($response, true);

        if ($response_arr['result'] == 'The coral is predicted to be healthy.') {
            // $message_result = "Kondisi terumbu karang ini terlihat sehat.\n\n";
            header("Location: klasifikasi_hasil.php?params=sehat&image=" . $unique_filename);
        } else {
            // $message_result = "Kondisi terumbu karang ini terlihat bleaching. Tindakan yang perlu dilakukan untuk dapat mencegah sekaligus menanggulangi coral bleaching, yakni:\n1. Penanaman karang kembali di lokasi yang memiliki sedikit faktor penyebab coral bleaching.\n2. Memberikan perlindungan pada daerah terumbu karang yang masih kondisi baik. Hal itu dilakukan sebagai sumber bibit karang untuk penanaman kembali.\n3. Menentukan zona larangan memancing dan pembatasan alat penangkapan (dilarang memakai bahan peledak saat menangkap ikan).\n4. Mengurangi dampak kegiatan wisatawan yang dapat meningkatkan pencemaran air.\n5. Melibatkan wisatawan atau relawan dalam permasalahan coral bleaching untuk kampanye lingkungan atau penyebaran informasi.\n\n";
            header("Location: klasifikasi_hasil.php?params=tidak_sehat&image=" . $unique_filename);
        }
    }
}
