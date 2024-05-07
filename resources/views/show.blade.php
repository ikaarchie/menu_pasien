@extends('app')

@section('content')
<div class="header-waves">
    <div class="container pt-3">
        <h1 class="text-light text-center"><b>MENU DIET PASIEN</b></h1>
        <h2 class="text-light text-center">Rumah Sakit Hermina Banyumanik Semarang</h2>
    </div>

    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
        </defs>
        <g class="parallax">
            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
            <use xlink:href="#gentle-wave" x="48" y="1" fill="rgba(255,255,255,0.5)" />
            <use xlink:href="#gentle-wave" x="48" y="2" fill="rgba(255,255,255,0.3)" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="#fff" />
        </g>
    </svg>
</div>

<div class="container-fluid justify-content-center bg-white">
    <div class="d-md-flex justify-content-between">
        <div class="gap-1 d-md-flex justify-content-md-start mt-2">
            <button type="button" data-bs-toggle="modal" data-bs-target="#addnew" class="btn"
                style="background-color: #e73c7e;">
                <i class="text-white fa-solid fa-plus"></i><b class="text-white"> Tambah Data</b>
            </button>
        </div>

        <div class="gap-1 d-md-flex justify-content-md-center align-items-center mt-2">
            <form action="exportLantai2" method="POST" target="print_frame">
                @csrf
                <button type="submit" class="btn" style="border-color: #e73c7e;">
                    <i class="fa-solid fa-table" style="color: #e73c7e;"></i><b style="color: #e73c7e;"> Cetak Data
                        Lantai
                        2</b>
                </button>
            </form>
            <form action="exportLantai3" method="POST" target="print_frame">
                @csrf
                <button type="submit" class="btn" style="border-color: #e73c7e;">
                    <i class="fa-solid fa-table" style="color: #e73c7e;"></i><b style="color: #e73c7e;"> Cetak Data
                        Lantai
                        3</b>
                </button>
            </form>
            <form action="exportLantai4" method="POST" target="print_frame">
                @csrf
                <button type="submit" class="btn" style="border-color: #e73c7e;">
                    <i class="fa-solid fa-table" style="color: #e73c7e;"></i><b style="color: #e73c7e;"> Cetak Data
                        Lantai
                        4</b>
                </button>
            </form>
            <form action="exportLantai5" method="POST" target="print_frame">
                @csrf
                <button type="submit" class="btn" style="border-color: #e73c7e;">
                    <i class="fa-solid fa-table" style="color: #e73c7e;"></i><b style="color: #e73c7e;"> Cetak Data
                        Lantai
                        5</b>
                </button>
            </form>
            <form action="exportSemua" method="POST" target="print_frame">
                @csrf
                <button type="submit" class="btn" style="border-color: #e73c7e;">
                    <i class="fa-solid fa-table" style="color: #e73c7e;"></i><b style="color: #e73c7e;"> Cetak Semua
                        Data</b>
                </button>
            </form>
        </div>

        <div class="gap-1 d-md-flex justify-content-md-end mt-2">
            <div class="form-group w-10">
                <div class="input-group">
                    <input type="text" class="form-control" style="outline: 0.5px solid; outline-color: #e73c7e;"
                        id="myInput" onkeyup="cari()" placeholder="Cari Nama Pasien">
                    <span class="input-group-text text-light"
                        style="outline: 0.5px solid; outline-color: #e73c7e; background-color: #e73c7e;">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="table-responsive mt-1 table-data tbl-fixed">
        <table class="table table-bordered align-middle w-100" id="myTable">
            <thead>
                <tr class="sticky text-light text-center">
                    <th>No</th>
                    <th>Ruangan</th>
                    <th>Kelas</th>
                    <th>Jaminan</th>
                    <th>MRN</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>DPJP</th>
                    <th>Diagnosa</th>
                    <th>Makan Pagi</th>
                    <th>Snack Pagi</th>
                    <th>Makan Siang</th>
                    <th>Snack Siang</th>
                    <th>Makan Sore</th>
                    <th>Keterangan</th>
                    <th class="w-10">Aksi</th>
                </tr>
            </thead>
            <tbody style="background-color: #F8BBD0">
                @php $no = 1; @endphp
                @foreach($menu_pasiens as $key => $menu)
                <tr>
                    <td>{{ $menu_pasiens->firstItem() + $key }}</td>
                    {{-- <td>{{ substr($menu->ruangan, 0, 1); }}</td> --}}
                    <td>{{ $menu->ruangan }}</td>
                    <td>{{ $menu->kelas }}</td>
                    <td>{{ $menu->jaminan }}</td>
                    <td>{{ $menu->mrn }}</td>
                    <td>{{ $menu->nama }}</td>
                    <td>{{ date(" d/m/Y", strtotime($menu->tgl_lahir)) }}</td>
                    <td>{{ $menu->dpjp }}</td>
                    <td>{{ $menu->diagnosa }}</td>
                    <td>{{ $menu->makan_pagi }}</td>
                    <td>{{ $menu->snack_pagi }}</td>
                    <td>{{ $menu->makan_siang }}</td>
                    <td>{{ $menu->snack_siang }}</td>
                    <td>{{ $menu->makan_sore }}</td>
                    <td>{{ $menu->keterangan }}</td>
                    <td>
                        <div class="d-grid gap-1 d-sm-flex justify-content-sm-center">
                            <a href="print/{{ $menu->id }}" class="btn btn-sm btn-success" id="{{ $menu->id }}"
                                target="print_frame"><i class="fa-solid fa-print"></i></a>
                            <a href="#edit{{ $menu->id }}" data-bs-toggle="modal" class="btn btn-sm btn-warning"><i
                                    class="fa-solid fa-pen-to-square"></i></a>
                            <a href="#" class="btn btn-sm btn-danger deleteSwal" data-id="{{ $menu->id }}"
                                data-nama="{{ $menu->nama }}"><i class="fa-solid fa-trash"></i></a>
                            @include('action')
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="btn-toolbar justify-content-between mb-5">
            {{-- <div>
                Menampilkan
                {{ $menu_pasiens->firstItem() }}
                hingga
                {{ $menu_pasiens->lastItem() }}
                dari
                {{ $menu_pasiens->total() }}
                data.
            </div> --}}
            <div>
                {{ $menu_pasiens->links() }}
            </div>
        </div>
    </div>

</div>

{{-- fungsi pagination --}}
<script>
    $(document).ready(function(){
        $(document).on('click','.pagination a', function(e){
            e.preventDefault();
            let page = $(this).attr('href').split('page=')[1]
            menu_pasiens(page)
        })

        function menu_pasiens(page){
            $.ajax({
                url: "/pagination/paginate-data?page="+page,
                success: function(res){
                    $('.table-data').html(res);
                }
            })
        }
    });
</script>

{{-- fungsi search --}}
<script>
    function cari() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[5];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }       
        }
    }
</script>

{{-- fungsi sweet alert --}}
<script>
    $('.deleteSwal').click(function(){  
        var id = $(this).attr('data-id');
        var nama = $(this).attr('data-nama');
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success me-md-2',
                cancelButton: 'btn btn-danger me-md-2'
            },
            buttonsStyling: false
        })
        
        swalWithBootstrapButtons.fire({
            title: "Yakin?",
            text: "Data "+nama+" akan dihapus",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "delete/"+id+""
                swalWithBootstrapButtons.fire(
                    'Terhapus!',
                    'Data berhasil dihapus',
                    'success'
                )
            } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Dibatalkan!',
                    'Data batal dihapus',
                    'error'
                    )
            }
        })
    })
</script>

{{-- fungsi toastr --}}
<script>
    // toastr.success('Have fun storming the castle!', 'Miracle Max Says')
    @if (Session::has('success'))
        toastr.success("{{ Session::get('success') }}")
    @endif
</script>
@endsection