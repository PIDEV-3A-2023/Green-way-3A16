<?php

namespace App\Service;

use Knp\Snappy\Pdf;
use App\Entity\User;

class PdfGenerator
{
    private $pdf;

    public function __construct(Pdf $pdf)
    {
        $this->pdf = $pdf;
    }

    public function generatePdfForUser(User $user)
    {
        $html = '<html><body><h1>Hello, ' . $user->getNom() . '!</h1></body></html>';
        $filename = $user->getNom() . '.pdf';

        return $this->pdf->getOutputFromHtml($html, [], true)   // The third parameter is for downloading the file
            ->setContentDisposition($filename);
    }
}
