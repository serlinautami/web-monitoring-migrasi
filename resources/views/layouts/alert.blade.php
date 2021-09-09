@if (session('success'))
    <div class="container-lg">
        <div class="row">
            <div class="col-12">
                <div class="alert alert-success w-100">
                    {{ session('success') }}
                </div>
            </div>
        </div>
    </div>
@elseif(session('error'))
    <div class="container-lg">
        <div class="row">
            <div class="col-12">
                <div class="alert alert-danger w-100">
                    {{ session('error') }}
                </div>
            </div>
        </div>
    </div>

@elseif($errors->any())
    <div class="container-lg">
        <div class="row">
            <div class="col-12">
                <div class="alert alert-danger w-100">
                    {{ $errors->first() }}
                </div>
            </div>
        </div>
    </div>

@elseif(session('info'))
    <div class="container-lg">
        <div class="row">
            <div class="col-12">
                <div class="alert alert-info w-100">
                    {{ session('info') }}
                </div>
            </div>
        </div>
    </div>
@endif
