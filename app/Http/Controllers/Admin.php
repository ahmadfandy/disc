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

class Admin extends BaseController
{
    public function index(){
        $serviceAccount = (__DIR__).'/secret/SA_Bakat.json';
        $factory = (new Factory)->withServiceAccount($serviceAccount);
        $firestore = $factory->createFirestore();
        $db = $firestore->database();

        $docRef = $db->collection('MUsers');
        $query = $docRef->where('menu', '=', 'S');
        $value = $query->documents();

        $docRef2 = $db->collection('MSchool');
        $value2 = $docRef2->documents();
        return 
            view(
                'admin', 
                [
                    "title" => "Create Admin School"
                ],
                ['value' => $value, 
                'value2' => $value2, 
                ]
            );
    }

    public function create_admin(){
        
        date_default_timezone_set("Asia/Jakarta");
        $date = date('ymdHis');
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $random = substr(str_shuffle($permitted_chars), 0, 8);
        $password = substr(str_shuffle($permitted_chars), 0, 8);
        $id = $date.$random;
        $pic_name = $_POST['pic_name'];
        $admin_email = $_POST['admin_email'];
        $admin_telepon = $_POST['admin_telepon'];
        $admin_address = $_POST['admin_address'];
        $kodepos = $_POST['kodepos'];
        $school_select = $_POST['school_select'];
        $serviceAccount = (__DIR__).'/secret/SA_Bakat.json';
        $factory = (new Factory)->withServiceAccount($serviceAccount);
        $firestore = $factory->createFirestore();
        $db = $firestore->database();
        $data = [
            'alamat' => $admin_address,
            'email' => $admin_email,
            'idsekolah' => $school_select,
            'iduser'=> $id,
            'kodepos' => $kodepos,
            'menu' => 'S',
            'nama' => $pic_name,
            'password' => $password,
            'phone' => $admin_telepon,
            'status' => 'A'
        ];
        $db->collection('MUsers')->document($id)->set($data);

        return $this->index();
    }
}
