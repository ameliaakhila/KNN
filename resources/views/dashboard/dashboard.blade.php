@extends('layout')

@section('title', 'Dashboard')

@section('content')
    <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
        <div class="card-body">
            <h4 class="card-title text-center">
                Aplikasi Klasifikasi Data dengan Metode KNN
            </h4>

            <p class="text-justify">
                <strong>KNN</strong> adalah singkatan dari <em>K-Nearest Neighbors</em>, sebuah algoritma dalam
                <em>machine learning</em>. KNN adalah algoritma pembelajaran terawasi yang mengklasifikasikan objek
                berdasarkan kedekatan jaraknya dengan data latih yang sudah ada.
                <br><br>
                Secara sederhana, KNN bekerja dengan cara mencari "<em>k</em>" data latih terdekat (tetangga) dari suatu
                titik data baru, lalu mengklasifikasikan titik data baru tersebut berdasarkan mayoritas kelas dari
                tetangga-tetangga terdekatnya.
            </p>

            <h5 class="mt-4">Rumus Kuadrat Jarak Euclidean:</h5>
            <div class="d-flex justify-content-center align-content-center my-3">
                <img class="w-50 img-fluid" src="{{ asset('assets/images/logos/rumus.png') }}" alt="rumus knn">
            </div>

            <h5 class="mt-4">Keterangan:</h5>
            <ul class="ms-4" style="list-style: square;">
                <li><strong>dist(x,y)</strong> : Jarak antara dua vektor atau titik data x dan y</li>
                <li><strong>√</strong> : Akar kuadrat dari jumlah kuadrat perbedaan tiap elemen</li>
                <li><strong>∑</strong> : (Simbol sigma) menjumlahkan dari indeks 𝑖 = 1 hingga 𝑛</li>
                <li><strong>𝑛</strong> : Jumlah dimensi atau fitur pada vektor/data</li>
                <li><strong>𝑥<sub>i</sub></strong> : Nilai fitur ke-i dari vektor 𝑥 (data pertama)</li>
                <li><strong>𝑦<sub>i</sub></strong> : Nilai fitur ke-i dari vektor 𝑦 (data kedua)</li>
                <li><strong>(𝑥<sub>i</sub> − 𝑦<sub>i</sub>)</strong> : Kuadrat selisih antara nilai fitur ke-i dari 𝑥 dan 𝑦</li>
            </ul>
        </div>
    </div>
@endsection
