<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Database\Barang;
use App\Http\Controllers\Controller;

class BarangApiController extends Controller
{
  public function listitems( Request $request, Barang $barang )
  {
    $listitem = $barang->orderBy('id_barang', 'desc')->get();
    $data = [
      'status' => 200,
      'results' => $listitem
    ];
    return response()->json( $data, $data['status'] );
  }

  public function getitems( Request $request, Barang $barang, $id )
  {
    $listitem = $barang->where('id_barang', $id)->first();
    $data = [
      'status' => 200,
      'results' => $listitem
    ];
    return response()->json( $data, $data['status'] );
  }

  public function store( Request $request, Barang $barang )
  {
    $nama = $request->nama_barang;
    $merk = $request->merk_barang;
    $harga = $request->harga_barang;

    $barang = new $barang;
    $barang->nama_barang = $nama;
    $barang->merk_barang = $merk;
    $barang->harga = $harga;
    $barang->save();

    $res = [
      'status' => 200,
      'statusText' => 'Barang berhasil ditambah.'
    ];

    return response()->json( $res, $res['status'] );
  }

  public function update( Request $request, Barang $barang, $id )
  {
    $nama = $request->nama_barang;
    $merk = $request->merk_barang;
    $harga = $request->harga_barang;

    $barang = $barang->where('id_barang', $id)->first();
    $barang->nama_barang = $nama;
    $barang->merk_barang = $merk;
    $barang->harga = $harga;
    $barang->save();

    $res = [
      'status' => 200,
      'statusText' => 'Barang berhasil diupdate.'
    ];

    return response()->json( $res, $res['status'] );
  }

  public function destroy( Request $request, Barang $barang, $id )
  {
    $barang = $barang->where('id_barang', $id)->delete();
    $res = [
      'status' => 200,
      'statusText' => 'Barang berhasil dihapus.'
    ];

    return response()->json( $res, $res['status'] );
  }
}
