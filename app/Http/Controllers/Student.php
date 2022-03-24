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

class Student extends BaseController
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

        $docRef3 = $db->collection('MUsers');
        $query = $docRef3->where('menu', '=', 'C');
        $value3 = $query->documents();
        return 
            view(
                'student', 
                [
                    "title" => "Create Student"
                ],
                ['value' => $value,
                'value2' => $value2,
                'value3' => $value3
                ]
            );
    }

    public function create_student(){
        $serviceAccount = (__DIR__).'/secret/SA_Bakat.json';
        $factory = (new Factory)->withServiceAccount($serviceAccount);
        $firestore = $factory->createFirestore();
        $db = $firestore->database();
        date_default_timezone_set("Asia/Jakarta");
        $date = date('ymdHis');
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $random = substr(str_shuffle($permitted_chars), 0, 8);
        $password = substr(str_shuffle($permitted_chars), 0, 8);
        $id = $date.$random;
        $id_school = $_POST['school_name'];
        $student_name = $_POST['student_name'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $student_class = $_POST['student_class'];
        $docRef = $db->collection('MSchool')->document($id_school);
        $snapshot = $docRef->snapshot();
        $nama_sekolah = $snapshot->data()['nama'];
        $data = [
            // 'Nama Sekolah' => $nama_sekolah,
            'nama' => $student_name,
            'tgllahir' => $tanggal_lahir,
            'kelas' => $student_class,
            'iduser'=> $id,
            'menu' => 'C',
            'status' => 'A',
            'idsekolah' => $id_school
        ];
        $db->collection('MUsers')->document($id)->set($data);
        return $this->index();
    }
}
