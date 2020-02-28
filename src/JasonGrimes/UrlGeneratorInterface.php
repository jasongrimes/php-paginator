<?php


namespace JasonGrimes;


interface UrlGeneratorInterface
{
    /**
     * @param int $pageNumber
     * @return string
     */
    public function generatePageUrl($pageNumber);
}