<?php

/* @var $this yii\web\View */

$this->title = 'Soal 2';
use yii\helpers\Html;

?>

<div class="site-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Pengertian</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>a</th>
                <th>CMS (Content Management System)</th>
                <td><p>Aplikasi web yg berisikan template untuk mengelola isi halaman web. penggunaan content management system tidak memerlukan pengetahuan pemrograman web yg handal karena proses instalasi dan cara penggunaannya sudah user friendly.</p></td>
            </tr>
            <tr>
                <th>b</th>
                <th>MVC (Model-View-Controller)</th>
                <td>Sebuah metode untuk membuat sebuah aplikasi dengan memisahkan data (Model) dari tampilan (View) dan cara bagaimana memprosesnya (Controller).</td>
            </tr>
            <tr>
                <th>c</th>
                <th>Cloud</th>
                <td>Secara umum, definisi cloud computing (komputasi awan) merupakan gabungan pemanfaatan teknologi komputer (komputasi) dalam suatu jaringan dengan pengembangan berbasis internet (awan) yang mempunyai fungsi untuk menjalankan program atau aplikasi melalui komputer – komputer yang terkoneksi pada waktu yang sama, tetapi tak semua yang terkonekasi melalui internet menggunakan cloud computing.</td>
            </tr>
            <tr>
                <th>d</th>
                <th>API (Application Programming Interface)</th>
                <td>Adalah sekumpulan perintah, fungsi, dan protokol yang dapat digunakan oleh programmer saat membangun perangkat lunak untuk sistem operasi tertentu. API memungkinkan programmer untuk menggunakan fungsi standar untuk berinteraksi dengan sistem operasi lain.</td>
            </tr>
            <tr>
                <th>e</th>
                <th>SOA</th>
                <td>SOA juga mendefinisikan dan menentukan arsitektur teknologi informasi (TI) yang dapat menunjang berbagai aplikasi untuk saling bertukar data dan berpartisipasi dalam proses bisnis. Fungsi-fungsi ini tidak terikat dengan sistem operasi dan bahasa pemrograman yang mendasari aplikasi-aplikasi tersebut.</td>
            </tr>
            <tr>
                <th>f</th>
                <th>RESTful</th>
                <td>Web service adalah standard yang digunakan untuk pertukaran data antar aplikasi atau sistem. Mengapa perlu standard? karena masing2 aplikasi yang melakukan pertukaran data bisa ditulis dengan bahasa pemrograman yang berbeda atau berjalan pada platform yang berbeda.</td>
            </tr>
            </tbody>
        </table>
    </div>

</div>