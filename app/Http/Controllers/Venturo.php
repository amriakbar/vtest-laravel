<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Venturo as BaseController;
//use app\Models\Venturo\VenturoModels;

class Venturo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
      $this->venturoModels = new VenturoModels(); 
      // Instantiate the VenturoModels model in the constructor
    }
    public $path = 'https://tes-web.landa.id/intermediate/';

    public function index()
    {

        $jsonMenu = $this->venturoModels->venturoApi($menu);
        $resultMenu = $this->venturoModels->ekstrakData($jsonMenu, 'object');
        if ($post !== null) {
            $result = [
                'menu' => $resultMenu,
                'transaksi' => $resultTransaksi
            ];
            $this->buildData($result);
            $this->load->view('Venturo', compact($result));
          var_dump($result);
          }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($reslut)
    {
      $raw['menu'] = $result['menu'];
      $raw['transaksi'] = $result['transaksi'];
      $menu= $result['menu'];
      $transaksi = $result['transaksi'];

      $ttl = [];
      $ttlmn = [];
      foreach ($raw['menu'] as $a) {
        foreach ($raw['transaksi'] as $b) {
          if ($b->menu == $a->menu) {
            $mn = $b->menu;
            $bln = $this->Venturo_models->getMonth($b->tanggal);
            $ttl[$bln][] = $b->total;
            $ttlmn[$mn][] = $b->total;
          }
        }

        foreach ($ttl as $c => $cd) {
          $raw['ttl'] = $this->Venturo_models->hitung($cd);
        }

        foreach ($ttlmn as $d => $de){
          $raw['ttlmn'] = $this->Venturo_models->hitung($de);
        }

        $ttlmn = [];
        $ttl = [];
      }

      $this->show($raw);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $postData = $request->all();
      
        $post = $request->input('tahun');

        $menu = array(
          'url' => $this->path, 
          'perintah' => 'menu'
        );

        //$data = array(
        //	'tahun' => $this->input->post('tahun')
        //);

        if ($post == '2021') {
          $transaksi = array(
            'url' => $this->path,
            'perintah' => 'transaksi',
            'tahun' => '2021'
          );
          $jsonTransaksi = $this->Venturo_models->venturoApi($transaksi);
          $resultTransaksi = $this->Venturo_models->ekstrakData($jsonTransaksi, 'object');
        }elseif($post == '2022'){
          $transaksi = array(
            'url' => $this->path,
            'perintah' => 'transaksi',
            'tahun' => '2022'
          );
          $jsonTransaksi = $this->Venturo_models->venturoApi($transaksi);
          $resultTransaksi = $this->Venturo_models->ekstrakData($jsonTransaksi, 'object');
        }else{
          $this->load->view('Venturo', null);
        }

      return view('venturo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $value = $id;
      if($value !== null){
        for ($i = 1; $i <= 12; $i++){
          echo $i . ' ' . $value['ttl'].'<br>';
        }
      }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */  
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

  public function __construct()
    {
      parent::__construct();
      $this->load->model('venturo_models', 'Venturo_models');
      $this->load->library('table');
    }

  public function tampil($value = null){
  }

  public function buildData($result)
  }

  public function index()
  }
}
