<?php

namespace team_extreme\Utility;

class Utility
{
    const ProjectPath = "/teamextreme-project";

    const AdminWebUrl = 'http://localhost/teamextreme-project/admin/';
    const AdminWebView = 'http://localhost/teamextreme-project/admin/views/';
    const AdminAssets = "http://localhost/teamextreme-project/public/themes/admin/";
    const AdminElement = "/teamextreme-project/admin/views/elements";
    const AdminLayouts = "/teamextreme-project/admin/views/layouts";

    const FronWebUrl = "http://localhost/teamextreme-project/front/";
    const FrontWebView = 'http://localhost/teamextreme-project/front/views/';
    const FrontAseets = "http://localhost/teamextreme-project/public/themes/front/";
    const FrontElement = "/teamextreme-project/front/views/elements";
    const FrontLayouts = "/teamextreme-project/front/views/layouts";

    public static function redirect($path)
    {
        header("location:$path");
    }
    static function getAdminElement($elementName)
    {
        return $_SERVER["DOCUMENT_ROOT"] . self::AdminElement . "/" . $elementName;
    }
    static function getFrontElement($elementName)
    {
        return $_SERVER["DOCUMENT_ROOT"] . self::FrontElement . "/" . $elementName;
    }
}
