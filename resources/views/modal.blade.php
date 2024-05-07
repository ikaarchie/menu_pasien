<div class="modal fade" id="addnew" tabindex="-1" data-bs-backdrop="static" aria-labelledby="addnewModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addnewModalLabel">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['url' => 'save']) !!}
                {!! Form::hidden('id') !!}
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        {!! Form::label('ruangan', 'Ruangan') !!}
                        {!! Form::text('ruangan', '', ['class' => 'form-control', 'required']) !!}
                    </div>
                    <div class="col-sm-6 mb-3">
                        {!! Form::label('kelas', 'Kelas') !!}
                        {!! Form::text('kelas', '', ['class' => 'form-control', 'required']) !!}
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 mb-3">
                        {!! Form::label('jaminan', 'Jaminan') !!}
                        {!! Form::select('jaminan', ['BPJS' => 'BPJS', 'Asuransi' => 'Asuransi', 'Pribadi' =>
                        'Pribadi'], null, ['class' => 'dropdown-toggle form-control', 'placeholder' =>
                        'Pilih Jaminan...','required']) !!}
                        {{-- {!! Form::text('jaminan', '', ['class' => 'form-control', 'required']) !!} --}}
                    </div>
                    <div class="col-sm-6 mb-3">
                        {!! Form::label('mrn', 'MRN') !!}
                        {!! Form::number('mrn', '', ['class' => 'form-control', 'required']) !!}
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 mb-3">
                        {!! Form::label('nama', 'Nama') !!}
                        {!! Form::text('nama', '', ['class' => 'form-control', 'required']) !!}
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4 mb-3">
                        {!! Form::label('tgl_lahir', 'Tanggal Lahir') !!}
                        {!! Form::date('tgl_lahir', '', ['class' => 'form-control', 'required']) !!}
                    </div>
                    <div class="col-sm-8 mb-3">
                        {!! Form::label('dpjp', 'DPJP') !!}
                        {!! Form::text('dpjp', '', ['class' => 'form-control', 'required']) !!}
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 mb-3">
                        {!! Form::label('diagnosa', 'Diagnosa') !!}
                        {!! Form::text('diagnosa', '', ['class' => 'form-control', 'required']) !!}
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 mb-3">
                        {!! Form::label('makan_pagi', 'Makan Pagi') !!}
                        {!! Form::text('makan_pagi', '', ['class' => 'form-control', 'required']) !!}
                    </div>
                    <div class="col-sm-6 mb-3">
                        {!! Form::label('snack_pagi', 'Snack Pagi') !!}
                        {!! Form::text('snack_pagi', '', ['class' => 'form-control', 'required']) !!}
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 mb-3">
                        {!! Form::label('makan_siang', 'Makan Siang') !!}
                        {!! Form::text('makan_siang', '', ['class' => 'form-control', 'required']) !!}
                    </div>
                    <div class="col-sm-6 mb-3">
                        {!! Form::label('snack_siang', 'Snack Siang') !!}
                        {!! Form::text('snack_siang', '', ['class' => 'form-control', 'required']) !!}
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 mb-3">
                        {!! Form::label('makan_sore', 'Makan Sore') !!}
                        {!! Form::text('makan_sore', '', ['class' => 'form-control', 'required']) !!}
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 mb-3">
                        {!! Form::label('keterangan', 'Keterangan') !!}
                        {!! Form::text('keterangan', '', ['class' => 'form-control', 'required']) !!}
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal"><i
                        class="fa-solid fa-xmark"></i>
                    Batal</button>
                <button type="submit" class="btn btn-sm btn-primary"><i class="fa-solid fa-floppy-disk"></i>
                    Simpan</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>