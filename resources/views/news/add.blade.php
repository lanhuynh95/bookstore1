@extends('admin')
@section('content')

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">Product</div>
            <div class="card-body">
                <div class="card-title">
                    <h3 class="text-center title-2">Add Product</h3>
                </div>
                <hr>
                <form action="" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="cc-payment" class="control-label mb-1">Category</label>
                        <select name="category_id" id="select" class="form-control">
                            <option value="0">Please select</option>
                            @foreach($categories as $category)
                            <option value={{$category->id}}>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="cc-payment" class="control-label mb-1">Title</label>
                        <input id="cc-pament" name="title" type="text" class="form-control"value="">
                    </div>
                    <div class="form-group has-success">
                        <label for="cc-name" class="control-label mb-1">Author</label>
                        <input id="cc-name" name="author" type="text" class="form-control cc-name valid" data-val="true" >
                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                    </div>
                    <div class="form-group">
                        <label for="cc-number" class="control-label mb-1">Price</label>
                        <input id="cc-number" name="price" type="number" class="form-control cc-number identified visa" value="" data-val="true" min="0">
                        <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                    </div>
                    <div class="form-group has-success">
                        <label for="cc-name" class="control-label mb-1">images</label>
                        <input id="cc-name" name="images" type="file" class="form-control cc-name valid" data-val="true" >
                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                    </div>
                    <div class="form-group">
                        <label for="cc-name" class="control-label mb-1">Status</label>
                        <div class="col col-md-9">
                            <div class="form-check-inline form-check">
                                <label for="inline-radio1" class="form-check-label ">
                                    <input type="radio" id="inline-radio1" name="status" value="1" class="form-check-input">On sale
                                </label>
                                <label for="inline-radio2" class="form-check-label "  style="margin: 0px 30px">
                                    <input type="radio" id="inline-radio2" name="status" value="2" class="form-check-input">Out of stock
                                </label>
                                <label for="inline-radio3" class="form-check-label ">
                                    <input type="radio" id="inline-radio3" name="status" value="3" class="form-check-input">stop selling
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                         <label for="cc-name" class="control-label mb-1">Intro</label>
                        <textarea name="intro" id="textarea-input" rows="9" placeholder="Content..." class="form-control" data-gramm="true" data-txt_gramm_id="57c145d4-0294-531e-c213-3ff25f150ca5" data-gramm_id="57c145d4-0294-531e-c213-3ff25f150ca5" spellcheck="false" data-gramm_editor="true" style="z-index: auto; position: relative; line-height: 24px; font-size: 16px; transition: none 0s ease 0s; background: transparent !important;"></textarea>
                    </div>
                    <div>
                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                            <span id="payment-button-amount">Submit</span>
                            <span id="payment-button-sending" style="display:none;">Loading…</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
