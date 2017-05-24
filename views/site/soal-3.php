<?php

/* @var $this yii\web\View */

$this->title = 'Soal 3';
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
                <th></th>
                <th>Kelebihan</th>
                <th>Kekurangan</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>a</td>
                <td>www.traveloka.com</td>
                <td>
                    <ol>
                        <li>UI</li>
                        <li>Fitur</li>
                        <li>Menu Fitur (Home Page)</li>
                        <li>UX</li>
                        <li>Pembayaran</li>
                    </ol>
                </td>
                <td>
                    <ol>
                        <li>Design clean dan sangat menarik</li>
                        <li>Tiket pesawat, hotel, kereta api, pesawat + hotel, top-up pulsa & data dan tempat atraksi & kegiatan (rekreasi)</li>
                        <li>Menggunakan nav tab, sehingga ketika user klik menu tersebut tidak perlu pindah halaman (load semua page).</li>
                        <li>Mudah digunakan walaupun user awam</li>
                        <li>Pembayaran tidak manual</li>
                    </ol>
                </td>
                <td>
                    <ol>
                        <li>-</li>
                        <li>-</li>
                        <li>-</li>
                        <li>-</li>
                        <li>-</li>
                    </ol>
                </td>
            </tr>
            <tr>
                <td>b</td>
                <td>www.tiket.com</td>
                <td>
                    <ol>
                        <li>UI</li>
                        <li>Fitur</li>
                        <li>Menu Fitur (Home Page)</li>
                        <li>UX</li>
                        <li>Pembayaran</li>
                    </ol>
                </td>
                <td>
                    <ol>
                        <li>-</li>
                        <li>Tiket pesawat, hotel, kereta api dan tempat atraksi & kegiatan (rekreasi)</li>
                        <li>-</li>
                        <li>Mudah digunakan walaupun user awam</li>
                        <li>Pembayaran tidak manual</li>
                    </ol>
                </td>
                <td>
                    <ol>
                        <li>Design kurang clean dan terkesan kaku</li>
                        <li>Tidak ada fitur pesawat + hotel, top-up pulsa & data</li>
                        <li>Tidak Menggunakan nav tab, sehingga ketika user klik menu tersebut akan pindah halaman (load semua page).</li>
                        <li>-</li>
                        <li>-</li>
                    </ol>
                </td>
            </tr>
            <tr>
                <td>c</td>
                <td>www.via.id</td>
                <td>
                    <ol>
                        <li>UI</li>
                        <li>Fitur</li>
                        <li>Menu Fitur</li>
                        <li>UX</li>
                        <li>Pembayaran</li>
                    </ol>
                </td>
                <td>
                    <ol>
                        <li>Design clean, simple</li>
                        <li>Tiket pesawat, hotel, kereta api dan tempat atraksi & kegiatan (rekreasi)</li>
                        <li>-</li>
                        <li></li>
                        <li>Pembayaran tidak manual</li>
                    </ol>
                </td>
                <td>
                    <ol>
                        <li>-</li>
                        <li>Tidak ada fitur pesawat + hotel, top-up pulsa & data</li>
                        <li>Tidak Menggunakan nav tab, sehingga ketika user klik menu tersebut akan pindah halaman (load semua page).</li>
                        <li>Kurang bagus. Akan sulit digunakan bagi user awam</li>
                        <li>-</li>
                    </ol>
                </td>
            </tr>
            <tr>
                <td>d</td>
                <td>www.wego.co.id</td>
                <td>
                    <ol>
                        <li>UI</li>
                        <li>Fitur</li>
                        <li>Menu Fitur</li>
                        <li>UX</li>
                        <li>Pembayaran</li>
                    </ol>
                </td>
                <td>
                    <ol>
                        <li>Design clean, simple</li>
                        <li>Tiket pesawat, hotel</li>
                        <li>-</li>
                        <li>-</li>
                        <li>Pembayaran tidak manual</li>
                    </ol>
                </td>
                <td>
                    <ol>
                        <li>-</li>
                        <li>Tidak ada fitur pesawat + hotel, top-up pulsa & data, kereta dan tempat atraksi & kegiatan (rekreasi)</li>
                        <li>Tidak Menggunakan nav tab, sehingga ketika user klik menu tersebut akan pindah halaman (load semua page).</li>
                        <li>Kurang bagus. Akan sulit digunakan bagi user awam</li>
                        <li>-</li>
                    </ol>
                </td>
            </tr>
            <tr>
                <td>e</td>
                <td>www.hulaa.com (Redirect ke URL www.jelaja.com)</td>
                <td>
                    <ol>
                        <li>UI</li>
                        <li>Fitur</li>
                        <li>Menu Fitur</li>
                        <li>UX</li>
                        <li>Pembayaran</li>
                    </ol>
                </td>
                <td>
                    <ol>
                        <li>Design clean, simple</li>
                        <li>Tiket pesawat, hotel</li>
                        <li>Menggunakan nav tab, sehingga ketika user klik menu tersebut tidak perlu pindah halaman (load semua page).</li>
                        <li>-</li>
                        <li>-</li>
                    </ol>
                </td>
                <td>
                    <ol>
                        <li>-</li>
                        <li>Tidak ada fitur pesawat + hotel, top-up pulsa & data, kereta dan tempat atraksi & kegiatan (rekreasi)</li>
                        <li>-</li>
                        <li>Kurang bagus. Akan sulit digunakan bagi user awam</li>
                        <li>- (Loading lambat, tidak bisa masuk ke payment)</li>
                    </ol>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>