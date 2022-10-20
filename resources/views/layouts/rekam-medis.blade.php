@extends('maintemplatedashboard')
@section('content')
@extends('partials.sidebar')
@section('search')
<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-200P">
    <div class="input-group">
        <input type="search" id="search" class="form-control bg-light border-1 rounded-5 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">

        </div>
    </div>
</form>
    
@endsection
<div class="container-fluid">
    <div class="card shadow mb-5">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Daftar Riwayat Pemeriksaan</p>
        </div>
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pasien</th>
                            <th>Tanggal Periksa</th>
                            <th>Dokter</th>

                        </tr>
                    </thead>
                        <tbody id="alldata">
                        @php $j = 0 @endphp
                        <tr>
                            @foreach ($rekam as $item)
                            @php $j++ @endphp
                            <td style="padding-left: 15px">{{ $j }}</td>
                            <td>{{ $item->nama_pasien}}</td>
                            {{-- <th>{{ $item->tgl_periksa->format('d-m-Y') }}</th> --}}
                            <td>{{ date('d M Y', strtotime($item->tgl_periksa))}}</td>
                            <td>dr Rey</td>
                            {{-- <td style="padding-left: 32px"><button class="btn btn-sm py-auto" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $item->id_rekam_medis }}"><i class="bi bi-eye-fill"></i></button>
                                <div class="modal fade" id="exampleModal{{ $item->id_rekam_medis }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel"><strong>Keterangan</strong></h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body mb-4">
                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <div class="row mt-3">
                                                    <div class="col-sm-10"><strong>Nama Pasien</strong></div>
                                                </div>
                                                <div class="row">
                                                    <p class="card-text col-sm-10">{{ $item->nama_pasien }}</p>
                                                </div>
                                            </div>

                                            <div class="col-12 col-lg-6">
                                                <div class="row mt-3">
                                                    <div class="col-sm-10"><strong>Tekanan Darah</strong></div>
                                                </div>
                                                <div class="row">
                                                    <p class="card-text col-sm-10">{{ $item->tekanan_darah }}</p>
                                                </div>
                                            </div>
                                            </div>

                                            <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <div class="row mt-3">
                                                    <div class="col-sm-10"><strong>Nama Penyakit</strong></div>
                                                </div>
                                                <div class="row">
                                                    <p class="card-text col-sm-10">{{ $item->nama_penyakit }}</p>
                                                </div>
                                            </div>

                                            <div class="col-12 col-lg-6">
                                                <div class="row mt-3">
                                                    <div class="col-sm-10"><strong>Kadar Asam Urat</strong></div>
                                                </div>
                                                <div class="row">
                                                    <p class="card-text col-sm-10">{{ $item->kadar_asam_urat }}</p>
                                                </div>
                                            </div>
                                            </div>

                                            <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <div class="row mt-3">
                                                    <div class="col-sm-10"><strong>Tanggal Periksa</strong></div>
                                                </div>
                                                <div class="row">
                                                    <p class="card-text col-sm-10">{{ date('d M Y', strtotime($item->tgl_periksa))}}</p>
                                                </div>
                                            </div>

                                            <div class="col-12 col-lg-6">
                                                <div class="row mt-3">
                                                    <div class="col-sm-10"><strong>Kadar gula darah</strong></div>
                                                </div>
                                                <div class="row">
                                                    <p class="card-text col-sm-10">{{ $item->kadar_gula_darah }}</p>
                                                </div>
                                            </div>

                                            </div>

                                            <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <div class="row mt-3">
                                                    <div class="col-sm-10"><strong>Alergi Makanan</strong></div>
                                                </div>
                                                <div class="row">
                                                    <p class="card-text col-sm-10">{{ $item->alergi_makanan }}</p>
                                                </div>
                                            </div>

                                            <div class="col-12 col-lg-6">
                                                <div class="row mt-3">
                                                    <div class="col-sm-10"><strong>kadar kolesterol</strong></div>
                                                </div>
                                                <div class="row">
                                                    <p class="card-text col-sm-10">{{ $item->kadar_kolesterol }}</p>
                                                </div>
                                            </div>
                                        </div>

                                            <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <div class="row mt-3">
                                                    <div class="col-sm-10"><strong>Keterangan</strong></div>
                                                </div>
                                                <div class="row">
                                                    <p class="card-text col-sm-10">{{ $item->keterangan }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </td>

                    </tr>

                            @endforeach
                    </tbody>
                    <tbody id="konten">

                    </tbody>

                </table>
            </div>
            <div class="row">
                <div class="col-md-5 align-self-center">
                </div>
                <div class="col-md-5">
                    <nav class="dataTables_paginate paging_simple_numbers">
                        <ul class="pagination">
                            {{ $rekam->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#search').on('keyup',function () {
       $value=$(this).val();
       if($value){
        $('#alldata').hide();
        $('.pagination').hide();
       }else{
        $('#alldata').show();
        $('.pagination').show();
   }
       $.ajax({
        type:'get',
        url:'{{ URL::to('cari-rekam-pasien')}}',
        data:{'data': $value},
        success:function(data){
            $('#konten').html(data);
            
            
        }
       });
    })
    </script>
@endsection