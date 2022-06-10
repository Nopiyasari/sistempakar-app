<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit penyakit</title>
</head>
<body>
    <div class="container">
        <div class="card shadow">
            <div class="card-body">
                <div class="text-center display-4">
                    Edit Penyakit
                </div>
                <form method="POST" action="{{route('penyakit.update', $penyakit->id)}}">
                    @method('PUT')
                    @csrf
                    <input type="hidden" name="penyakit" value="{{$penyakit->id}}">
                      <div class="mb-3">
                        <label for="" class="form-label">Kode Penyakit</label>
                        <input name="kode_penyakit" value="{{$penyakit->kode_penyakit}}" type="text" class="form-control" placeholder="Masukkan kode penyakit">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Penyakit</label>
                        <input name="penyakit" value="{{$penyakit->penyakit}}" type="text" class="form-control" placeholder="Masukkan nama penyakit">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Penyebab</label>
                        <input name="penyebab" value="{{$penyakit->penyebab}}" type="text" class="form-control" placeholder="Masukkan masukkan penyebab penyakit">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Solusi</label>
                        <input name="solusi" value="{{$penyakit->solusi}}" type="text" class="form-control" placeholder="Masukkan solusi penyakit">
                      </div>
                      <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
