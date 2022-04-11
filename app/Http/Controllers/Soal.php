<?php

namespace App\Http\Controllers;

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;
use Google\Cloud\Firestore\FirestoreClient;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Soal extends BaseController
{
    public function index(){
        $serviceAccount = (__DIR__).'/secret/SA_Bakat.json';
        $factory = (new Factory)->withServiceAccount($serviceAccount);
        $firestore = $factory->createFirestore();
        $db = $firestore->database();

        $docRef = $db->collection('MSoal');
        $value = $docRef->documents();
        $docRef2 = $db->collection('MTipe');
        $value2 = $docRef2->documents();
        return 
            view(
                'soal', 
                [
                    "title" => "Create Soal"
                ],
                [
                    'value' => $value,
                    'value2' => $value2
                ]
            );
    }

    public function create(){
        $serviceAccount = (__DIR__).'/secret/SA_Bakat.json';
        $factory = (new Factory)->withServiceAccount($serviceAccount);
        $firestore = $factory->createFirestore();
        $db = $firestore->database();
        $permitted_chars = '0123456789';
        $random = substr(str_shuffle($permitted_chars), 0, 5);
        $soal_select = $_POST['soal_select'];
        $soal = $_POST['soal'];
        $urutan = $_POST['urutan'];
        var_dump($soal.'-'.$soal_select.'-'.$urutan);
        $data = [
            'idmsoal' => $random,
            'tipe' => $soal_select,
            'pertanyaan' => $soal,
            'no_urut' => $urutan,
            'status' => 'A'
        ];
        $db->collection('MSoal')->document($random)->set($data);
        return $this->index();
    }
}
