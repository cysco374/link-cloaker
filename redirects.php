<?php

 /**
 * Link Cloaker 1.0
 *
 * @copyright Copyright (c) 2019, Ousama Yamine
 * @license http://opensource.org/licenses/mit-license.php MIT License
 * @package link-cloaker
 */

$myhomepage = 'https://claimads.netlify.app'; //Your Startpage

$affid = htmlspecialchars($_GET["affid"]); //Do not changing

$affLinkList = array( //Insert here the links do you want mask
"affiliatelink1" => "https://www.detik.com",
"affiliatelink2" => "https://www.kumparan.com"
);

$link = array_key_exists($affid, $affLinkList) === false ? $myhomepage : $affLinkList[$affid]; //Checks if the Link exists if not then redirect to your Homepage


header("Location: $link"); //Do not changing
exit(); //Do not changing
