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

class Jawaban extends BaseController
{
    public function index(){
        $serviceAccount = (__DIR__).'/secret/SA_Bakat.json';
        $factory = (new Factory)->withServiceAccount($serviceAccount);
        $firestore = $factory->createFirestore();
        $db = $firestore->database();

        $docRef = $db->collection('MJawaban');
        $value = $docRef->documents();
        return 
            view(
                'jawaban', 
                [
                    "title" => "Create Jawaban"
                ],
                [
                    'value' => $value
                ]
            );
    }

    public function create(){
        $serviceAccount = (__DIR__).'/secret/SA_Bakat.json';
        $factory = (new Factory)->withServiceAccount($serviceAccount);
        $firestore = $factory->createFirestore();
        $db = $firestore->database();

        $permitted_chars = '0123456789';
        $random = substr(str_shuffle($permitted_chars), 0, 1);
        $label_jawaban = $_POST['label_jawaban'];
        $skor = $_POST['skor'];
        
        $data = [
            'skor' => $skor,
            'label_jawaban' => $label_jawaban,
            'idjawaban' => $random
        ];
        $db->collection('MJawaban')->document($random)->set($data);
        return $this->index();
    }
}
