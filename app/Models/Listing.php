<?php

namespace App\Models;


class Listing
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => "Listing One",
                'description' => 'Lorem ipsum dolor sit amet, vitae iudico sea id. Ei reque dolorem elaboraret mea, ius ea tempor verear. Pri no sale phaedrum consetetur, erat causae corpora quo ut.
                     Eam ei etiam nominati voluptaria, his id dicat disputando, ei vis porro suscipit.

                    Ea nam cibo ocurreret. Iusto perfecto cu eum, eum no tacimates petentium. Ea eos ullum graece vidisse, semper recusabo suscipiantur has ex, ei posse munere vel. Eum consul dignissim ex. Ne mea meis accusamus.'
            ],
            [
                'id' => 2,
                'title' => "Listing two tarar",
                'description' => 'Lorem ipsum dolor sit amet, vitae iudico sea id. Ei reque dolorem elaboraret mea, ius ea tempor verear. Pri no sale phaedrum consetetur, erat causae corpora quo ut.
                     Eam ei etiam nominati voluptaria, his id dicat disputando, ei vis porro suscipit.

                    Ea nam cibo ocurreret. Iusto perfecto cu eum, eum no tacimates petentium. Ea eos ullum graece vidisse, semper recusabo suscipiantur has ex, ei posse munere vel. Eum consul dignissim ex. Ne mea meis accusamus.'
            ],

        ];
    }

    public static function find($id)
    {
        $listings = self::all();

        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}
