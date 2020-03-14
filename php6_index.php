<?php

echo writeSecretSentence("Le chameau", "Alladin");

function writeSecretSentence(string $word1, string $word2): string
{
    return "$word1 s'incline face à $word2";
}
