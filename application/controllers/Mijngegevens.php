<?php


class Mijngegevens extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($page='mijngegevens')
    {


            $this->load->helper('url');
            $this->load->model('page_model');
            $data['title']=ucfirst($page);
            $data['dataSet']= $this->page_model->getData();
            $data['dataSetMore']= $this->page_model->getMoreData();
            $dataSet = $this->page_model->getData();
            $dataSetMore = $this->page_model->getMoreData();
            $this->load->view('templates/header',$data);
            $this->load->view('pages/mijngegevens',$data);
            $this->load->view('templates/footer',$data);



        }

}
