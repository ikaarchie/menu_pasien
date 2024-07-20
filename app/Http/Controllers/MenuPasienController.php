<?php

namespace App\Http\Controllers;

use App\Models\MenuPasien;
use App\Exports\UsersExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class MenuPasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getData()
    {
        $menu_pasiens = MenuPasien::latest('created_at')->paginate(1000);

        return view('show')->with('menu_pasiens', $menu_pasiens);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $data = new MenuPasien();
        $data->ruangan = $request->input('ruangan');
        $data->kelas = $request->input('kelas');
        $data->jaminan = $request->input('jaminan');
        $data->mrn = $request->input('mrn');
        $data->nama = $request->input('nama');
        $data->tgl_lahir = $request->input('tgl_lahir');
        $data->dpjp = $request->input('dpjp');
        $data->diagnosa = $request->input('diagnosa');
        $data->makan_pagi = $request->input('makan_pagi');
        $data->snack_pagi = $request->input('snack_pagi');
        $data->makan_siang = $request->input('makan_siang');
        $data->snack_siang = $request->input('snack_siang');
        $data->makan_sore = $request->input('makan_sore');
        $data->keterangan = $request->input('keterangan');
        $data->save();

        return redirect('/')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function exportSemua()
    {
        // return Excel::download(new UsersExport, 'Menu_Diet_Pasien.xlsx');
        // return (new UsersExport)->download('Menu_Diet_Pasien.xlsx', \Maatwebsite\Excel\Excel::XLSX);

        $menu_pasiens = MenuPasien::orderBy('ruangan', 'ASC')->get();
        return view('exportSemua')->with('menu_pasiens', $menu_pasiens);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function exportLantai2()
    {
        $menu_pasiens = MenuPasien::where(DB::raw('substr(ruangan, 1, 1)'), '=', 2)
            ->orderBy('ruangan', 'ASC')
            ->get();
        return view('exportLantai2')->with('menu_pasiens', $menu_pasiens);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function exportLantai3()
    {
        $menu_pasiens = MenuPasien::where('ruangan', 'like', '%IGD%')
            ->orWhere('ruangan', 'like', '%ICU%')
            ->orWhere('ruangan', 'like', '%PICU%')
            ->orWhere('ruangan', 'like', '%HCU%')
            ->orWhere('ruangan', 'like', '%VK%')
            ->orWhere('ruangan', 'like', '%RR%')
            ->orderBy('ruangan', 'ASC')
            ->get();
        return view('exportLantai3')->with('menu_pasiens', $menu_pasiens);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function exportLantai4()
    {

        $menu_pasiens = MenuPasien::where(DB::raw('substr(ruangan, 1, 1)'), '=', 4)
            ->orderBy('ruangan', 'ASC')
            ->get();
        return view('exportLantai4')->with('menu_pasiens', $menu_pasiens);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function exportLantai5()
    {

        $menu_pasiens = MenuPasien::where(DB::raw('substr(ruangan, 1, 1)'), '=', 5)
            ->orderBy('ruangan', 'ASC')
            ->get();
        return view('exportLantai5')->with('menu_pasiens', $menu_pasiens);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function print($id)
    {
        $menu_pasiens = MenuPasien::where('id', $id)->get();

        return view('print')->with('menu_pasiens', $menu_pasiens);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MenuPasien  $menuPasien
     * @return \Illuminate\Http\Response
     */
    public function show(MenuPasien $menuPasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MenuPasien  $menuPasien
     * @return \Illuminate\Http\Response
     */
    public function edit(MenuPasien $menuPasien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MenuPasien  $menuPasien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $menu_pasiens = MenuPasien::find($id);
        $input = $request->all();
        $menu_pasiens->fill($input)->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MenuPasien  $menuPasien
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $menu_pasiens = MenuPasien::find($id);
        $menu_pasiens->delete();

        return redirect('/');
    }

    /**
     * 
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MenuPasien  $menuPasien
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $menu_pasiens = MenuPasien::where('nama', 'like', '%' . $request->search_string . '%')->paginate(1000);

        if ($menu_pasiens->count() >= 1) {
            return view('pagination_menu', compact('menu_pasiens'))->render();
        } else {
            return response()->json([
                'status' => 'nothing_found',
            ]);
        }
    }
}
