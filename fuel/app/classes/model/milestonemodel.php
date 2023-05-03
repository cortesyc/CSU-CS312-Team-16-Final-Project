<?php
namespace Model;
use \DB;

class MilestoneModel extends \Model {

    public static function colorCount() {
        return DB::count_records('colors');
    }

    public static function largestId() {
        return DB::query('SELECT MAX(id) as id FROM `colors`')->execute()->as_array();
    }

    public static function colorsInfo() {
        return DB::query('SELECT id, name, hex_value FROM `colors`', DB::SELECT)->execute()->as_array();
    }

    public static function addColor($colorToAdd, $colorToAddHex) {    //FIX Adds to database but error in website
        $id = MilestoneModel::largestId()[0]['id'];
        if ($id == NULL) {
            $id = 1;
        } else {
            $id = $id + 1;
        }
        DB::insert('colors')->set(array('id' => $id, 'name' => $colorToAdd, 'hex_value' => $colorToAddHex))->execute();
    }

    public static function editColor($colorToEdit) {    //FIXING
        DB::update('colors')->where('name', '=', $colorToEdit)->execute(); 
    }

    public static function deleteColor($colorToDelete) {    //FIX Deletes color in database but not working on website
        DB::delete('colors')->where('name', '=', $colorToDelete)->execute();
    }

}


?>
