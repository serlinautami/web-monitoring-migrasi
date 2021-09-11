@if (session('success'))
    <div class="container-lg">
        <div class="row">
            <div class="col-12">
                <div class="alert alert-success w-100 alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-coreui-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
@elseif(session('error'))
    <div class="container-lg">
        <div class="row">
            <div class="col-12">
                <div class="alert alert-danger w-100 alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-coreui-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>

@elseif($errors->any())
    <div class="container-lg">
        <div class="row">
            <div class="col-12">
                <div class="alert alert-danger w-100 alert-dismissible fade show" role="alert">
                    {{ $errors->first() }}
                    <button type="button" class="btn-close" data-coreui-dismiss="alert"
                        aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>

@elseif(session('info'))
    <div class="container-lg">
        <div class="row">
            <div class="col-12">
                <div class="alert alert-info w-100 alert-dismissible fade show" role="alert">
                    {{ session('info') }}
                    <button type="button" class="btn-close" data-coreui-dismiss="alert"
                        aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
@endif
