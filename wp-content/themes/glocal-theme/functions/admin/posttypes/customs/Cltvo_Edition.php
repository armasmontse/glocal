<?php

class Cltvo_Edition extends Cltvo_PostTypeCustom_Master
{

    const nombre_plural = 'Ediciones';
    const nombre_singular = 'Edición';
    const slug = 'ediciones';

    protected static $supports = array('title');


    public function setMetas()
    {
		
    }

}
