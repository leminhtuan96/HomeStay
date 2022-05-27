<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\HomeRepository;

class HomeController extends Controller
{
    public $home;
    public function __construct(HomeRepository $homeRepository)
    {
        $this->home = $homeRepository;
    }
    public function index()
    {
        $homes = $this->home->getAll();
        return view();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
