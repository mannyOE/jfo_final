<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['active'] = 'home';
		$data['meta_title'] = "Home";
		$data['meta_description'] = 'Baba Ojonugwa Movement is the official campaign for the candidacy of Baba JFO running for a seat at the federal house of representives to represent the good people of Ankpa, Olamaboro, Omala Federal Constituency';
		$data['meta_keywords'] = 'Baba JFO, Baba Ojonugwa Movement, Omala, Ankpa, Olamaboro, House of Representatives 2018';
		$this->load->view('header', $data);
		$this->load->view('home', $data);
		$this->load->view('footer');
	}
	public function contact()
	{
		$data['active'] = 'contact';
		$data['meta_title'] = "Contact";
		$data['meta_description'] = 'Baba Ojonugwa Movement is the official campaign for the candidacy of Baba JFO running for a seat at the federal house of representives to represent the good people of Ankpa, Olamaboro, Omala Federal Constituency';
		$data['meta_keywords'] = 'Baba JFO, Baba Ojonugwa Movement, Omala, Ankpa, Olamaboro, House of Representatives 2018';
		$this->load->view('header', $data);
		$this->load->view('contact', $data);
		$this->load->view('footer');
	}
	public function volunteer()
	{
		$data['active'] = 'volunteer';
		$data['meta_title'] = "Volunteer";
		$data['meta_description'] = 'Baba Ojonugwa Movement is the official campaign for the candidacy of Baba JFO running for a seat at the federal house of representives to represent the good people of Ankpa, Olamaboro, Omala Federal Constituency';
		$data['meta_keywords'] = 'Baba JFO, Baba Ojonugwa Movement, Omala, Ankpa, Olamaboro, House of Representatives 2018';
		$this->load->view('header', $data);
		$this->load->view('about', $data);
		$this->load->view('footer');
	}

	public function about()
	{
		$data['active'] = 'about';
		$data['meta_title'] = "About";
		$data['meta_description'] = 'Baba Ojonugwa Movement is the official campaign for the candidacy of Baba JFO running for a seat at the federal house of representives to represent the good people of Ankpa, Olamaboro, Omala Federal Constituency';
		$data['meta_keywords'] = 'Baba JFO, Baba Ojonugwa Movement, Omala, Ankpa, Olamaboro, House of Representatives 2018';
		$this->load->view('header', $data);
		$this->load->view('about', $data);
		$this->load->view('footer');
	}
}
