<div class="modal fade" id="modalEdit">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('kelompokDataSektoral.update') }}" method="POST" class="form" enctype="multipart/form-data">
                {{ csrf_field() }} {{ method_field('PATCH') }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <p style="font-weight: bold"><i class="fa fa-plus"></i>&nbsp;Form Edit Data</p>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="id" id="id_edit">

                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1">Kelompok Data</label>
                            <input type="text" class="form-control" id="kelompok_data_edit" name="kelompok_data">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1">Sumber Data</label>
                            <input type="text" class="form-control" id="sumber_data_edit" name="sumber_data">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1">Deskripsi Singkat</label>
                            <textarea name="deskripsi_singkat" class="form-control" id="deskripsi_singkat_edit" cols="30" rows="3"></textarea>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1">Dokumen PDF</label>
                            <input type="file" class="form-control" id="dokumen_pdf_edit" name="dokumen_pdf">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1">Dokumen Word</label>
                            <input type="file" class="form-control" id="dokumen_word_edit" name="dokumen_word">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm btn-flat " data-dismiss="modal"><i class="fa fa-close"></i>&nbsp;Batalkan</button>
                <button type="submit" class="btn btn-primary btn-sm btn-flat btnSubmit"><i class="fa fa-check-circle"></i>&nbsp;Simpan</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
