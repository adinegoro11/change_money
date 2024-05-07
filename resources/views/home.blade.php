<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Case Study</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mask.js') }}"></script>
</head>

<body>
    <div class="container text-center">
        <div class="row">

            <form class="row g-3">
                <div class="col-auto">
                    <label for="staticEmail2" class="visually-hidden">Email</label>
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Masukkan Angka">
                </div>
                <div class="col-auto">
                    <label for="inputPassword2" class="visually-hidden">Jumlah Belanja</label>
                    <input type="text" class="form-control" id="money" name="money" placeholder="Jumlah Belanja">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Submit</button>
                </div>
            </form>
        </div>
        <div class="row mb-3">
        <h3>Kemungkinan Pembayaran</h3>
        </div>
        <div class="row text-center">

            <div class="col-4"><h3><span class="badge text-bg-secondary">14.000</span></h3></div>
            <div class="col-4"><h3><span class="badge text-bg-secondary">14.000</span></h3></div>
            <div class="col-4"><h3><span class="badge text-bg-secondary">14.000</span></h3></div>
            <div class="col-4"><h3><span class="badge text-bg-secondary">14.000</span></h3></div>
            <div class="col-4"><h3><span class="badge text-bg-secondary">14.000</span></h3></div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#money').mask('000.000.000.000', {
                reverse: true
            });
        })
    </script>
</body>

</html>