<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Soap\Soap;

class TestController extends Controller
{
	protected $soap;

	public function __construct(Soap $soap) {
		$this->soap = $soap;
	}
    public function index() {
    	return $this->soap->start();
    }
}
