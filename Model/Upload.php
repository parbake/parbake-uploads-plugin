<?php
/**
 * Upload Model
 *
 * Copyright 2013, Jason D Snider. (http://jasonsnider.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 * 
 * @copyright Copyright 2012 - 2014, Jason D Snider
 * @license http://www.opensource.org/licenses/mit-license.php The MIT License
 * @author Lyubomir R Dimov <lubo.dimov@42northgroup.com>
 */
App::uses('UploadsAppModel', 'Uploads.Model');

/**
 * Content Model
 * @author Lyubomir R Dimov <lubo.dimov@42northgroup.com>
 * @package	CTW
 */
class Upload extends AppModel {

    /**
     * The static name this model
     * @var string
     */
    public $name = 'Upload';

    /**
     * The table to be used by this model
     * @var string
     */
    public $useTable = 'uploads';

    /**
     * Specifies the behaviors invoked by the model
     * @var array 
     */
    public $actsAs = array(
        'Jsc.Loggable'
    );

    /**
     * Defines belongs to relationships this model
     * @var array
     */
    public $belongsTo = array(
        'User' => array(
            'className' => 'User.User',
            'foreignKey' => 'user_id',
            'dependent' => true
        ),
        'CreatedUser' => array(
            'className' => 'Users.User',
            'foreignKey' => 'created_user_id',
            'dependent' => true
        )
    );
    
    /**
     * Checks if the file we are trying upload already exists and if it does
     * it renames it by appending a number at the end of the file. The function
     * is recursive so it will keep renaming the untill it gets to a file name
     * that does exist.
     * 
     * @param string $path_to_file
     * @param string $filename
     * @param int $count
     * @return string
     */    
    public function does_file_exist($path_to_file, $filename, $count = 1)
    {
        if(file_exists($path_to_file.$filename)){
            
            if($count<2){
                $file = explode('.', $filename);
                $file[count($file)-2] = $file[count($file)-2].'_'.$count;
                $new_filename = implode('.', $file);
            }else{
                $new_filename = str_ireplace('_'.($count-1).'.', '_'.($count).'.', $filename);
            }            
            
            return $this->does_file_exist($path_to_file, $new_filename, $count+1);
        }else{
            return $filename;
        }
    }
}