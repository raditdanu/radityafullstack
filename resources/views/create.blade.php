<!DOCTYPE html>
<html>
<head>
    <title>Masukkan Data Penduduk</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        h2 {
            text-align: center;
        }
        .mt-8 {
            margin-top: 8px;
        }
        button {
            background-color: #17458c;
            padding: 16px;
            color: white;
            border-style: none;
            border-radius: 8px;
            width: 100%;
            margin-top: 16px;
            font-size: 16px;
        }
        button:hover {
            cursor: pointer;
        }
        .field-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-top: 16px;
        }
        .field-value {
            margin-top: 8px;
            border-style: none;
            border-bottom-width: 1px;
            border-bottom-style: solid;
            border-bottom-color: black;
            width: 100%;
            outline: none;
        }
        </style>
</head>
<body>
<div class="container">
    <h2 class="create-penduduk-title">Create Penduduk</h2>
    <form action="{{ route('penduduk.store') }}" method="POST">
        @csrf
        <div class="field-container">
            <label for="nik">NIK:</label>
            <input type="text" class="field-value" id="nik" name="nik">
        </div>
        <div class="field-container">
            <label for="nama">Nama:</label>
            <input type="text" class="field-value" id="nama" name="nama">
        </div>
        <div class="field-container">
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <input type="text" class="field-value" id="jenis_kelamin" name="jenis_kelamin">
        </div>
        <div class="field-container">
            <label for="tgl_lahir">Tanggal Lahir: *</label>
            <input type="date" class="field-value" id="tgl_lahir" name="tgl_lahir" required>
        </div>
        <div class="field-container">
            <label for="propinsi_id">Propinsi ID: *</label>
            <input type="text" class="field-value" id="propinsi_id" name="propinsi_id" required>
        </div>
        <div class="field-container">
            <label for="kota_id">Kota ID: *</label>
            <input type="text" class="field-value" id="kota_id" name="kota_id" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>