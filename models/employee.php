<?php
/**
 * To make IDEs autocomplete happy
 *
 * @property int id
 * @property int userid
 * @property int customerId
 * @property string productName
 */
class employee extends dbObject {
    protected $dbTable = "employee";
    protected $primaryKey = "id";
    protected $dbFields = Array (
        'fullname' => Array('text', 'required'),
        'email' => Array ('text', 'required'),
        'password' => Array ('text','required'),
         'key' => Array ('text','required'),
        'image' => Array ('text','required'),
        'status' => Array ('int','required')
    );



 }
 
 ?>   