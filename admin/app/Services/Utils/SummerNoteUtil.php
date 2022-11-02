<?php
namespace App\Services\Utils;

class SummerNoteUtil
{
    public static function convertContent($content, $folder)
    {
        $dom = new \DomDocument();
        $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    
        $images = $dom->getElementsByTagName('img');
        foreach($images as $index => $image) {
            $data = $image->getAttribute('src');
            list($type, $data) = explode(';', $data);
            $imageType = explode('/', $type);
            $imageType = $imageType[1];
            list(, $data) = explode(',', $data);
            $data = base64_decode($data);
            $imageName = time().$index.'.' . $imageType;
            $path = public_path($folder. '/'). $imageName;
            file_put_contents($path, $data);
            $path = asset($folder . '/' . $imageName);
            $image->removeAttribute('src');
            $image->setAttribute('src', $path);
        }
        return $dom->saveHTML();
    }
}