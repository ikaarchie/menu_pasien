<!DOCTYPE html>
<html>

<body>
    <table style="width:100%; height:100%; font-size: 70%;" border="1">
        @foreach($menu_pasiens as $menu)
        <tr align="center">
            <td><b>{{ $menu->mrn }}</b></td>
            <td><b>{{ $menu->nama }}</b></td>
            <td><b>{{ date(" d F Y", strtotime($menu->tgl_lahir)) }}</b></td>
        </tr>
        <tr align="center">
            <td>
                <u>Diet Pagi</u>
                <br />
                <b>{{ $menu->makan_pagi }}</b>
            </td>
            <td>
                <u>Diet Siang</u>
                <br />
                <b>{{ $menu->makan_siang }}</b>
            </td>
            <td>
                <u>Diet Sore</u>
                <br />
                <b>{{ $menu->makan_sore }}</b>
            </td>
        </tr>
        <tr align="center">
            <td colspan="3">
                <u>Keterangan</u>
                <br />
                <b>{{ $menu->keterangan }}</b>
            </td>
        </tr>
        {{-- <tr>
            <td colspan="4" align="center">
                {!! DNS1D::getBarcodeSVG($menu->mrn, 'UPCA') !!}
            </td>
        </tr> --}}
        @endforeach
    </table>

    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>