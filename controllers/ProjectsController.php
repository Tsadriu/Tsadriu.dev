<?php

/**
 * Class ProjectsController
 *
 * This class is used for handling project related operations.
 */
class ProjectsController
{
    /**
     * Returns an array of projects with their details.
     * Each project is an associative array with keys -
     * "image", "alt", "name", "description", "made-in", "link".
     *
     * @return array An array of projects.
     */
    public function getProjects()
    {
        return [[
            "image" => "assets/images/arcadia_bg.jpg",
            "alt" => "Arcadia",
            "name" => "Arcadia",
            "description" => "A small 2D RPG game developed way back in 2017",
            "made-in" => ["Game Maker Studio 2"],
            "link" => "",
        ], [
            "image" => "assets/images/nestronomus_bg.png",
            "alt" => "Nestronomus",
            "name" => "Nestronomus",
            "description" => "A small 2D turn-based RPG developed between 2020 and 2021",
            "made-in" => ["Unity", "C#"],
            "link" => "https://gamejolt.com/games/Nestronomus/463568",
        ], [
            "image" => "assets/images/apocalamalipse.png",
            "alt" => "Apocalamalipse",
            "name" => "Apocalamalipse",
            "description" => "Small python game developed for a school project",
            "made-in" => ["Python"],
            "link" => "https://www.nuget.org/packages/TsadriuUtilities.Csv",
        ], [
            "image" => "assets/images/flyff_bg.png",
            "alt" => "Flyff Universe Launcher",
            "name" => "Flyff Universe Launcher",
            "description" => "A winforms applications that allows multi-clienting for flyff universe",
            "made-in" => ["Winforms", "C#"],
            "link" => "https://github.com/Tsadriu/FlyffUniverseLauncher",
        ], [
            "image" => "assets/images/dim_bg.png",
            "alt" => "Dim Multi-client",
            "name" => "DIM Multi-Client",
            "description" => "A winforms applications that allows multi-clienting for DIM (Destiny 2)",
            "made-in" => ["Winforms", "C#"],
            "link" => "https://github.com/Tsadriu/DIM_MultiClient",
        ], [
            "image" => "assets/images/setting_bg.png",
            "alt" => "Tsadriu Utilities",
            "name" => "Tsadriu Utilities",
            "description" => "Small C# library with utilities to manipulate strings, numbers, dates and more",
            "made-in" => ["C#"],
            "link" => "https://www.nuget.org/packages/TsadriuUtilities",
        ], [
            "image" => "assets/images/setting_bg.png",
            "alt" => "Tsadriu Utilities.String",
            "name" => "Tsadriu Utilities.String",
            "description" => "Small C# library with utilities to manipulate string variables",
            "made-in" => ["C#"],
            "link" => "https://www.nuget.org/packages/TsadriuUtilities.String",
        ], [
            "image" => "assets/images/setting_bg.png",
            "alt" => "Tsadriu Utilities.DateTime",
            "name" => "Tsadriu Utilities.DateTime",
            "description" => "Small C# library with utilities to manipulate DateTime variables",
            "made-in" => ["C#"],
            "link" => "https://www.nuget.org/packages/TsadriuUtilities.DateTime",
        ], [
            "image" => "assets/images/excel_bg.png",
            "alt" => "Tsadriu Utilities.Excel",
            "name" => "Tsadriu Utilities.Excel",
            "description" => "Small C# library that helps on reading XLSX files",
            "made-in" => ["C#"],
            "link" => "https://www.nuget.org/packages/TsadriuUtilities.Excel",
        ], [
            "image" => "assets/images/setting_bg.png",
            "alt" => "Tsadriu Utilities.Csv",
            "name" => "Tsadriu Utilities.Csv",
            "description" => "Small C# library that helps on creating/reading CSV files",
            "made-in" => ["C#"],
            "link" => "https://www.nuget.org/packages/TsadriuUtilities.Csv",
        ],];
    }
}
