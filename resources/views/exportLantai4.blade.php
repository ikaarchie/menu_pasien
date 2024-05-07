<style type="text/css">
    body {
        font-family: sans-serif;
    }

    table {
        border: 1px solid black;
        margin: 20px auto;
        border-collapse: collapse;
    }

    table th {
        border: 1px solid black;
        text-align: center;
    }

    table td {
        border: 1px solid black;
        padding: 3px 8px;
        text-align: left;
    }
</style>

@php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Diet Pasien Lantai 4.xls");
@endphp

<center>
    <h1><b>Data Diet Pasien<br />Rumah Sakit Hermina Banyumanik</b></h1>
</center>

<table border="1">
    <thead>
        <tr>
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
        </tr>
    </thead>

    <tbody>
        @php $no = 1; @endphp
        @foreach($menu_pasiens as $menu)
        <tr>
            <td>{{ $no++ }}</td>
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
        </tr>
        @endforeach
    </tbody>

    <tfoot>
        <tr></tr>
        <tr>
            <td colspan="2">Ahli Gizi</td>
            <td colspan="13"></td>
        </tr>
        <tr>
            <td colspan="2">PJ Perawat</td>
            <td colspan="13"></td>
        </tr>
        <tr>
            <td colspan="2">Pramusaji</td>
            <td colspan="13"></td>
        </tr>
        <tr>
            <td colspan="2">Jam Distribusi</td>
            <td colspan="13"></td>
        </tr>
    </tfoot>

</table>