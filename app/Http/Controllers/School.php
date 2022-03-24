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

class School extends BaseController
{
    public function index(){
        $serviceAccount = (__DIR__).'/secret/SA_Bakat.json';
        $factory = (new Factory)->withServiceAccount($serviceAccount);
        $firestore = $factory->createFirestore();
        $db = $firestore->database();

        $docRef = $db->collection('MSchool');
        $value = $docRef->documents();
        return 
            view(
                'school', 
                [
                    "title" => "Create School"
                ],
                ['value' => $value]
            );
    }

    public function create_school(){
        $school_name = $_POST['school_name'];
        $school_email = $_POST['school_email'];
        $school_telepon = $_POST['school_telepon'];
        $school_alamat = $_POST['school_alamat'];
        $kodepos = $_POST['kodepos'];
        $serviceAccount = (__DIR__).'/secret/SA_Bakat.json';
        $factory = (new Factory)->withServiceAccount($serviceAccount);
        $firestore = $factory->createFirestore();
        $db = $firestore->database();
        $docRef = $db->collection('MSchool');
        $query = $docRef->orderBy('idschool', 'DESC')->limit(1);
        $documents = $query->documents();
        foreach ($documents as $document) {
            if ($document->exists()) {
                $latest_id =$document->id() + 1;
                $id = str_pad($latest_id, 8, '0', STR_PAD_LEFT);
                $data = [
                    'alamat' => $school_alamat,
                    'email' => $school_email,
                    'idschool' => $id,
                    'kodepos' => $kodepos,
                    'nama'=> $school_name,
                    'notelp'=> $school_telepon,
                    'status' => 'A'
                ];
                $db->collection('MSchool')->document($id)->set($data);
            } else {
                $id = str_pad(1, 8, '0', STR_PAD_LEFT);
                $data = [
                    'alamat' => $school_alamat,
                    'email' => $school_email,
                    'idschool' => $id,
                    'kodepos' => $kodepos,
                    'nama'=> $school_name,
                    'notelp'=> $school_telepon,
                    'status' => 'A'
                ];
                $db->collection('MSchool')->document($id)->set($data);
            }
        }
        return $this->index();
    }
}
