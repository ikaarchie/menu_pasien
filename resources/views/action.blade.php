<div class="modal fade" id="edit{{$menu->id}}" tabindex="-1" data-bs-backdrop="static" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Ubah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {!! Form::model($menu, [ 'method' => 'patch','route' => ['menu.update', $menu->id] ]) !!}
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        {!! Form::label('ruangan', 'Ruangan') !!}
                        {!! Form::text('ruangan', $menu->ruangan, ['class' => 'form-control', 'required']) !!}
                    </div>
                    <div class="col-sm-6 mb-3">
                        {!! Form::label('kelas', 'Kelas') !!}
                        {!! Form::text('kelas', $menu->kelas, ['class' => 'form-control', 'required']) !!}
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 mb-3">
                        {!! Form::label('jaminan', 'Jaminan') !!}
                        {!! Form::select('jaminan', ['BPJS' => 'BPJS', 'Asuransi' => 'Asuransi', 'Pribadi' =>
                        'Pribadi'], $menu->jaminan, ['class' => 'dropdown-toggle form-control', 'required']) !!}
                        {{-- {!! Form::text('jaminan', $menu->jaminan, ['class' => 'form-control', 'required']) !!} --}}
                    </div>
                    <div class="col-sm-6 mb-3">
                        {!! Form::label('mrn', 'MRN') !!}
                        {!! Form::number('mrn', $menu->mrn, ['class' => 'form-control', 'required']) !!}
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 mb-3">
                        {!! Form::label('nama', 'Nama') !!}
                        {!! Form::text('nama', $menu->nama, ['class' => 'form-control', 'required']) !!}
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4 mb-3">
                        {!! Form::label('tgl_lahir', 'Tanggal Lahir') !!}
                        {!! Form::date('tgl_lahir', $menu->tgl_lahir, ['class' => 'form-control', 'required']) !!}
                    </div>
                    <div class="col-sm-8 mb-3">
                        {!! Form::label('dpjp', 'DPJP') !!}
                        {!! Form::text('dpjp', $menu->dpjp, ['class' => 'form-control', 'required']) !!}
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 mb-3">
                        {!! Form::label('diagnosa', 'Diagnosa') !!}
                        {!! Form::text('diagnosa', $menu->diagnosa, ['class' => 'form-control', 'required']) !!}
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 mb-3">
                        {!! Form::label('makan_pagi', 'Makan Pagi') !!}
                        {!! Form::text('makan_pagi', $menu->makan_pagi, ['class' => 'form-control', 'required']) !!}
                    </div>
                    <div class="col-sm-6 mb-3">
                        {!! Form::label('snack_pagi', 'Snack Pagi') !!}
                        {!! Form::text('snack_pagi', $menu->snack_pagi, ['class' => 'form-control', 'required']) !!}
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 mb-3">
                        {!! Form::label('makan_siang', 'Makan Siang') !!}
                        {!! Form::text('makan_siang', $menu->makan_siang, ['class' => 'form-control', 'required']) !!}
                    </div>
                    <div class="col-sm-6 mb-3">
                        {!! Form::label('snack_siang', 'Snack Siang') !!}
                        {!! Form::text('snack_siang', $menu->snack_siang, ['class' => 'form-control', 'required']) !!}
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 mb-3">
                        {!! Form::label('makan_sore', 'Makan Sore') !!}
                        {!! Form::text('makan_sore', $menu->makan_sore, ['class' => 'form-control', 'required']) !!}
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 mb-3">
                        {!! Form::label('keterangan', 'Keterangan') !!}
                        {!! Form::text('keterangan', $menu->keterangan, ['class' => 'form-control', 'required']) !!}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal"><i
                        class="fa-solid fa-xmark"></i> Batal</button>
                {{Form::button('<i class="fa-solid fa-pen-to-square"></i> Ubah Data', ['class' => 'btn btn-sm
                btn-success',
                'type' => 'submit'])}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="delete{{$menu->id}}" tabindex="-1" data-bs-backdrop="static" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Hapus Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {!! Form::model($menu_pasiens, [ 'method' => 'delete','route' => ['menu.delete', $menu->id] ]) !!}
                <h5 class="text-center">Yakin hapus data?</h5>
                <h4 class="text-center">{{$menu->nama}}</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal"><i
                        class="fa fa-times"></i> Batal</button>
                {{Form::button('<i class="fa fa-trash"></i> Hapus', ['class' => 'btn btn-sm btn-danger', 'type' =>
                'submit'])}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>