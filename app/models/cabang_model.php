<?php
class cabang_model
{
  private $tbl = 'latlong';
  private $db;

  /*private $lat = [
    [
      -1.6350836, 103.5496536, '<a href="https://www.google.co.id/maps/place/PT+BARAKA+SARANA+TAMA+JAMBI/@-1.6350836,103.5496536,17z/data=!4m8!1m2!2m1!1sPT.+Baraka+Sarana+Tama+jambi!3m4!1s0x2e25877738218c03:0x6cb1d458b56fbb73!8m2!3d-1.6379308!4d103.5536754?hl=id" target="blank" style="text-decoration:none;">JAMBI</a>'

    ],
    [
      -5.3921866, 105.2668078, '<a href="https://www.google.com/maps/place/PT.+BARAKA+SARANA+TAMA/@-5.3921866,105.2668078,14.21z/data=!4m5!3m4!1s0x2e40db0e579f8443:0xfa6c9e1c3aa342a5!8m2!3d-5.392578!4d105.2884408" target="blank">BANDAR LAMPUNG</a>'

    ]
  ];*/
  public function __construct()
  {
    $this->db = new database;
  }


  public function getlatlong()
  {
    $this->db->query('SELECT * FROM ' . $this->tbl);
    return $this->db->semua();
  }
}
