<?php

/**
 * Class SkillsController
 *
 * This class contains method(s) to get user skills.
 *
 * @category Controller
 * @package  SkillsController
 */
class SkillsController {

    /**
     * This method gets the skills related data
     *
     * @return array of associative arrays, each containing keys 'image', 'alt', 'description', 'usage'.
     * 'image' is a string path to an image file.
     * 'alt' is a string that describes the image.
     * 'description' is a string that describes the skill.
     * 'usage' is a string that indicates usage level of the skill.
     */
    public function getSkills() {
        $defaultClass = "skill-bubble-img";

        return [[
            "image" => "assets/images/c_sharp.svg",
            "alt" => "C#",
            "description" => "C#, Entity Framework Core (EF)",
            "usage" => "Very High",
            "usage_class" => "very-high",
            "class" => $defaultClass,
            "link" => "https://learn.microsoft.com/en-us/dotnet/csharp/",
        ], [
            "image" => "assets/images/unity.svg",
            "alt" => "Unity",
            "description" => "Unity 2D",
            "usage" => "High",
            "usage_class" => "high",
            "class" => $defaultClass,
            "link" => "https://unity.com/",
        ], [
            "image" => "assets/images/sql.svg",
            "alt" => "Structured Query Language (SQL)",
            "description" => "SQL (MSSQL)",
            "usage" => "Medium",
            "usage_class" => "medium",
            "class" => $defaultClass,
            "link" => "https://en.wikipedia.org/wiki/SQL",
        ], [
            "image" => "assets/images/php.svg",
            "alt" => "PHP",
            "description" => "PHP",
            "usage" => "Low",
            "usage_class" => "low",
            "class" => $defaultClass . " php-skill-img",
            "link" => "https://www.php.net/",
        ], [
            "image" => "assets/images/java.svg",
            "alt" => "Java",
            "description" => "Java",
            "usage" => "Low",
            "usage_class" => "low",
            "class" => $defaultClass,
            "link" => "https://www.java.com/",
        ], [
            "image" => "assets/images/kotlin.png",
            "alt" => "Kotlin",
            "description" => "Kotlin",
            "usage" => "Low",
            "usage_class" => "low",
            "class" => $defaultClass,
            "link" => "https://kotlinlang.org/",
        ], [
            "image" => "assets/images/html.png",
            "alt" => "Html",
            "description" => "HTML",
            "usage" => "Low",
            "usage_class" => "low",
            "class" => $defaultClass,
            "link" => "https://www.w3schools.com/html/",
        ], [
            "image" => "assets/images/css.svg",
            "alt" => "Css",
            "description" => "CSS",
            "usage" => "Low",
            "usage_class" => "low",
            "class" => $defaultClass,
            "link" => "https://www.w3schools.com/css/",
        ], [
            "image" => "assets/images/js.svg",
            "alt" => "JavaScript",
            "description" => "JavaScript",
            "usage" => "Low",
            "usage_class" => "low",
            "class" => $defaultClass,
            "link" => "https://www.w3schools.com/js/",
        ], [
            "image" => "assets/images/python.svg",
            "alt" => "Python",
            "description" => "Python",
            "usage" => "Very Low",
            "usage_class" => "very-low",
            "class" => $defaultClass,
            "link" => "https://www.python.org/",
        ],];
    }
}
