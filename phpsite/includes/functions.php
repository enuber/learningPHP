<?php

function getItemHtml($id, $item) {
    $output = "<li><a href='#'><img src='"
        . $item["img"] . "' alt='"
        . $item["title"]."' />"
        . "<p> View Details</p>"
        . "</a></li>";
    return $output;
}

function arrayCategory($catalog, $category) {

    $output = array();

    foreach ($catalog as $id => $item) {
        if ($category == null OR strtolower($category) == strtolower($item["category"])) {
            $sort = $item["title"];
            $sort = ltrim($sort, "A ");
            $sort = ltrim($sort, "An ");
            $sort = ltrim($sort, "The ");
            $output[$id] = $sort;
        }
    }
    asort($output);
    return array_keys($output);
}