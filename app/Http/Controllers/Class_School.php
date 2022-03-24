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

class Class_School extends BaseController
{
    public function index(){
        $serviceAccount = (__DIR__).'/secret/SA_Bakat.json';
        $factory = (new Factory)->withServiceAccount($serviceAccount);
        $firestore = $factory->createFirestore();
        $db = $firestore->database();

        $docRef = $db->collection('MSchool');
        $value = $docRef->documents();

        $docRef2 = $db->collection('MClass');
        $value2 = $docRef2->documents();
        return 
            view(
                'class', 
                [
                    "title" => "Create Class"
                ],
                ['value' => $value,
                'value2' => $value2
                ]
            );
    }

    public function create_class(){
        $school_select = $_POST['school_select'];
        $class_name = $_POST['class_name'];
        $goodUrl = str_replace(' ', '_', $class_name);
        $idkelas = $goodUrl.'-'.$school_select;
        $serviceAccount = (__DIR__).'/secret/SA_Bakat.json';
        $factory = (new Factory)->withServiceAccount($serviceAccount);
        $firestore = $factory->createFirestore();
        $db = $firestore->database();
        $data = [
            'id_kelas' => $idkelas,
            'id_sekolah' => $school_select,
            'nama_kelas' => $class_name,
            'status' => 'A'
        ];
        $db->collection('MClass')->document($idkelas)->set($data);
        return $this->index();
    }
}
