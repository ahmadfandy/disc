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

class Tipe_soal extends BaseController
{
    public function index(){
        $serviceAccount = (__DIR__).'/secret/SA_Bakat.json';
        $factory = (new Factory)->withServiceAccount($serviceAccount);
        $firestore = $factory->createFirestore();
        $db = $firestore->database();

        $docRef = $db->collection('MTipe');
        $value = $docRef->documents();
        return 
            view(
                'tipe_soal', 
                [
                    "title" => "Tipe Soal"
                ],
                ['value' => $value
                ]
            );
    }

    public function create(){
        $serviceAccount = (__DIR__).'/secret/SA_Bakat.json';
        $factory = (new Factory)->withServiceAccount($serviceAccount);
        $firestore = $factory->createFirestore();
        $db = $firestore->database();
        $permitted_chars = '0123456789';
        $random = substr(str_shuffle($permitted_chars), 0, 6);
        $tipe_soal = $_POST['tipe_soal'];
        $data = [
            'label' => $tipe_soal,
            'idtipe' => $random,
            'status' => 'A'
        ];
        $db->collection('MTipe')->document($random)->set($data);
        return $this->index();
    }
}
