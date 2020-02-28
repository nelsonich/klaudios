<?php


namespace App\Helpers;


class getLikedUser
{
    public static function getUserName($item)
    {
        $resUsers = "";
        foreach($item['getNewsLikesCounts'] as $user) {
            $resUsers .= $user['getNewsLikedUser']['first_name'] . "<br/>";
        }

        return $resUsers;
    }
}
