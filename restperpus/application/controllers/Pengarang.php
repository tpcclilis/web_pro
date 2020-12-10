<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/RestController.php';

/**
 * controller pengarang buku perpus
 */
class Pengarang extends RestController
{

  function __construct()
  {
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST,GET');
    parent::__construct();
    $this->load->model('Pengarang_model','pengarang');
  }

  function index_get()
  {
    // code...
  }

  function insert_post()
  {
    $data = [
      'nama' => $this->post('nama'),
      'email' => $this->post('email')
    ];
    $res = $this->pengarang->insert($data);
    if ($res) {
      $this->response('Sukses! Data berhasil di simpan',RestController::HTTP_CREATED);
    }else {
      $this->response('Gagal! gagal menyimpan data',RestController::HTTP_INTERNAL_SERVER_ERROR);
    }
  }

  function all_get()
  {
    $res = $this->pengarang->findAll();
    if ($res) {
      $this->response($res);
    }else {
      $this->response('Gagal! data tidak ditemukan',RestController::HTTP_INTERNAL_SERVER_ERROR);
    }
  }

  function update_post()
  {
    $id = $this->post('id');
    $data = [
      'id' => $id,
      'nama' => $this->post('nama'),
      'email' => $this->post('email')
    ];
    $res = $this->pengarang->update($id,$data);
    if ($res) {
      $this->response('Sukses! Data berhasil diubah',RestController::HTTP_OK);
    }else {
      $this->response('Gagal! Perubahan gagal disimpan',RestController::HTTP_INTERNAL_SERVER_ERROR);
    }
  }

  function delete_post()
  {
    $id = $this->post('id');
    $res = $this->pengarang->delete($id);
    if ($res) {
      $this->response('Sukses! Data berhasil dihapus',RestController::HTTP_OK);
    }else {
      $this->response('Gagal menghapus data',RestController::HTTP_INTERNAL_SERVER_ERROR);
    }
  }

  function byid_get()
  {
    $id = $this->get('id');
    $res = $this->pengarang->findById($id);
    if ($res) {
      $this->response($res[0]);
    }else {
      $this->response('Gagal! data tidak ditemukan',RestController::HTTP_INTERNAL_SERVER_ERROR);
    }
  }
}

 ?>
