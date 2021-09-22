<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\PVE2_API;

class PrxController extends Controller
{
    public function index(){
         # You can try/catch exception handle the constructor here if you want.
$pve2 = new PVE2_API("hostname", "username", "pve", "password");
# realm above can be pve, pam or any other realm available.

/* Optional - enable debugging. It print()'s any results currently */
// $pve2->set_debug(true);

if ($pve2->login()) {
    foreach ($pve2->get_node_list() as $node_name) {
        print_r($pve2->get("/nodes/".$node_name."/status"));
    }
} else {
    print("Login to Proxmox Host failed.\n");
    exit;
}
    }
}
