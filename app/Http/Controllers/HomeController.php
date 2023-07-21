<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - Online Store";
        return view('home.index')->with("viewData", $viewData);
    }

    public function about()
    {
        $viewData = [];
        $viewData["title"] = "About us - Online Store";
        $viewData["subtitle"] =  "Elizabeth About";
        $viewData["image"] = asset("/img/elizabeth_logo_site_retina.png");
        $viewData["description"] =  "Elizabeth merupakan brand lokal indonesia yang bergerak di industri fashion sejak tahun 1963 dengan menghasilkan produk tas, sepatu, baju dan aksesories yang berkualitas.";
        $viewData["kontak"] = "Dibuat oleh: Icha Nur Yuliarahma\nNIM: 3.34.21.1.1.3\nKelas: IK-2B";

        return view('home.about')->with("viewData", $viewData);
    }
}
