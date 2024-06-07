<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Form\FileLoadForm;

class FileLoadController extends AppController
{
    public function index()
    {
        $this->Authorization->skipAuthorization();
        $fileload = new FileLoadForm();
        $this->set('fileload', $fileload); 
        if ($this->request->is('post')) {
            $file = $this->request->getData('csv'); //受け取り
            //$file = $this->request->getData(); 
            //debug($file);
            $addToDir = $this->request->getData('addToDir');
            //debug($addToDir);
            //$filePath = '../webroot/img/' . date("YmdHis") . $file['name'];
            //$filePath = '../webroot/files/' . date("YmdH") . $file['name'];
            //debug($file['name']);
            $filePath = '../webroot/' . $addToDir . '/' . date("YmdH") . $file['name'];
            $rt = move_uploaded_file($file['tmp_name'], $filePath); //ファイル名の先頭に時間をくっつけて/webroot/$addToDirに移動させる
            if($rt){   
                $this->Flash->success($rt);
                $this->Flash->success('ファイルを受け取りました: ' . $filePath  );
            } else {
                $this->Flash->error('フォーム送信に問題がありました。');
            }
        }
    }
}