@extends('dashboard.admin')

@section('isi')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <center>
                            <h1>Ca' Amang's Cafe</h1>
                            <p>Jl.Letjen Suprapto Gang XII No.4</p>
                            <p>+6285704623338</p>
                        </center>
                        <h3><b>INVOICE #{{ $details->id }}</b></h3>
                    </div>

                    <div class="card-body table-responsive">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <h4>Informasi Pelanggan</h4>
                                <p class="text-md-start"><b>Pelanggan</b> : {{ $details->fkBuyer->name }}</p>
                                <p class="text-md-start"><b>Alamat</b> : {{ $details->fkBuyer->address }}</p>
                                <p class="text-md-start"><b>Tanggal</b> : {{ $details->date }}</p>
                            </div>
                            <div class="col-md-6">
                                <h4>Informasi Harga</h4>
                                @php
                                    $total_price = 0;
                                    $discount_price = 0;
                                    $before_price = 0;
                                @endphp
                                @foreach ($details->fkTransactionDetail as $item)
                                    @php
                                        $total_price += $item->total;
                                        $before_price += $item->total_before;
                                        if ($item->total_discount != '') {
                                            $discount_price += $item->total_discount;
                                        }
                                    @endphp
                                @endforeach

                                <p class="text-md-start"><b>Total:</b>Rp.{{ number_format($total_price) }}</p>
                                @if ($discount_price != 0)
                                    <p class="text-md-start"><b>Total Discount:</b>Rp.{{ number_format($discount_price) }}
                                    </p>
                                    <p class="text-md-start"><b>Harga Asli:</b>Rp.{{ number_format($before_price) }}</p>
                                @else
                                    <p class="text-md-start"><b>Total Discount:</b>Tidak ada</p>
                                    <p class="text-md-start"><b>Harga Asli:</b>Rp.{{ number_format($before_price) }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <table class="table table-bordered table-hover text-nowrap">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Produk</th>
                                        <th>Qty</th>
                                        <th>Total Harga</th>
                                        <th>Discount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($details->fkTransactionDetail as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->fkProduct->name }}</td>
                                            <td>{{ $item->qty }}</td>
                                            <td>Rp.{{ number_format($item->total) }}</td>
                                            @if ($item->voucher_id != null)
                                                <td>{{ $item->fkVoucher->name }} - Rp.{{ $item->fkVoucher->diskon }}</td>
                                            @else
                                                <td>Tidak ada</td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
