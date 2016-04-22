<?php
/**
 * Created by PhpStorm.
 * User: sheaoneill
 * Date: 22/04/16
 * Time: 14:27
 */

namespace StJosephsChurchEastWall;


class ObituaryRepository
{

    private $obituarys = [];

    public function __construct()
    {
        $this->obituarys = [];
        $this->obituarys[] = new Obituary(1, 'December', '2015', 'Margaret (Rita) Cullen', 'Killane Road');
        $this->obituarys[] = new Obituary(2, 'December', '2015', 'Mary O\'Connor', 'Merchants Road');
        $this->obituarys[] = new Obituary(3, 'December', '2015', 'Sheila Diver', 'Darndale Road');
        $this->obituarys[] = new Obituary(4, 'December', '2015', 'Elizabeth (Lily) Maher', 'Church Road');
        $this->obituarys[] = new Obituary(5, 'December', '2015', 'Valentine Jelagina', 'Church Court');
        $this->obituarys[] = new Obituary(5, 'December', '2015', 'Kathleen Buchanan', 'Bargy Road');

        $this->obituarys[] = new Obituary(1, 'January', '2016', 'Mortimer (Murt) Granger', 'Fairfield Avenue');
        $this->obituarys[] = new Obituary(2, 'January', '2016', 'Rita Keppel', 'Church Road');
        $this->obituarys[] = new Obituary(3, 'January', '2016', 'Michael Kenna', 'St. Mura\'s Tce.');
        $this->obituarys[] = new Obituary(2, 'January', '2016', 'Danny Gannon', 'Moy Elta Road');
        $this->obituarys[] = new Obituary(3, 'January', '2016', 'May Ryan', 'Seaview Ave');

        $this->obituarys[] = new Obituary(3, 'February', '2016', 'Kathleen Reilly', 'Church Road');
        $this->obituarys[] = new Obituary(3, 'February', '2016', 'Monica (Mona) Ryan', 'Caledon Road');
        $this->obituarys[] = new Obituary(3, 'February', '2016', 'Christina O\'Neill', 'Bargy Road');
        $this->obituarys[] = new Obituary(3, 'February', '2016', 'Margaret (Rita) Doran', 'Caledon Road');

    }

    public function getAll()
    {
        return $this->obituarys;
    }

}