<?php

class Thesaurus
{
    private $thesaurus;

    function Thesaurus($thesaurus)
    {
        $this->thesaurus = $thesaurus;
    }

    public function getSynonyms($word)
    {
        $arr = [
            'word' => $word,
            'synonyms' => [],
        ];

        if (isset($this->thesaurus[$word])) {
            $arr['synonyms'] = $this->thesaurus[$word];
        }

        return json_encode($arr);
    }
}

$thesaurus = new Thesaurus(
    array
    (
        "buy" => array("purchase"),
        "big" => array("great", "large")
    ));
echo $thesaurus->getSynonyms("big");
echo "\n";
echo $thesaurus->getSynonyms("agelast");