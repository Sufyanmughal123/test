<?php

namespace App\Helper;

use App\Models\Child;
use App\Models\Settings;
use App\Models\Subject;
use App\Services\PageServices;


class Helpers
{

    public function __construct(PageServices $PageServices)
    {
        $this->PageServices = $PageServices;
    }

    public static function get_child($id = 0)
    {
        if ($id == 0) {
            $id = Auth()->id();
        }
        return Child::where('parent_id', $id)->get();

    }

    public static function get_Subject($ids = [])
    {

        return Subject::whereIn('id', $ids)->get();

    }


    public function get_home()
    {
        return $this->PageServices->homeedit();
    }
  public function get_services()
    {
        return $this->PageServices->index();
    }
    public function get_setting()
    {
        return    Settings::find(1);
    }




}
