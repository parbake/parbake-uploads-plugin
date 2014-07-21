<?php
/**
 * Provides controll logic for managing uploads
 *
 * JSC (http://jasonsnider.com/jsc)
 * Copyright 2013-2014, Jason D Snider. (http://jasonsnider.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2013-2014, Jason D Snider. (http://jasonsnider.com)
 * @link http://jasonsnider.com
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @author Lyubomir R Dimov <ldimov@microtrain.net>
 * @package Uploads
 */
App::uses('UploadsAppController', 'Uploads.Controller');

/**
 * Provides controll logic for managing uploads
 * @author Lyubomir R Dimov <ldimov@microtrain.net>
 * @package Uploads
 */
class UploadsController extends UploadsAppController {
    /**
     * Holds the name of the controller
     * @var string
     */
    public $name = 'Uploads';


    /**
     * Called before action
     * @return void
     */
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('__none');
        $this->Authorize->allow();
    }

    /**
     * The models used by the controller
     * @var array
     */
    public $uses = array('Uploads.Upload');
    
    /**
     * Allows the user to upload an image.
     * 
     * @return void
     */
    public function admin_upload_image(){
        if(!empty($this->data)){
            $this->autoRender = false;
            $uploadDir = APP. "webroot/img";
            
            $this->request->data['Upload']['file_name'] = $this->Upload->does_file_exist("{$uploadDir}/", 
                                                                                 $this->request->data['Upload']['upload']['name']);
            
            $this->request->data['Upload']['file_path'] = "{$uploadDir}/{$this->request->data['Upload']['file_name']}";
            $this->request->data['Upload']['user_id'] = $this->Session->read('Auth.User.id');
            
            $fileMoved = move_uploaded_file($this->request->data['Upload']['upload']['tmp_name'], 
                                            $this->request->data['Upload']['file_path']);
            
            if($fileMoved !== false){
                if($this->Upload->save($this->request->data)){
                    echo "https://{$_SERVER['SERVER_NAME']}/img/{$this->request->data['Upload']['upload']['name']}";
                }else{
                    unlink($this->request->data['Upload']['file_path']);
                    echo 0;
                }
            }else{
                echo 0;
            }
        }
    }
}