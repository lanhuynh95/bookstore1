@extends('admin')
@section('content')

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">Category</div>
            <div class="card-body">
                <div class="card-title">
                    <h3 class="text-center title-2">Add Category</h3>
                </div>
                <hr>
                <form action="" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="cc-payment" class="control-label mb-1">Name</label>
                        <input id="name" name="name" type="text" class="form-control"value="">
                    </div>
                    <div class="form-group">
                         <label for="cc-name" class="control-label mb-1">Intro</label>
                        <textarea name="intro" id="intro" rows="9" placeholder="Content..." class="form-control" data-gramm="true" data-txt_gramm_id="57c145d4-0294-531e-c213-3ff25f150ca5" data-gramm_id="57c145d4-0294-531e-c213-3ff25f150ca5" spellcheck="false" data-gramm_editor="true" style="z-index: auto; position: relative; line-height: 24px; font-size: 16px; transition: none 0s ease 0s; background: transparent !important;"></textarea>
                    </div>
                    <div>
                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                            <span id="submit">Submit</span>
                            <span id="payment-button-sending" style="display:none;">Loading…</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

{{-- <script>
    $(document).ready(function() {
       $("#submit").click(function(e) {
        e.preventDefault();
            $.ajax({
                url: 'http://bookstore.local/admin/category/add',
                type: 'POST',
                data: {param1: 'value1'},
            })
            .done(function() {
                console.log("success---------");
            })
        }); 
    })
    
</script> --}}
