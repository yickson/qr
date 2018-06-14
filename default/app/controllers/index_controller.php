<?php

Load::lib('phpqrcode/qrlib');
/**
 * Controller por defecto si no se usa el routes
 *
 */
class IndexController extends AppController
{

    public function index()
    {
      
    }
    
    public function qr()
    {
        View::select(null, null);
        QRcode::png('Kumbia es lo Máximo');
    }
}