<?php
class HomeController extends Controller {
    public function index() {
        $this->view('home/index', ['title' => 'Welcome to My Blog']);
    }
}