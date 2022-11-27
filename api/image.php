<?php
$id = $_GET["id"];
$resolut = $_GET["resolution"];
if (isset($id) && isset($resolut)) {
    $_bool = file_exists("images/new/" . $id . $resolut . ".png");
    if ($_bool) {
//        echo "<p> DA DA DA </p>";
        header("Location: /api/images/new/" . $id . $resolut . ".png");
    } else {
        $images = array_slice(scandir("./images/old/"), 2);
        foreach ($images as $image) {
            $imgPath = pathinfo($image);
            $filename = $imgPath["filename"];
            if (strval($id) == strval($filename)) {
                $resolution = explode("x", $resolut);
                $x = $resolution[0];
                $y = $resolution[1];
                if ($imgPath["extension"] == "svg") {
                    $dom = new DOMDocument('1.0', 'utf-8');
                    $dom->load("./images/old/" . $image);
                    $svg = $dom->documentElement;
                    if (!$svg->hasAttribute('viewBox')) {
                        $pattern = '/^(\d*\.\d+|\d+)(px)?$/';
                        $interpretable = preg_match($pattern, $svg->getAttribute('width'), $width) && preg_match($pattern, $svg->getAttribute('height'), $height);
                        if ($interpretable) {
                            $view_box = implode(' ', [0, 0, $width[0], $height[0]]);
                            $svg->setAttribute('viewBox', $view_box);
                        } else {
                            throw new Exception("viewBox is dependent on environment");
                        }
                    }
                    $svg->setAttribute("width", floatval($x));
                    $svg->setAttribute("height", floatval($y));
                    $dom->save("images/new/" . $filename . $resolut . "." . $imgPath["extension"]);
                    $_svgData = file_get_contents("images/new/" . $filename . $resolut . ".svg");
                    $_img = new Imagick();
                    $_img->setBackgroundColor(new ImagickPixel("transparent"));
                    $_img->readImageBlob($_svgData);
                    $_img->setImageFormat("png32");
                    $_img->writeImage("images/new/" . $filename . $resolut . ".png");
                    header("Location: /api/images/new/" . $filename . $resolut . ".png");
//                    echo "<p> NET NET NET </p>";
                } else {
                    $img = file_get_contents("./images/old/" . $image);
                    file_put_contents("./images/new/" . $filename . $resolut . "." . $imgPath["extension"], imagescale($img, $x, $y));
                    $img = new Imagick("./images/old/" . $image);
                    $img->setImageResolution(floatval($x), floatval($y));
                    $img->writeImage("images/new/" . $filename . $resolut . "." . $imgPath["extension"]);
//                    echo "<p> NET NET NET </p>";
                    header("Location: /api/images/new/" . $filename . $resolut . "." . $imgPath["extension"]);
                }
            }
        }
    }
} else {
    header("HTTP/1.0 404 Not Found");
}
?>